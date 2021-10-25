@include('admin.includes.tophead')

  <body class="nav-md">

  <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="background:#fff">
              <a href="#">
              	<img src="{{ URL::asset('frontend/img/logo.png') }}" alt="...">
              </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              
              
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i> Administration <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('administrator.create') }}">New Admin</a></li>
                      <li><a href="{{ route('administrator.adminlist') }}">Admin List</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-camera"></i> Banner <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('banner.create') }}">New Banner</a></li>
                      <li><a href="{{ route('banner.index') }}">Banner List</a></li>
                    </ul>
                  </li>
                   <li><a><i class="fa fa-users"></i> Clients <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('member.create') }}">New Clients</a></li>
                      <li><a href="{{ route('member.index') }}">Clients List</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bars"></i> Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('menus.create') }}">New Menu Item</a></li>
                      <li><a href="{{ route('menus.index') }}">Menu List</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-newspaper-o"></i> Content <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('contents.create') }}">New Content</a></li>
                      <li><a href="{{ route('contents.index') }}">Content List</a></li>
                    </ul>
                  </li>
                   <li><a><i class="fa fa-camera"></i> Photo Gallery <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('directors.create') }}">New Photo</a></li>
                      <li><a href="{{ route('directors.index') }}">Gallery List</a></li>
                    </ul>
                  </li>
                 <!--<li><a><i class="fa fa-users"></i> Offer <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('categories.create') }}">New Category</a></li>
                      <li><a href="{{ route('categories.index') }}">Category List</a></li>
                      <li><a href="{{ route('offer.create') }}">New Offer</a></li>
                      <li><a href="{{ route('offer.index') }}">Offer List</a></li>
                    </ul>
                  </li>
                 <li><a><i class="fa fa-users"></i> Blog <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('blog.create') }}">New Blog</a></li>
                      <li><a href="{{ route('blog.index') }}">Blog List</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i> Faq <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('faqs.create') }}">New Question</a></li>
                      <li><a href="{{ route('faqs.index') }}">Question List</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i> Directors <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('directors.create') }}">New Director</a></li>
                      <li><a href="{{ route('directors.index') }}">Directors' List</a></li>
                    </ul>
                  </li>-->
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              
               <a data-toggle="tooltip" data-placement="top" title="Logout" 
               href="{{ route('administrator.logout') }}" onClick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            @if (Auth::check())
                             {{ Auth::user()->name }}
                            @endif
                        </a>

                        <form id="logout-form" action="{{ route('administrator.logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ URL::asset('admin/images/img.jpg') }}"  alt="@if (Auth::check())
                             {{ Auth::user()->name }}
                            @endif">@if (Auth::check())
                             {{ Auth::user()->name }}
                            @endif
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    
                    <li>                    
                     <a href="{{ route('administrator.logout') }}" onClick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out pull-right"></i> Log Out
                        </a>

                        <form id="logout-form" action="{{ route('administrator.logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                 
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="{{ URL::asset('admin//images/img.jpg') }}"  alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{ URL::asset('admin//images/img.jpg') }}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{ URL::asset('admin//images/img.jpg') }}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{ URL::asset('admin//images/img.jpg') }}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
