@extends('layouts/master')
@section('title', 'Dashboard/Send SMS')
@section('style')
<style>
    .error {
        color: red;
    }
</style>
@stop
@section('content')
<section>
    <!-- START Page content-->
    <section class="main-content">
        <!-- <button type="button" class="btn btn-labeled btn-primary pull-right">
            <span class="btn-label"><i class="fa fa-plus-circle"></i>
            </span>Add Item</button> -->
        <h3>
            Dashboard
            <br>
            <small>Welcome user</small>
        </h3>
        <div class="row">
            <!-- START Send sms content content-->
            <div class="col-md-12">

                <div data-toggle="portlet" class="col-lg-12">
                    @include('flash::message')
                    <!-- START panel-->
                    <div class="panel panel-primary">
                        <div class="panel-heading portlet-handler">Send SMS
                            <a href="#" data-perform="panel-dismiss" data-toggle="tooltip" title="Close Panel" class="pull-right portlet-cancel">
                                <em class="fa fa-times"></em>
                            </a>
                        </div>
                        <form id="send" method="POST" action="{{route('sendMessage')}}">
                            @csrf
                            <div class="panel-body">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>To Number</label>
                                        <input type="text" id="receiver" required name="receiver" placeholder="Mobile number e.g. +254700000000" class="form-control">
                                        <div id="error"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>System user</label>
                                        <input type="text" name="sender" disabled value="{{$user->first_name}}" placeholder="Enter Sender Id" class="form-control">
                                    </div>
                                    <!-- <div class="checkbox c-checkbox">
                                        <label>
                                            <input type="checkbox" checked="">
                                            <span class="fa fa-times"></span>Check me out</label>
                                    </div> -->
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea name="message" required id="message" class="form-control" rows="5"> </textarea>
                                        <div id="error"></div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>From Number</label>
                                        <input type="text" name="sender" placeholder="Enter Sender Id" class="form-control">
                                    </div> -->
                                    <!-- <div class="checkbox c-checkbox">
                                        <label>
                                            <input type="checkbox" checked="">
                                            <span class="fa fa-times"></span>Check me out</label>
                                    </div> -->
                                </div>


                            </div>
                            <div class="panel-footer">
                                <button type="submit" class="btn btn-labeled btn-success">
                                    <span class="btn-label"><i class="fa fa-check"></i>
                                    </span>Send</button>
                                <!-- Danger button with label -->
                                <button type="button" class="btn btn-labeled btn-danger">
                                    <span class="btn-label"><i class="fa fa-times"></i>
                                    </span>Cancel</button>

                            </div>
                        </form>
                    </div>
                    <!-- END panel-->
                </div>
            </div>

        </div>
    </section>
    <!-- END Page content-->
</section>
<!-- END Main section-->
</section>

@endsection

@section('scripts')
<script type="text/javascript" src="{{url('js/jquery.validate.js')}}"></script>
<script>
    document).ready(
            $(function() {

                jQuery.validator.addMethod("phoneUS", function(phone_number, element) {
                    phone_number = phone_number.replace(/\s+/g, "");
                    return this.optional(element) || phone_number.length > 9 &&
                        phone_number.match(/^\+[0-9]{12}$/);
                }, "Specify a valid phone number!");
                $("#send").validate({

                    rules: {
                        receiver: {
                            required: true,
                            phoneUS: true
                        },
                        message: {
                            required: true,

                        },


                    },
                    messages: {
                        receiver: {
                            required: "Kindly provide receiver number",
                            phoneUS: "Please enter a valid phone number e.g +254700000000"
                        },
                        message: {
                            required: "Please provide the massage to be sent",

                        },
                        // start_date: {
                        //     required: "Please provide Transaction date",
                        // },

                    },

                });



            });
</script>

@endsection