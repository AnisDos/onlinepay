<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{  asset ('styleGentella/images/favicon.ico') }}" type="image/ico" />

    <title>admin PayEX </title>

    <!-- Bootstrap -->
    <link href="{{  asset ('styleGentella/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{  asset ('styleGentella/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{  asset ('styleGentella/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{  asset ('styleGentella/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{  asset ('styleGentella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{  asset ('styleGentella/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{  asset ('styleGentella/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{  asset ('styleGentella/build/css/custom.min.css') }}" rel="stylesheet">
    @yield('style')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ url('admin/') }}" class="site_title"><i class="fa fa-paw"></i> <span>Admin PayEX</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="/storage/{{auth()->user()->image}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{auth()->user()->firstName}} {{auth()->user()->lastName}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info d-->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/showExchangeInProgress') }}">Transaction en attente</a></li>
                      <li><a href="{{ url('admin/showExchangeValidated') }}">Transaction validé</a></li>
                      <li><a href="form_validation.html">Form Validation</a></li>
                      <li><a href="form_wizards.html">Form Wizard</a></li>
                      <li><a href="form_upload.html">Form Upload</a></li>
                      <li><a href="form_buttons.html">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Demande VISA <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/showDemandeInProgress') }}">Demande en attente</a></li>
                      <li><a href="{{ url('admin/showDemandeValidate') }}">Demande valider </a></li>
                      <li><a href="{{ url('admin/showDemandeCalceled') }}">Demande annuler </a></li>
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="calendar.html">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Avis des clients <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/showCommentInProgress') }}">Avis en attente</a></li>
                      <li><a href="{{ url('admin/showCommentApprouved') }}">Avis approuver</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/chartBank') }}">Chart Bank</a></li>
                      <li><a href="chartjs2.html">Chart JS2</a></li>
                      <li><a href="morisjs.html">Moris JS</a></li>
                      <li><a href="echarts.html">ECharts</a></li>
                      <li><a href="other_charts.html">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Banks <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/addNewBankForm') }}">ajouter une bank</a></li>
                      @foreach ($banks as $bank)
                          
                      <li><a href="/admin/bank/{{$bank->id}}">{{$bank->name}} @if (!$bank->confirmed)
                        ( bloque )
                          
                      @endif </a></li>
                      @endforeach
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bug"></i> Reclamation  <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/adminReclamationVisa') }}">Reclamation VISA</a></li>
                      <li><a href="{{ url('admin/adminReclamationExchange') }}">Reclamation Exchange</a></li>
                      <li><a href="{{ url('admin/reclamationMessenger') }}">reclamation Messenge</a></li>
           
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
            
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">{{auth()->user()->firstName}} {{auth()->user()->lastName}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{ url('user/profile') }}"> Profile</a></li>
                    <li><a href="{{ url(' /') }}"> home</a></li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a   onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();" ><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
               </form>
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
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
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
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
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
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
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
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









                



                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    @if (count($notif) > 0)
                    <i class="fa fa-bell-o"></i>
                     <span class="badge bg-green">{{ count($notif) + count($notifMinBank)   }}</span>
                    @elseif (count($notifMinBank) > 0)
                    <i class="fa fa-bell-o"></i>
                    <span class="badge bg-green">{{count($notif) + count($notifMinBank)   }}</span>

                    @else
                    <i class="fa fa-bell-slash"></i>
                    
                    @endif

                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">

                    @foreach ($notifMinBank as $n)
                    <li>
                      <a href="{{ url('admin/showExchangeInProgress') }}">
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                         lazem tcharchih 3ami  <strong>  {{$n->name}}</strong>
                        </span>
                      </a>
                    </li>
                    @endforeach

                    @foreach ($notif as $n)
                    <li>
                      <a href="{{ url('admin/showExchangeInProgress') }}">
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          {{$n['text']}} <strong>  {{$n['name']}}</strong>
                        </span>
                      </a>
                    </li>
                    @endforeach
            
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
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
        <!-- /top navigation -->

        <!-- page content -->
   






        @yield('content')









        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
              Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
          </footer>
          <!-- /footer content -->
        </div>
      </div>
  
      <!-- jQuery -->
      <script src="{{  asset ('styleGentella/vendors/jquery/dist/jquery.min.js') }}"></script>
      <!-- Bootstrap -->
      <script src="{{  asset ('styleGentella/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
      <!-- FastClick -->
      <script src="{{  asset ('styleGentella/vendors/fastclick/lib/fastclick.js') }}"></script>
      <!-- NProgress -->
      <script src="{{  asset ('styleGentella/vendors/nprogress/nprogress.js') }}"></script>
      <!-- Chart.js -->
      <script src="{{  asset ('styleGentella/vendors/Chart.js/dist/Chart.min.js') }}"></script>
      <!-- gauge.js -->
      <script src="{{  asset ('styleGentella/vendors/gauge.js/dist/gauge.min.js') }}"></script>
      <!-- bootstrap-progressbar -->
      <script src="{{  asset ('styleGentella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
      <!-- iCheck -->
      <script src="{{  asset ('styleGentella/vendors/iCheck/icheck.min.js') }}"></script>
      <!-- Skycons -->
      <script src="{{  asset ('styleGentella/vendors/skycons/skycons.js') }}"></script>
      <!-- Flot -->
      <script src="{{  asset ('styleGentella/vendors/Flot/jquery.flot.js') }}"></script>
      <script src="{{  asset ('styleGentella/vendors/Flot/jquery.flot.pie.js') }}"></script>
      <script src="{{  asset ('styleGentella/vendors/Flot/jquery.flot.time.js') }}"></script>
      <script src="{{  asset ('styleGentella/vendors/Flot/jquery.flot.stack.js') }}"></script>
      <script src="{{  asset ('styleGentella/vendors/Flot/jquery.flot.resize.js') }}"></script>
      <!-- Flot plugins -->
      <script src="{{  asset ('styleGentella/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
      <script src="{{  asset ('styleGentella/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
      <script src="{{  asset ('styleGentella/vendors/flot.curvedlines/curvedLines.js') }}"></script>
      <!-- DateJS -->
      <script src="{{  asset ('styleGentella/vendors/DateJS/build/date.js') }}"></script>
      <!-- JQVMap -->
      <script src="{{  asset ('styleGentella/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
      <script src="{{  asset ('styleGentella/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
      <script src="{{  asset ('styleGentella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
      <!-- bootstrap-daterangepicker -->
      <script src="{{  asset ('styleGentella/vendors/moment/min/moment.min.js') }}"></script>
      <script src="{{  asset ('styleGentella/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
  
      <!-- Custom Theme Scripts -->
      <script src="{{  asset ('styleGentella/build/js/custom.min.js') }}"></script>
      


      @yield('scripts')
      
    </body>
  </html>
  