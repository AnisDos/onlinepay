<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profile PayEX</title>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{  asset ('styleTestAdmin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{  asset ('styleTestAdmin/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{  asset ('styleTestAdmin/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{  asset ('styleTestAdmin/assets/images/favicon.png') }}" />
    
   @yield('style')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="{{ url('user/profile') }}"><img src="{{  asset ('styleTestAdmin/assets/images/logo.svg') }}" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="{{ url('user/profile') }}"><img src="{{  asset ('styleTestAdmin/assets/images/logo-mini.svg') }}" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div>
          <script type="text/javascript" > 
     setTimeout(function() {
  $('#successalert').fadeOut('fast');
}, 15000); // <-- time in milliseconds
</script>
          <ul class="navbar-nav navbar-nav-right">
            <li>
           



              @if (session('success'))
              <div class="alert alert-success" id="successalert">
                  {{ session('success') }}
              </div>
          @endif
            </li>
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                    
                    <img src="/storage/{{auth()->user()->image}}" alt="image"  >
               <!--    <img src="{{  asset ('styleTestAdmin/assets/images/faces/face1.jpg') }}" alt="image"> -->
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">{{auth()->user()->firstName}}</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href= {{ url('/') }} >
                  <i class="mdi mdi-cached mr-2 text-success"></i> home  </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item"  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" >
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
           </form>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item dropdown" id="testIfNotifOfMsgWork">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline" id="extorpdflink" ></i>
             
             
         
          


@if ( $reclamationNbr != 0 )

<span class="pending count-symbol bg-warning"></span>

@endif



               
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="{{  asset ('styleTestAdmin/assets/images/faces/face4.jpg') }}" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="{{  asset ('styleTestAdmin/assets/images/faces/face2.jpg') }}" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="{{  asset ('styleTestAdmin/assets/images/faces/face3.jpg') }}" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
              </div>
            </li>
            <li class="nav-item dropdown" id="khra" >
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
               
                    <img src="/storage/{{auth()->user()->image}}" alt="profile"  >
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">{{auth()->user()->firstName}} {{auth()->user()->lastName}}</span>
                  <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('user/profile') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('user/transactions') }}">
                <span class="menu-title">Mes transactions</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="{{ url('user/showUpdateInfo') }}">
                <span class="menu-title">paramètre general</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('user/showUpdatePassword') }}">
                <span class="menu-title">Modifier mot de passe</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                  <span class="menu-title">Avis</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('user/posterAvis') }}">Poster une avis</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('user/mesAvis') }}">Mes avis</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-tts" aria-expanded="false" aria-controls="ui-tts">
                  <span class="menu-title">Carte VISA</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-table-large menu-icon"></i>
                </a>
                <div class="collapse" id="ui-tts">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('user/demandeVisa') }}">Demande carte visa</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('user/etatDemande') }}">Etat de ma demande</a></li>
                  </ul>
                </div>
              </li>



              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui_trslm" aria-expanded="false" aria-controls="ui-tts">
                  <span class="menu-title">RECLAMATION</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-table-large menu-icon"></i>
                </a>
                <div class="collapse" id="ui_trslm">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('user/ReclamationVisa') }}">Reclamation sur carte visa</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('user/ReclamationExchange') }}">Reclamation sur exchange</a></li>
                  </ul>
                </div>
              </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Sample Pages</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item sidebar-actions">
              <span class="nav-link">
                <div class="border-bottom">
                  <h6 class="font-weight-normal mb-3">Projects</h6>
                </div>
                <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
                <div class="mt-4">
                  <div class="border-bottom">
                    <p class="text-secondary">Categories</p>
                  </div>
                  <ul class="gradient-bullet-list mt-4">
                    <li>Free</li>
                    <li>Pro</li>
                  </ul>
                </div>
              </span>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
        
            <div class="row">
             
            











                @yield('content')








              




            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->





  
  <!-- js for sweet alert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <!-- plugins:js -->
  <script src="{{  asset ('styleTestAdmin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{  asset ('styleTestAdmin/assets/js/off-canvas.js') }}"></script>
  <script src="{{  asset ('styleTestAdmin/assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{  asset ('styleTestAdmin/assets/js/misc.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <!-- End custom js for this page -->






  <script type="text/javascript">


    function   frid(){
     
     $("#form_validate_data_26").submit(function(event){
   
       event.preventDefault();
      
   swal({
     title: "Voulez-vous supprimer se commentaire?",
     text: "Si oui, vous ne pouvez pas le récupérer",
     icon: "warning",
     buttons: true,
     dangerMode: true,
   })
   .then((willDelete) => {
     if (willDelete) {
   
       swal("Le commentaire a été supprimé", {
         icon: "success",
       })
       .then((parpase) => {
         if (parpase) {
       if ( event.isDefaultPrevented()) { event.currentTarget.submit();}
      
   }
       });
     } else {
      swal("Le commentaire n'est pas supprimer", {
         icon: "error",
       });
       
     }
   });
   
   
     });
 }
          
      
       </script>
   






   @yield('scripts')





































{{-- 
js for mesenger 
 --}}


<script src="https://js.pusher.com/5.1/pusher.min.js"></script>
<script>
  var received_id = '';
  var my_id =  "{{auth()->user()->id}}" ;
  $(document).ready(function() {
    //ajax setup
    $.ajaxSetup({
      headers:{
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
      }
    });


    
       // Enable pusher logging - don't include this in production
       Pusher.logToConsole = true;

var pusher = new Pusher('5eff73df944d84937173', {
  cluster: 'ap2',
  forceTLS: true
});

var channel = pusher.subscribe('my_channel');
channel.bind('my_event', function(data) {

  if (my_id == data.from) {
    $('#' + data.to).click();
  
  } else if (my_id == data.to) {
  
  
    
if (received_id == data.from) {
  //if receiver is selected, reload the selected user..
  $('#' + data.from).click();
  
} else  {
  // if receiver is not selected add notification for that user
 
  var pending = parseInt($('#testIfNotifOfMsgWork').find('.pending count-symbol bg-warning').html());



  if (pending) {
 

  }else {
 
    //$('#testIfNotifOfMsgWork').append('<span class="pending count-symbol bg-warning"></span>');
    $("#extorpdflink").after('<span class="pending count-symbol bg-warning"></span>');


  }




}
    
  }
});


  } );









  </script>


{{-- 
end js for mesenger 
 --}}





{{-- 
 
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '671632033573800',
      cookie     : true,
      xfbml      : true,
      version    : 'v6.0'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

 --}}






 <script type="text/javascript">
  if (window.location.hash && window.location.hash == '#_=_') {
      window.location.hash = '';
  }
</script>


</body>
</html>