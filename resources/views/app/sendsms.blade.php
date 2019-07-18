@extends('layouts/master')

@section('content')
<section>
    <!-- START Page content-->
    <section class="main-content">
        <button type="button" class="btn btn-labeled btn-primary pull-right">
            <span class="btn-label"><i class="fa fa-plus-circle"></i>
            </span>Add Item</button>
        <h3>
            Dashboard
            <br>
            <small>Welcome user</small>
        </h3>
        <div class="row">
            <!-- START Send sms content content-->
            <div class="col-md-12">
                <div data-toggle="portlet" class="col-lg-12">
                    <!-- START panel-->
                    <div class="panel panel-primary">
                        <div class="panel-heading portlet-handler">Primary Panel
                            <a href="#" data-perform="panel-dismiss" data-toggle="tooltip" title="Close Panel" class="pull-right portlet-cancel">
                                <em class="fa fa-times"></em>
                            </a>
                        </div>
                        <form role="form" method="post" action="">
                            @csrf
                            <div class="panel-body">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>To Number</label>
                                        <input type="text" name="receiver" placeholder="Mobile number e.g. +254700000000" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>From Number</label>
                                        <input type="text" name="sender" placeholder="Enter Sender Id" class="form-control">
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
                                        <textarea name="message" class="form-control" rows="5"> </textarea>
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
                                <button type="button" class="btn btn-labeled btn-success">
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