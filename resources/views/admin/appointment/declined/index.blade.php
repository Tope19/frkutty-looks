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

                        <h4 class="mt-0 header-title">Declined Booked Info</h4>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>  Id</th>
                                <th>  Customer Name</th>
                                <th>  Make-Up Artist Name</th>
                                <th> Scheduled Date </th>
                                <th> Scheduled Time </th>
                                <th> Description </th>
                                <th>Comment</th>
                                <th> Status</th>
                                <th> Creation Date</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($declined as $decline)
                            <tr>
                                <td>{{ $decline->id }}</td>
                                <td>{{ $decline->user->fname }} {{ $decline->user->lname }}</td>
                                <td>{{ $decline->admin->fname }} {{ $decline->admin->lname }}</td>
                                <td>{{ date('F j, Y', strtotime($decline->date)) }}</td>
                                <td>{{ date('g:i a', strtotime($decline->time)) }}</td>
                                <td>{{ $decline->description }}</td>
                                <td>{{ $decline->comment }}</td>
                                <td>{{ $decline->status }}</td>
                                <td>{{ date('F j, Y g:i a',strtotime($decline->created_at)) }}</td>
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
