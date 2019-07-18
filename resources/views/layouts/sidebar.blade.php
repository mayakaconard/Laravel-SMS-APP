<aside class="aside">
    <!-- START Sidebar (left)-->
    <nav class="sidebar">
        <ul class="nav">
            <!-- START user info-->
            <li>
                <div data-toggle="collapse-next" class="item user-block has-submenu">
                    <!-- User picture-->
                    <div class="user-block-picture">
                        <img src="{{asset('assets/app/img/user/02.jpeg')}}" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle">
                        <!-- Status when collapsed-->
                        <div class="user-block-status">
                            <div class="point point-success point-lg"></div>
                        </div>
                    </div>
                    <!-- Name and Role-->
                    <div class="user-block-info">
                        <span class="user-block-name item-text">Welcome, {{$user->first_name}}</span>
                        <!-- <span class="user-block-role">Designer</span> -->
                        <!-- START Dropdown to change status-->
                        <div class="btn-group user-block-status">
                            <button type="button" data-toggle="dropdown" data-play="fadeIn" data-duration="0.2" class="btn btn-xs dropdown-toggle">
                                <div class="point point-success"></div>Online
                            </button>
                            <ul class="dropdown-menu text-left pull-right">
                                <li>
                                    <a href="#">
                                        <div class="point point-success"></div>Online
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="point point-warning"></div>Away
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="point point-danger"></div>Busy
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Dropdown to change status-->
                    </div>
                </div>
                <!-- START User links collapse-->
                <ul class="nav collapse">
                    <li><a href="#">Profile</a>
                    </li>
                    <li><a href="#">Settings</a>
                    </li>
                    <li><a href="#">Notifications<div class="label label-danger pull-right">120</div></a>
                    </li>
                    <li><a href="#">Messages<div class="label label-success pull-right">300</div></a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#">Logout</a>
                    </li>
                </ul>
                <!-- END User links collapse-->
            </li>
            <!-- END user info-->
            <!-- START Menu-->
            <li class="active">
                <a href="" title="Dashboard" data-toggle="collapse-next" class="has-submenu">
                    <em class="fa fa-dashboard"></em>

                    <span class="item-text">Dashboard</span>
                </a>

            </li>
            <li>
                <a href="" title="Charts" data-toggle="collapse-next" class="has-submenu">
                    <em class="fa fa-bar-chart-o"></em>
                    <span class="item-text">Send SMS</span>
                </a>
                <!-- START SubMenu item-->
                <ul class="nav collapse ">
                    <li>
                        <a href="{{route('sendSMS')}}" title="Flot" data-toggle="" class="no-submenu">
                            <span class="item-text">Send SMS</span>
                        </a>
                    </li>
                    <li>
                        <a href="chart-radial.html" title="Radial" data-toggle="" class="no-submenu">
                            <span class="item-text">Manage Items</span>
                        </a>
                    </li>
                </ul>
                <!-- END SubMenu item-->
            </li>
            <li>
                <a href="#" title="Tables" data-toggle="collapse-next" class="has-submenu">
                    <em class="fa fa-table"></em>
                    <span class="item-text">Sent Items</span>
                </a>
                <!-- START SubMenu item-->
                <ul class="nav collapse ">
                    <li>
                        <a href="{{route('sent_messages')}}" title="Data Table" data-toggle="" class="no-submenu">
                            <span class="item-text">Sent SmS</span>
                        </a>
                    </li>

                </ul>
                <!-- END SubMenu item-->
            </li>
            <li>
                <a href="#" title="Forms" data-toggle="collapse-next" class="has-submenu">
                    <em class="fa fa-edit"></em>
                    <span class="item-text">Manage Clents</span>
                </a>
                <!-- START SubMenu item-->
                <ul class="nav collapse ">
                    <li>
                        <a href="" title="Standard" data-toggle="" class="no-submenu">
                            <span class="item-text">Clients</span>
                        </a>
                    </li>
                </ul>
                <!-- END SubMenu item-->
            </li>
            <li>
                <a href="#" title="Elements" data-toggle="collapse-next" class="has-submenu">
                    <em class="fa fa-wrench"></em>
                    <span class="item-text">Settings</span>
                </a>
                <!-- START SubMenu item-->
                <ul class="nav collapse ">
                    <li>
                        <a href="panels.html" title="Panels" data-toggle="" class="no-submenu">
                            <span class="item-text">System Settings</span>
                        </a>
                    </li>

                </ul>
                <!-- END SubMenu item-->
            </li>

            <!-- END Menu-->
            <!-- Sidebar footer    -->
            <li class="nav-footer">
                <div class="nav-footer-divider"></div>
                <!-- START button group-->
                <div class="col-md-12">
                    <h4>Conardson &copy {{date('Y')}}</h4>
                </div>
                <!-- <div class="btn-group text-center col-md-6">

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
                </div> -->
                <!-- END button group-->
            </li>
        </ul>
    </nav>
    <!-- END Sidebar (left)-->
</aside>