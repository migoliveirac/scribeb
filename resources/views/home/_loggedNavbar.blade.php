<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <ul class="nav navbar-nav navbar-left">
                <li class="dropdown ">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        {!!Auth::user()->username!!}<i class="fa fa-user fa-fw"></i><i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{!!action('ManagerController@getDashboard',[Auth::user()->id])!!}"><font color="#606060"><i class="fa fa-dashboard fa-fw"></i> Dashboard</font></a>
                        </li>
                        <li><a href="{!!action('UserResourceController@show',[Auth::user()->id])!!}"><font color="#606060"><i class="fa fa-user fa-fw"></i> User Profile</font></a>
                        </li>
                        {{-- <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li> 
                        <li class="divider"></li>--}}
                        <li><a href="{!!url('auth/logout')!!}"><font color="#606060"><i class="fa fa-sign-out fa-fw"></i> Logout</font></a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
            </ul>





                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{!! url('/') !!}">Home</a>
                    </li>
                    <li>
                        <a href="{!! action('PagesController@articlesGuest', [Auth::user()]) !!}">Posts</a>
                    </li>
                    <li>
                        <a href="{!! url('/contact') !!}">Contact</a>
                    </li>
                </ul>


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>