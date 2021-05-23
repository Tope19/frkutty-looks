@extends('admin.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Drixo</a></li>
                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                        <li class="breadcrumb-item active">Form Validation</li>
                    </ol>
                </div>
                <h5 class="page-title">Schedule Booking Availability</h5>
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
                            <h4 class="mt-0 header-title">Create Availability Schedule</h4>

                            <form class="" action="{{ route('createAvailabilty') }}">{{csrf_field()}}
                                <div class="form-group">
                                    <label>Booking Limit Per day</label>
                                    <div>
                                        <input type="number" name="booking_limit" class="form-control" required placeholder="Enter Booking Limit"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Available Days</label>
                                    <div>
                                        <div class="input-daterange input-group">
                                            <input type="text" class="form-control" name="available_days_start" placeholder="Start Day" />
                                            <input type="text" class="form-control" name="available_days_end" placeholder="End Day" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Available Time</label>
                                    <div>
                                        <div class="input-daterange input-group">
                                            <input type="time" class="form-control" name="available_hours_start" placeholder="Start Hours" />
                                            <input type="time" class="form-control" name="available_hours_end" placeholder="End Hours" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">View Created schedules</h4>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Booking Limit</th>
                                <th>Available Days</th>
                                <th>Available Hours</th>
                                <th>Date Created</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>{{ Auth::user()->booking_limit }}</td>
                                <td>{{ Auth::user()->available_days_start }} - {{ Auth::user()->available_days_end }}</td>
                                <td>{{ Auth::user()->available_hours_start }} - {{ Auth::user()->available_hours_end }}</td>
                                <td>{{ Auth::user()->created_at->format('M D , Y h:i:A') }}</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container fluid -->
@endsection
