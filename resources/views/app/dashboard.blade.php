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
        <div data-toggle="notify" data-onload="" data-message="&lt;b&gt;New Updates Available!&lt;/b&gt; Don't forget to check them!" data-options="{&quot;status&quot;:&quot;danger&quot;, &quot;pos&quot;:&quot;top-right&quot;}" class="hidden-xs"></div>
        <div class="row">
            <!-- START dashboard main content-->
            <div class="col-md-9">
                <!-- START summary widgets-->
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <!-- START widget-->
                        <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="100" class="panel widget">
                            <div class="panel-body bg-primary">
                                <div class="row row-table row-flush">
                                    <div class="col-xs-8">
                                        <p class="mb0">SMS Today</p>
                                        <h3 class="m0">1.5k</h3>
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
                                        <h3 class="m0">50%</h3>
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
                                        <h3 class="m0">28%</h3>
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
                                        <h3 class="m0">140.5 kb</h3>
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
                <!-- START Secondary Widgets-->
                <div class="row">
                    <div class="col-md-4">
                        <!-- START widget-->
                        <div data-toggle="play-animation" data-play="fadeInLeft" data-offset="0" data-delay="1400" class="panel widget">
                            <div class="panel-body">
                                <div class="text-right text-muted">
                                    <em class="fa fa-users fa-2x"></em>
                                </div>
                                <h3 class="mt0">20</h3>
                                <p class="text-muted">New followers added this month</p>
                                <div class="progress progress-striped progress-xs">
                                    <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;" class="progress-bar progress-bar-success">
                                        <span class="sr-only">80% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END widget-->
                    </div>
                    <div class="col-md-4">
                        <!-- START widget-->
                        <div data-toggle="play-animation" data-play="fadeInLeft" data-offset="0" data-delay="1400" class="panel widget">
                            <div class="panel-body">
                                <div class="text-right text-muted">
                                    <em class="fa fa-bar-chart-o fa-2x"></em>
                                </div>
                                <h3 class="mt0">$ 1250</h3>
                                <p class="text-muted">Average Monthly Income</p>
                                <div class="progress progress-striped progress-xs">
                                    <div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;" class="progress-bar progress-bar-info">
                                        <span class="sr-only">40% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END widget-->
                    </div>
                    <div class="col-md-4">
                        <!-- START widget-->
                        <div data-toggle="play-animation" data-play="fadeInLeft" data-offset="0" data-delay="1400" class="panel widget">
                            <div class="panel-body">
                                <div class="text-right text-muted">
                                    <em class="fa fa-trophy fa-2x"></em>
                                </div>
                                <h3 class="mt0">$ 13865</h3>
                                <p class="text-muted">Yearly Income Goal</p>
                                <div class="progress progress-striped progress-xs">
                                    <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;" class="progress-bar progress-bar-warning">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END widget-->
                    </div>
                </div>
                <!-- END Secondary Widgets-->
                <!-- START table-->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- START panel-->
                        <div class="panel panel-default">
                            <div class="panel-heading">Pending tasks
                                <a href="#" data-perform="panel-dismiss" data-toggle="tooltip" title="Close Panel" class="pull-right">
                                    <em class="fa fa-times"></em>
                                </a>
                                <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                                    <em class="fa fa-minus"></em>
                                </a>
                            </div>
                            <!-- START table-responsive-->
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Task name</th>
                                            <th>Progress</th>
                                            <th>Deadline</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nunc luctus, quam non condimentum ornare</td>
                                            <td>
                                                <div class="progress progress-striped progress-xs">
                                                    <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;" class="progress-bar progress-bar-success">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <em class="fa fa-calendar fa-fw text-muted"></em>05/05/2014</td>
                                            <td class="text-center">
                                                <div class="btn-group"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-cog"></i></a>
                                                    <ul class="dropdown-menu pull-right text-left">
                                                        <li><a href="#">Action</a>
                                                        </li>
                                                        <li><a href="#">Another action</a>
                                                        </li>
                                                        <li><a href="#">Something else here</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Integer in convallis felis.</td>
                                            <td>
                                                <div class="progress progress-striped progress-xs">
                                                    <div role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;" class="progress-bar progress-bar-danger">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <em class="fa fa-calendar fa-fw text-muted"></em>15/05/2014</td>
                                            <td class="text-center">
                                                <div class="btn-group"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-cog"></i></a>
                                                    <ul class="dropdown-menu pull-right text-left">
                                                        <li><a href="#">Action</a>
                                                        </li>
                                                        <li><a href="#">Another action</a>
                                                        </li>
                                                        <li><a href="#">Something else here</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nullam sit amet magna vestibulum libero dapibus iaculis.</td>
                                            <td>
                                                <div class="progress progress-striped progress-xs">
                                                    <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;" class="progress-bar progress-bar-info">
                                                        <span class="sr-only">50% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <em class="fa fa-calendar fa-fw text-muted"></em>05/10/2014</td>
                                            <td class="text-center">
                                                <div class="btn-group"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-cog"></i></a>
                                                    <ul class="dropdown-menu pull-right text-left">
                                                        <li><a href="#">Action</a>
                                                        </li>
                                                        <li><a href="#">Another action</a>
                                                        </li>
                                                        <li><a href="#">Something else here</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END table-responsive-->
                            <div class="panel-footer text-right">
                                <a href="#">
                                    <small>View all</small>
                                </a>
                            </div>
                        </div>
                        <!-- END panel-->
                    </div>
                </div>
                <!-- END table-->
            </div>
            <!-- END dashboard main content-->
            <!-- START dashboard sidebar-->
            <div class="col-md-3">
                <!-- START messages-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="pull-right label label-info">33</div>
                        <div class="panel-title">Unread Messages</div>
                    </div>
                    <!-- START list group-->
                    <div class="list-group">
                        <!-- START list group item-->
                        <a href="#" class="list-group-item">
                            <div class="media">
                                <div class="pull-left">
                                    <img style="width: 48px; height: 48px;" src="app/img/user/01.jpeg" alt="Image" class="media-object img-rounded">
                                </div>
                                <div class="media-body clearfix">
                                    <small class="pull-right">2h</small>
                                    <strong class="media-heading text-primary">
                                        <div class="point point-success point-lg text-left"></div>Sheila Carter
                                    </strong>
                                    <p class="mb-sm">
                                        <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                    </p>
                                </div>
                            </div>
                        </a>
                        <!-- END list group item-->
                        <!-- START list group item-->
                        <a href="#" class="list-group-item">
                            <div class="media">
                                <div class="pull-left">
                                    <img style="width: 48px; height: 48px;" src="app/img/user/04.jpeg" alt="Image" class="media-object img-rounded">
                                </div>
                                <div class="media-body clearfix">
                                    <small class="pull-right">3h</small>
                                    <strong class="media-heading text-primary">
                                        <div class="point point-success point-lg text-left"></div>Rich Reynolds
                                    </strong>
                                    <p class="mb-sm">
                                        <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                    </p>
                                </div>
                            </div>
                        </a>
                        <!-- END list group item-->
                        <!-- START list group item-->
                        <a href="#" class="list-group-item">
                            <div class="media">
                                <div class="pull-left">
                                    <img style="width: 48px; height: 48px;" src="app/img/user/03.jpeg" alt="Image" class="media-object img-rounded">
                                </div>
                                <div class="media-body clearfix">
                                    <small class="pull-right">4h</small>
                                    <strong class="media-heading text-primary">
                                        <div class="point point-danger point-lg text-left"></div>Beverley Pierce
                                    </strong>
                                    <p class="mb-sm">
                                        <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                    </p>
                                </div>
                            </div>
                        </a>
                        <!-- END list group item-->
                        <!-- START list group item-->
                        <a href="#" class="list-group-item">
                            <div class="media">
                                <div class="pull-left">
                                    <img style="width: 48px; height: 48px;" src="app/img/user/06.jpeg" alt="Image" class="media-object img-rounded">
                                </div>
                                <div class="media-body clearfix">
                                    <small class="pull-right">4h</small>
                                    <strong class="media-heading text-primary">
                                        <div class="point point-danger point-lg text-left"></div>Alex Somar
                                    </strong>
                                    <p class="mb-sm">
                                        <small>Vestibulum pretium aliquam scelerisque.</small>
                                    </p>
                                </div>
                            </div>
                        </a>
                        <!-- END list group item-->
                    </div>
                    <!-- END list group-->
                    <!-- START panel footer-->
                    <div class="panel-footer clearfix">
                        <a href="#" class="pull-left">
                            <small>Read All</small>
                        </a>
                        <a href="#" class="pull-right">
                            <small>Dismiss All</small>
                        </a>
                    </div>
                    <!-- END panel-footer-->
                </div>
                <!-- END messages-->
                <!-- START activity-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">Activity feed</div>
                    </div>
                    <!-- START list group-->
                    <div class="list-group">
                        <!-- START list group item-->
                        <div class="list-group-item">
                            <div class="media">
                                <div class="pull-left">
                                    <span class="fa-stack fa-lg">
                                        <em class="fa fa-circle fa-stack-2x text-green"></em>
                                        <em class="fa fa-cloud-upload fa-stack-1x fa-inverse text-white"></em>
                                    </span>
                                </div>
                                <div class="media-body clearfix">
                                    <div class="media-heading text-green m0">NEW UPLOAD</div>
                                    <p class="m0">
                                        <small>New file <a href="#">entities.xls </a>uploaded to the cloud</small>
                                    </p>
                                    <small>5 minutes ago</small>
                                </div>
                            </div>
                        </div>
                        <!-- END list group item-->
                        <!-- START list group item-->
                        <div class="list-group-item">
                            <div class="media">
                                <div class="pull-left">
                                    <span class="fa-stack fa-lg">
                                        <em class="fa fa-circle fa-stack-2x text-info"></em>
                                        <em class="fa fa-file-text-o fa-stack-1x fa-inverse text-white"></em>
                                    </span>
                                </div>
                                <div class="media-body clearfix">
                                    <div class="media-heading text-info m0">NEW DOCUMENT</div>
                                    <p class="m0">
                                        <small>New document <a href="#">Lorem ipsum </a>created</small>
                                    </p>
                                    <small>1 hour ago</small>
                                </div>
                            </div>
                        </div>
                        <!-- END list group item-->
                        <!-- START list group item-->
                        <div class="list-group-item">
                            <div class="media">
                                <div class="pull-left">
                                    <span class="fa-stack fa-lg">
                                        <em class="fa fa-circle fa-stack-2x text-danger"></em>
                                        <em class="fa fa-exclamation fa-stack-1x fa-inverse text-white"></em>
                                    </span>
                                </div>
                                <div class="media-body clearfix">
                                    <div class="media-heading text-danger m0">IMPORTANT MESSAGE</div>
                                    <p class="m0">
                                        <small>Sammy Sam sent you an important messsage. <a href="#">Read now</a>
                                        </small>
                                    </p>
                                    <small>3 hours ago</small>
                                </div>
                            </div>
                        </div>
                        <!-- END list group item-->
                        <!-- START list group item-->
                        <div class="list-group-item">
                            <div class="media">
                                <div class="pull-left">
                                    <span class="fa-stack fa-lg">
                                        <em class="fa fa-circle fa-stack-2x text-warning"></em>
                                        <em class="fa fa-clock-o fa-stack-1x fa-inverse text-white"></em>
                                    </span>
                                </div>
                                <div class="media-body clearfix">
                                    <div class="media-heading text-warning m0">MEETING</div>
                                    <p class="m0">
                                        <small>Rich Reynods added a new meeting. <a href="#" class="label label-info">JOIN</a>
                                        </small>
                                    </p>
                                    <small>yesterday</small>
                                </div>
                            </div>
                        </div>
                        <!-- END list group item-->
                    </div>
                    <!-- END list group-->
                    <!-- START panel footer-->
                    <div class="panel-footer clearfix">
                        <a href="#" class="pull-left">
                            <small>Load more</small>
                        </a>
                    </div>
                    <!-- END panel-footer-->
                </div>
            </div>
            <!-- END dashboard sidebar-->
        </div>
    </section>
    <!-- END Page content-->
</section>
<!-- END Main section-->
</section>

@endsection