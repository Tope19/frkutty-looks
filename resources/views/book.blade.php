@extends('web.layouts.app4')
@section('title')
Book-Now
@endsection
@section('content')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="breadcrumb-option">
                    <a href="#">Home</a>
                    <span>Book</span>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="breadcrumb-text">
                    <h3>Book Now</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->


    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
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
                        <div class="form-header">
                            <h1>Book an appointment</h1>
                        </div>
                        <form action="{{ route('submitBooking') }}" method="post" class="form" enctype="multipart/form-data"> {{csrf_field()}}
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">First Name</span>
                                        <input class="form-control" readonly type="text" value="{{ Auth::user()->fname }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Last Name</span>
                                        <input class="form-control" readonly type="email" value="{{ Auth::user()->lname }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Email</span>
                                <input class="form-control" readonly type="email" value="{{ Auth::user()->email }}">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Phone</span>
                                <input class="form-control" type="tel" readonly value="{{ Auth::user()->phone }}">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Preferred Make-Up Artist</span>
                                <select name="admin_id" class="form-control">
                                    <option  disabled selected>Select</option>
                                    @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->fname }} {{ $user->lname }} ({{$user->available_days_start}} - {{$user->available_days_end}} {{$user->available_hours_start}} - {{$user->available_hours_end}})</option>
                                    @endforeach
                                </select>
                                <span class="select-arrow"></span>
                            </div>
                            <div class="form-group">
                                <span class="form-label">What do you want to do?</span>
                                <textarea class="form-control" name="description" required></textarea>
                                <span class="select-arrow"></span>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Book Date</span>
                                        <input class="form-control" name="date" type="date" required>
                                    </div>
                                </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Book Time</span>
                                            <input class="form-control" name="time" type="time" required>
                                        </div>
                                    </div>
                            </div>
                            <div class="form-btn">
                                <button type="submit" class="submit-btn">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
