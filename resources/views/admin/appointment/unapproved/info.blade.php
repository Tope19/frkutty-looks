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
                            <h4 class="mt-0 header-title">Booking Information</h4>
                                <div class="form-group">
                                    <label>Customer Name</label>
                                    <div>
                                        <input type="text" class="form-control" readonly value="{{$verification->user->fname}} {{$verification->user->lname}}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Make-Up Artist </label>
                                    <div>
                                        <input type="text" class="form-control" readonly value="{{$verification->admin->fname}} {{$verification->admin->lname}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Scheduled Date </label>
                                    <div>
                                        <input type="text" class="form-control" readonly value="{{ date('F j, Y', strtotime($verification->date)) }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Scheduled Time </label>
                                    <div>
                                        <input type="text" class="form-control" readonly value="{{ date('g:i a', strtotime($verification->time)) }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Description </label>
                                    <div>
                                        <textarea class="form-control" readonly>
                                            {{$verification->description}}
                                        </textarea>
                                    </div>
                                </div>

                                <form class="form-horizontal" action="{{ route('verify_appointment_status',$verification) }}" method="post">@csrf
                                    <input type="hidden" required name="status" value="Approved"/>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 mt-3 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Approve</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="">
                                    <form class="form-horizontal" action="{{ route('verify_appointment_status',$verification) }}" method="post">@csrf

                                        <div class="form-group">
                                            <label for="InputExperience" class="col-sm-2 control-label">Reason for Decline</label>

                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="hidden" required name="status" value="Declined"/>
                                                    <textarea class="form-control" id="InputExperience" name="comment"  rows="5" placeholder="Tell the Customer why his/her Booking is not approved"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">SUBMIT</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div> <!-- end col -->
        </div> <!-- end row -->


    </div><!-- container fluid -->
@endsection
