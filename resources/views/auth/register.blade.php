@extends('layouts/account')

@section('content')

<!-- START panel-->
<div data-toggle="play-animation" data-play="zoomIn" data-offset="0" data-duration="300" class="panel panel-default panel-flat">
    <p class="text-center mb-lg">
        <br>
        <a href="#">
            <img src="{{asset('assets/app/img/logo3.png')}}" alt="Image" class="block-center img-rounded">
        </a>
    </p>
    <p class="text-center mb-lg">
        <strong>SIGNUP.</strong>
    </p>
    @include('flash::message')
    <div class="panel-body">
        <form role="form" action="{{route('register')}}" method="POST">
            @csrf
            <div class="form-group has-feedback">
                <label for="fname" class="text-muted">First Name</label>
                <input id="fname" name="first_name" type="text" placeholder="Enter First Name" class="form-control">
                <span class="fa fa-envelope form-control-feedback text-muted"></span>
            </div>
            <div class="form-group has-feedback">
                <label for="surname" class="text-muted">Surname</label>
                <input id="surname" name="surname" type="text" placeholder="Enter Surname" class="form-control">
                <span class="fa fa-envelope form-control-feedback text-muted"></span>
            </div>
            <div class="form-group has-feedback">
                <label for="signupInputEmail1" class="text-muted">Email Address</label>
                <input id="signupInputEmail1" name="email" type="email" placeholder="Enter email" class="form-control">
                <span class="fa fa-envelope form-control-feedback text-muted"></span>
            </div>
            <div class="form-group has-feedback">
                <label for="phone" class="text-muted">Mobile No.</label>
                <input id="mobile" name="mobile_no" type="text" placeholder="Mobile Number" class="form-control">
                <span class="fa fa-lock form-control-feedback text-muted"></span>
            </div>
            <div class="form-group has-feedback">
                <label for="signupInputPassword1" class="text-muted">Password</label>
                <input id="signupInputPassword1" name="password" type="password" placeholder="Password" class="form-control">
                <span class="fa fa-lock form-control-feedback text-muted"></span>
            </div>

            <div class="clearfix">
                <div class="checkbox c-checkbox pull-left mt0">
                    <label>
                        <input type="checkbox" value="">
                        <span class="fa fa-check"></span>I agree with the <a href="#">terms</a>
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-primary">Register</button>
        </form>
    </div>
</div>
<!-- END panel-->
@endsection