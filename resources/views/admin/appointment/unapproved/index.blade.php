@extends('admin.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Drixo</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <h5 class="page-title">Dashboard</h5>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        @if (Session::has('flash_message_error'))
                            <div class="alert alert-error alert-block">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                    <strong>{!! session('flash_message_error') !!}</strong>
                            </div>
                        @endif
                        @if (Session::has('flash_message_success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                    <strong>{!! session('flash_message_success') !!}</strong>
                            </div>
                        @endif
                        <h4 class="mt-0 header-title">Latest Booked Info</h4>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>  Action</th>
                                <th>  Customer Name</th>
                                <th>  Make-Up Artist Name</th>
                                <th> Scheduled Date </th>
                                <th> Scheduled Time </th>
                                <th> Description </th>
                                <th> Status</th>
                                <th> Creation Date</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($verifications as $verification)
                            <tr>
                                <td><a href="{{ route('verify_appointment_info',$verification) }}" class="btn btn-outline-primary sm">View Info</a></td>
                                <td>{{ $verification->user->fname }} {{ $verification->user->lname }}</td>
                                <td>{{ $verification->admin->fname }} {{ $verification->admin->lname }}</td>
                                <td>{{ date('F j, Y', strtotime($verification->date)) }}</td>
                                <td>{{ date('g:i a', strtotime($verification->time)) }}</td>
                                <td>{{ $verification->description }}</td>
                                <td>{{ $verification->status }}</td>
                                <td>{{ date('F j, Y g:i a',strtotime($verification->created_at)) }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container fluid -->
@endsection
