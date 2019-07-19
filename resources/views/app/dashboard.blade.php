@extends('layouts/master')
@section('title', 'Dashboard/Home')
@section('content')
<section>
    <!-- START Page content-->
    <section class="main-content">
        <!-- <button type="button" class="btn btn-labeled btn-primary pull-right">
            <span class="btn-label"><i class="fa fa-plus-circle"></i> -->
        <!-- </span>Add Item</button> -->
        <h3>
            Dashboard <small>Welcome {{$user->first_name}}</small>


        </h3>
        <!-- <div data-toggle="notify" data-onload="" data-message="&lt;b&gt;New Updates Available!&lt;/b&gt; Don't forget to check them!" data-options="{&quot;status&quot;:&quot;danger&quot;, &quot;pos&quot;:&quot;top-right&quot;}" class="hidden-xs"></div> -->
        <div class="row">
            <!-- START dashboard main content-->
            <div class="col-md-12">
                <!-- START summary widgets-->
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <!-- START widget-->
                        <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="100" class="panel widget">
                            <div class="panel-body bg-primary">
                                <div class="row row-table row-flush">
                                    <div class="col-xs-8">
                                        <p class="mb0">SMS Today</p>
                                        <h3 class="m0">3</h3>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <em class="fa fa-user fa-2x"><sup class="fa fa-plus"></sup>
                                        </em>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <!-- Bar chart-->
                                <div class="text-center">
                                    <div data-bar-color="primary" data-height="30" data-bar-width="6" data-bar-spacing="6" class="inlinesparkline inline">
                                        5,3,4,6,5,9,4,4,10,5,9,6,4</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- START widget-->
                        <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="500" class="panel widget">
                            <div class="panel-body bg-warning">
                                <div class="row row-table row-flush">
                                    <div class="col-xs-8">
                                        <p class="mb0">SMS This Week</p>
                                        <h3 class="m0">50</h3>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <em class="fa fa-users fa-2x"></em>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <!-- Bar chart-->
                                <div class="text-center">
                                    <div data-bar-color="warning" data-height="30" data-bar-width="6" data-bar-spacing="6" class="inlinesparkline inline">
                                        10,30,40,70,50,90,70,50,90,40,40,60,40</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- START widget-->
                        <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="1000" class="panel widget">
                            <div class="panel-body bg-danger">
                                <div class="row row-table row-flush">
                                    <div class="col-xs-8">
                                        <p class="mb0">SMS Last Week</p>
                                        <h3 class="m0">28</h3>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <em class="fa fa-search fa-2x"></em>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <!-- Bar chart-->
                                <div class="text-center">
                                    <div data-bar-color="danger" data-height="30" data-bar-width="6" data-bar-spacing="6" class="inlinesparkline inline">
                                        2,7,5,9,4,2,7,5,7,5,9,6,4</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- START widget-->
                        <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="1500" class="panel widget">
                            <div class="panel-body bg-success">
                                <div class="row row-table row-flush">
                                    <div class="col-xs-8">
                                        <p class="mb0">SMS Last Month</p>
                                        <h3 class="m0">140</h3>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <em class="fa fa-globe fa-2x"></em>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <!-- Bar chart-->
                                <div class="text-center">
                                    <div data-bar-color="success" data-height="30" data-bar-width="6" data-bar-spacing="6" class="inlinesparkline inline">
                                        4,7,5,9,6,4,8,6,3,4,7,5,9</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END summary widgets-->
                <!-- START chart-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-collapse">
                                <div class="panel-body">
                                    <div style="height: 350px;" data-source="server/chart-data.php?type=area" class="chart-area flot-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END chart-->
                <!-- START table-->

            </div>
            <!-- END dashboard main content-->
            <!-- START dashboard sidebar-->

            <!-- END dashboard sidebar-->
        </div>
    </section>
    <!-- END Page content-->
</section>
<!-- END Main section-->
</section>

@endsection