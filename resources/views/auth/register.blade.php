@extends('layouts/account')

@section('content')

<!-- START panel-->
<div data-toggle="play-animation" data-play="zoomIn" data-offset="0" data-duration="300" class="panel panel-default panel-flat">
    <p class="text-center mb-lg">
        <br>
        <a href="#">
            <img src="{{asset('assets/app/img/sms.png')}}" style="height:80px; width:80px;" alt="Image" class="block-center img-rounded">
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
                <input id="fname" required name="first_name" type="text" placeholder="Enter First Name" class="form-control">
                <span class="fa fa-envelope form-control-feedback text-muted"></span>
                @error('first_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group has-feedback">
                <label for="surname" class="text-muted">Surname</label>
                <input id="surname" required name="surname" type="text" placeholder="Enter Surname" class="form-control">
                <span class="fa fa-envelope form-control-feedback text-muted"></span>
                @error('surname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group has-feedback">
                <label for="signupInputEmail1" class="text-muted">Email Address</label>
                <input id="signupInputEmail1" required name="email" type="email" placeholder="Enter email" class="form-control">
                <span class="fa fa-envelope form-control-feedback text-muted"></span>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group has-feedback">
                <label for="phone" class="text-muted">Mobile No.</label>
                <input id="mobile" name="mobile_no" required type="text" placeholder="Mobile Number" class="form-control">
                <span class="fa fa-lock form-control-feedback text-muted"></span>
                @error('mobile_no')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group has-feedback">
                <label for="signupInputPassword1" class="text-muted">Password</label>
                <input id="signupInputPassword1" required name="password" type="password" placeholder="Password" class="form-control">
                <span class="fa fa-lock form-control-feedback text-muted"></span>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

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
            <div class="">
                <label>

                    <span class=""></span>Already have account? <a href="{{route('login')}}">Click to login</a>
                </label>
            </div>

        </form>
    </div>
</div>
<!-- END panel-->
@endsection