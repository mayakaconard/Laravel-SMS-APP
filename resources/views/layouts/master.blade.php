<!DOCTYPE html>
<html lang="en" class="no-ie">

<head>
    <!-- Meta-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/app/css/bootstrap.css')}}">
    <!-- Vendor CSS-->
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/animo/animate animo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/csspinner/csspinner.min.css')}}">
    <!-- START Page Custom CSS-->
    <!-- END Page Custom CSS-->
    <!-- App CSS-->
    <link rel="stylesheet" href="{{asset('assets/app/css/app.css')}}">
    <!-- Modernizr JS Script-->
    <script src="{{asset('assets/vendor/modernizr/modernizr.js')}}" type="application/javascript"></script>
    <!-- FastClick for mobiles-->
    <script src="{{asset('assets/vendor/fastclick/fastclick.js')}}" type="application/javascript"></script>
    <script src="{{asset('assets/ga.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/vendor\datatable\extensions\datatable-bootstrap\css\dataTables.bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor\datatable\extensions\ColVis\css\dataTables.colVis.css')}}">
</head>

<body>
    <!-- START Main wrapper-->
    <section class="wrapper">
        <!-- START Top Navbar-->
        <nav role="navigation" class="navbar navbar-default navbar-top navbar-fixed-top">
            <!-- START navbar header-->
            <div class="navbar-header">
                <a href="{{route('home')}}" class="navbar-brand">
                    <div class="brand-logo">SMS APP</div>
                    <div class="brand-logo-collapsed">SMS</div>
                </a>
            </div>
            <!-- END navbar header-->
            <!-- START Nav wrapper-->
            <div class="nav-wrapper">
                <!-- START Left navbar-->
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#" data-toggle="aside">
                            <em class="fa fa-align-left"></em>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="navbar-search">
                            <em class="fa fa-search"></em>
                        </a>
                    </li>
                </ul>
                <!-- END Left navbar-->
                <!-- START Right Navbar-->
                <ul class="nav navbar-nav navbar-right">
                    <!-- START Messages menu (dropdown-list)-->
                    <li class="dropdown dropdown-list">
                        <a href="#" data-toggle="dropdown" data-play="bounceIn" class="dropdown-toggle">
                            <em class="fa fa-envelope"></em>
                            <div class="label label-danger">300</div>
                        </a>
                        <!-- START Dropdown menu-->
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-header">You have 5 new messages</li>
                            <li>
                                <div class="scroll-viewport">
                                    <!-- START list group-->
                                    <div class="list-group scroll-content">
                                        <!-- START list group item-->
                                        <a href="#" class="list-group-item">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img style="width: 48px; height: 48px;" src="{{asset('assets/app/img/user/01.jpeg')}}" alt="Image" class="media-object img-rounded">
                                                </div>
                                                <div class="media-body clearfix">
                                                    <small class="pull-right">2h</small>
                                                    <strong class="media-heading text-primary">
                                                        <div class="point point-success point-lg"></div>Sheila Carter
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
                                                    <img style="width: 48px; height: 48px;" src="{{asset('assets/app/img/user/04.jpeg')}}" alt="Image" class="media-object img-rounded">
                                                </div>
                                                <div class="media-body clearfix">
                                                    <small class="pull-right">3h</small>
                                                    <strong class="media-heading text-primary">
                                                        <div class="point point-success point-lg"></div>Rich Reynolds
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
                                                    <img style="width: 48px; height: 48px;" src="{{asset('assets/app/img/user/03.jpeg')}}" alt="Image" class="media-object img-rounded">
                                                </div>
                                                <div class="media-body clearfix">
                                                    <small class="pull-right">4h</small>
                                                    <strong class="media-heading text-primary">
                                                        <div class="point point-danger point-lg"></div>Beverley Pierce
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
                                                    <img style="width: 48px; height: 48px;" src="{{asset('assets/app/img/user/05.jpeg')}}" alt="Image" class="media-object img-rounded">
                                                </div>
                                                <div class="media-body clearfix">
                                                    <small class="pull-right">4h</small>
                                                    <strong class="media-heading text-primary">
                                                        <div class="point point-danger point-lg"></div>Perry Cole
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
                                                    <img style="width: 48px; height: 48px;" src="{{asset('assets/app/img/user/06.jpeg')}}" alt="Image" class="media-object img-rounded">
                                                </div>
                                                <div class="media-body clearfix">
                                                    <small class="pull-right">4h</small>
                                                    <strong class="media-heading text-primary">
                                                        <div class="point point-danger point-lg"></div>Carolyn Carpenter
                                                    </strong>
                                                    <p class="mb-sm">
                                                        <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- END list group item-->
                                    </div>
                                    <!-- END list group-->
                                </div>
                            </li>
                            <!-- START dropdown footer-->
                            <li class="p">
                                <a href="#" class="text-center">
                                    <small class="text-primary">READ ALL</small>
                                </a>
                            </li>
                            <!-- END dropdown footer-->
                        </ul>
                        <!-- END Dropdown menu-->
                    </li>
                    <!-- END Messages menu (dropdown-list)-->
                    <!-- START Alert menu-->
                    <li class="dropdown dropdown-list">
                        <a href="#" data-toggle="dropdown" data-play="bounceIn" class="dropdown-toggle">
                            <em class="fa fa-bell"></em>
                            <div class="label label-info">120</div>
                        </a>
                        <!-- START Dropdown menu-->
                        <ul class="dropdown-menu">
                            <li>
                                <!-- START list group-->
                                <div class="list-group">
                                    <!-- list item-->
                                    <a href="#" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left">
                                                <em class="fa fa-envelope-o fa-2x text-success"></em>
                                            </div>
                                            <div class="media-body clearfix">
                                                <div class="media-heading">Unread messages</div>
                                                <p class="m0">
                                                    <small>You have 10 unread messages</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- list item-->
                                    <a href="#" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left">
                                                <em class="fa fa-cog fa-2x"></em>
                                            </div>
                                            <div class="media-body clearfix">
                                                <div class="media-heading">New settings</div>
                                                <p class="m0">
                                                    <small>There are new settings available</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- list item-->
                                    <a href="#" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left">
                                                <em class="fa fa-fire fa-2x"></em>
                                            </div>
                                            <div class="media-body clearfix">
                                                <div class="media-heading">Updates</div>
                                                <p class="m0">
                                                    <small>There are
                                                        <span class="text-primary">2</span>new updates available</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- last list item -->
                                    <a href="#" class="list-group-item">
                                        <small>Unread notifications</small>
                                        <span class="badge">14</span>
                                    </a>
                                </div>
                                <div class="btn-group text-center col-md-6">

                                    <button type="button" data-toggle="tooltip" data-title="Add Contact" class="btn btn-link">
                                        <em class="fa fa-user text-muted"><sup class="fa fa-plus"></sup>
                                        </em>
                                    </button>
                                    <button type="button" data-toggle="tooltip" data-title="Settings" class="btn btn-link">
                                        <em class="fa fa-cog text-muted"></em>
                                    </button>
                                    <button type="button" data-toggle="tooltip" data-title="Logout" class="btn btn-link">
                                        <em class="fa fa-sign-out text-muted"></em>
                                    </button>
                                </div>
                                <!-- END list group-->
                            </li>
                        </ul>
                        <!-- END Dropdown menu-->
                    </li>
                    <!-- END Alert menu-->
                    <!-- START User menu-->
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" data-play="bounceIn" class="dropdown-toggle">
                            <em class="fa fa-user"></em>
                        </a>
                        <!-- START Dropdown menu-->
                        <ul class="dropdown-menu">
                            <li>
                                <div class="p">
                                    <p>Overall progress</p>
                                    <div class="progress progress-striped progress-xs m0">
                                        <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;" class="progress-bar progress-bar-success">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Profile</a>
                            </li>
                            <li><a href="#">Settings</a>
                            </li>
                            <li><a href="#">Notifications<div class="label label-info pull-right">5</div></a>
                            </li>
                            <li><a href="#">Messages<div class="label label-danger pull-right">10</div></a>
                            </li>
                            <li>

                                <a href="{{ url('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </li>
                        </ul>
                        <!-- END Dropdown menu-->
                    </li>
                    <!-- END User menu-->
                    <!-- START Contacts button-->

                    <!-- END Contacts menu-->
                </ul>
                <!-- END Right Navbar-->
            </div>
            <!-- END Nav wrapper-->
            <!-- START Search form-->
            <form role="search" class="navbar-form">
                <div class="form-group has-feedback">
                    <input type="text" placeholder="Type and hit Enter.." class="form-control">
                    <div data-toggle="navbar-search-dismiss" class="fa fa-times form-control-feedback"></div>
                </div>
                <button type="submit" class="hidden btn btn-default">Submit</button>
            </form>
            <!-- END Search form-->
        </nav>
        <!-- END Top Navbar-->
        <!-- START aside-->
        @include('layouts.sidebar')
        <!-- End aside-->

        <!-- START Main section-->
        @yield('content')
        <!-- END Main wrapper-->
        <!-- START Scripts-->
        <!-- Main vendor Scripts-->
        <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- Plugins-->
        <script src="{{asset('assets/vendor/chosen/chosen.jquery.min.js')}}"></script>
        <script src="{{asset('assets/vendor/slider/js/bootstrap-slider.js')}}"></script>
        <script src="{{asset('assets/vendor/filestyle/bootstrap-filestyle.min.js')}}"></script>
        <!-- Animo-->
        <script src="{{asset('assets/vendor/animo/animo.min.js')}}"></script>
        <!-- Sparklines-->
        <script src="{{asset('assets/vendor/sparklines/jquery.sparkline.min.js')}}"></script>
        <!-- Slimscroll-->
        <script src="{{asset('assets/vendor/slimscroll/jquery.slimscroll.min.js')}}"></script>
        <!-- START Page Custom Script-->
        <!--  Flot Charts-->
        <script src="{{asset('assets/vendor/flot/jquery.flot.min.js')}}"></script>
        <script src="{{asset('assets/vendor/flot/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('assets/vendor/flot/jquery.flot.resize.min.js')}}"></script>
        <script src="{{asset('assets/vendor/flot/jquery.flot.pie.min.js')}}"></script>
        <script src="{{asset('assets/vendor/flot/jquery.flot.time.min.js')}}"></script>
        <script src="{{asset('assets/vendor/flot/jquery.flot.categories.min.js')}}"></script>
        <!--[if lt IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
        <!-- END Page Custom Script-->
        <!-- App Main-->
        <script src="{{asset('assets/app/js/app.js')}}"></script>

        <script src="{{asset('assets/vendor\datatable\media\js\jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/vendor\datatable\extensions\datatable-bootstrap\js\dataTables.bootstrap.js')}}"></script>
        <script src="{{asset('assets/vendor\datatable\extensions\datatable-bootstrap\js\dataTables.bootstrapPagination.js')}}"></script>
        <!-- END Scripts-->
</body>

</html>