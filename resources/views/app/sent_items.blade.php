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

                        <div class="panel-body">
                            <table id="datatable2" class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Sender</th>
                                        <th>Receiver</th>
                                        <th>Message</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet Explorer 4.0</td>
                                        <td>Win 95+</td>
                                        <td>4</td>
                                        <td>2015-01-01</td>
                                        <td></td>
                                    </tr>





                                </tbody>
                            </table>



                        </div>

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