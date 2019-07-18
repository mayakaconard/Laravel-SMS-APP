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
        <strong>SIGN IN.</strong>
    </p>
    <div class="panel-body">
        <form role="form" class="mb-lg" method="POST" action="{{route('login')}}">
            @csrf
            <div class="text-right mb-sm"><a href="{{route('register')}}" class="text-muted">Need to Signup?</a>
            </div>
            <div class="form-group has-feedback">
                <input id="exampleInputEmail1" name="email" type="email" placeholder="Enter email" class="form-control">
                <span class="fa fa-envelope form-control-feedback text-muted"></span>
            </div>
            <div class="form-group has-feedback">
                <input id="exampleInputPassword1" name="password" type="password" placeholder="Password" class="form-control">
                <span class="fa fa-lock form-control-feedback text-muted"></span>
            </div>
            <div class="clearfix">
                <div class="pull-right"><a href="#" class="text-muted">Forgot your password?</a>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-primary">Login</button>
        </form>
    </div>
</div>
<!-- END panel-->
@endsection