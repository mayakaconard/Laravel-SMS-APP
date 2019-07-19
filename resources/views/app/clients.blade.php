@extends('layouts/master')
@section('title', 'Dashboard/Clients')

@section('content')
<section>
    <!-- START Page content-->
    <section class="main-content">
        <!-- <button type="button" class="btn btn-labeled btn-primary pull-right">
            <span class="btn-label"><i class="fa fa-plus-circle"></i>
            </span>Add Item</button> -->
        <h3>
            Dashboard <small>Clients</small>


        </h3>
        <div class="row">
            <!-- START Send sms content content-->
            <div class="col-md-12">
                <div data-toggle="portlet" class="col-lg-12">
                    <!-- START panel-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-labeled btn-primary pull-right">
                                    <span class="btn-label"><i class="fa fa-plus-circle"></i>
                                    </span>Add Client</button>
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
                                        <th>First Name</th>
                                        <th>Surname</th>
                                        <th>Mobile No.</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count = 1; ?>
                                    @foreach($clients as $client)
                                    <tr>
                                        <td>{{$count}}</td>
                                        <td style="width: 200px; ">{{$client->first_name}}</td>
                                        <td style="width: 200px; ">{{$client->surname}}</td>
                                        <td style="width: 500px; text-align: left;">{{$client->mobile_no}}</td>
                                        <td>{{$client->email_address}}</td>
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