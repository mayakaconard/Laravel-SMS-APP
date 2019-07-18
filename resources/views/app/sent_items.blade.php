@extends('layouts/master')
@section('title', 'Dashboard/Manage SMS')

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
                    <!-- START panel-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="btn-group pull-right">

                                <a href="{{ url('downloadExcel') }}" class="btn btn-labeled btn-success btn-sm">
                                    <span class="btn-label"><i class="fa fa-arrow-circle-left"></i>
                                    </span>Export CSV</a>
                                <!-- Danger button with label -->
                                <a href="" type="button" class="btn btn-labeled btn-danger btn-sm">

                                    Export PDF<span class="btn-label"><i class="fa fa-arrow-circle-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading portlet-handler">Sent SMS Items
                            <a href="#" data-perform="panel-dismiss" data-toggle="tooltip" title="Close Panel" class="pull-right portlet-cancel">
                                <em class="fa fa-times"></em>
                            </a>
                        </div>

                        <div class="panel-body">
                            <table id="datatable" class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Status</th>
                                        <th>Receiver</th>
                                        <th>Message</th>
                                        <th>Cost</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count = 1; ?>
                                    @foreach($data as $items)
                                    <tr>
                                        <td>{{$count}}</td>
                                        <td style="width: 200px; ">{{$items->status}}</td>
                                        <td style="width: 200px; ">{{$items->receiver_no}}</td>
                                        <td style="width: 500px; text-align: left;">{{$items->message}}</td>
                                        <td>{{$items->cost}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"> </i></a>
                                                <a href="" class="btn btn-warning btn-sm"> <i class="fa fa-eye"> </i></a>
                                            </div>
                                        </td>

                                    </tr>

                                    <?php $count++; ?>
                                    @endforeach


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