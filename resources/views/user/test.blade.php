<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Be</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- meta for bootrstap -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{  asset ('styleBeTheme/content/landing2/images/favicon.ico') }}">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:100,300,400,400italic,500,700,700italic'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Tenor+Sans:100,300,400,400italic,500,700,700italic'>

    <!-- CSS -->
    <link rel='stylesheet' href='{{  asset ('styleBeTheme/css/global.css') }}'>
    <link rel='stylesheet' href='{{  asset ('styleBeTheme/content/landing2/css/structure.css') }}'>
    <link rel='stylesheet' href='{{  asset ('styleBeTheme/content/landing2/css/landing2.css') }}'>
    <link rel='stylesheet' href='{{  asset ('styleBeTheme/content/landing2/css/custom.css') }}'>



<!-- css bootstrapp for form alert 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
-->
</head>

<body class="color-custom style-default button-default layout-full-width one-page no-content-padding header-transparent minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color logo-no-margin footer-copy-center mobile-tb-hide mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-sticky be-reg-20955">

 
    <div id="Wrapper">
        <div id="Header_wrapper">
            <header id="Header">
                <div id="Top_bar">
                    <div class="container">
                        <div class="column one">
                            <div class="top_bar_left clearfix">
                                <div class="logo">
                                    <a id="logo" href="index-landing2.html" title="BeLanding 2 - BeTheme" data-height="50" data-padding="30"><img class="logo-main scale-with-grid" src="{{  asset ('styleBeTheme/content/landing2/images/landing2.png') }}"
                                         data-retina="{{  asset ('styleBeTheme/content/landing2/images/retina-landing2.png') }}" data-height="50" alt="landing2"><img class="logo-sticky scale-with-grid" src="{{  asset ('styleBeTheme/content/landing2/images/landing2.png') }}" 
                                        data-retina="{{  asset ('styleBeTheme/content/landing2/images/retina-landing2.png') }}" data-height="50" alt="landing2">
                                        <img class="logo-mobile scale-with-grid" src="{{  asset ('styleBeTheme/content/landing2/images/landing2.png') }}" data-retina="{{  asset ('styleBeTheme/content/landing2/images/retina-landing2.png') }}" data-height="50" alt="landing2">
                                        <img class="logo-mobile-sticky scale-with-grid" src="{{  asset ('styleBeTheme/content/landing2/images/landing2.png') }}" data-retina="{{  asset ('styleBeTheme/content/landing2/images/retina-landing2.png') }}" data-height="50" alt="landing2">
                                    </a>
                                </div>
                                <div class="menu_wrapper">
                                    <nav id="menu">
                                        <ul id="menu-main-menu" class="menu menu-main">
                                            <li >
                                                <a href="#Header_wrapper"><span>Start</span></a>
                                            </li>
                                            <li >
                                                <a href="#how"><span>How it's working?</span></a>
                                            </li>
                                            <li >
                                                <a href="#rules"><span>Rules</span></a>
                                            </li>
                                            <li >
                                                <a href="#pricing"><span>Pricing</span></a>
                                            </li>
                                            <li >
                                                <a href="#clients"><span>Partners &#038; Clients</span></a>
                                            </li>
                                            <li >
                                                <a href="#contact"><span>Contact</span></a>
                                            </li>














                                                  <!-- Authentication Links -->
                                        @guest
                                        <li style="    left:94%;
                                        position:absolute;">
                                            <a    href="{{ route('login') }}"><span>{{ __('Login') }}</span></a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li style="    left:100%;
                                            position:absolute;" >
                                                <a    href="{{ route('register') }}"><span>{{ __('Register') }}</span></a>
                                            </li>
                                        @endif
                                    @else
                                        <li style="    left:100%;
                                        position:absolute;"  class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->firstName }} <span class="caret"></span>
                                            </a>
            
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <a    href="{{ url('user/profile') }}">profile</a>


                                                @if (auth()->user()->is_admin)

                                                <a    href="{{ url('admin') }}">Admin panel</a>
                                            
                                             @endif
            
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest



























                                        </ul>
                                    </nav>
                                    <a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
                                </div>
                            </div>
                            <div class="top_bar_right">

                                <div class="top_bar_right_wrapper" >
                               
                                  
                                    <ul class="navbar-nav ml-auto">
                                  
                                    </ul>
                              
                               <!--     <a href="http://bit.ly/1M6lijQ" class="action_button" target="_blank"> login </a>       -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section mcb-section" style="padding-top:40px; padding-bottom:80px; background-image:url({{  asset ('styleBeTheme/content/landing2/images/home_landing2_sectionbg10.png')}}); background-repeat:no-repeat; background-position:center top">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                <div class="image_wrapper">
                                                    <img class="scale-with-grid" src="{{  asset ('styleBeTheme/content/landing2/images/home_landing2_pic2.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-second valign-middle clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">





                                            <div class="column_attr clearfix">
                                                <h2>One credit card,
                                                    <br> your unlimited possibilities.</h2>
                                                <hr class="no_line" style="margin:0 auto 10px">
                                                <p>
                                                    Aliquam ac dui vel dui vulputate consectetur. Mauris accumsan, massa non consectetur condimentum, diam arcu tristique nibh, nec egestas diam elit at nulla.
                                                </p>
                                                <hr class="no_line" style="margin:0 auto 15px">
                                                <a class="button button_size_2 button_theme button_js" href="#"><span class="button_label">How it's working?</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-second valign-middle clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                <div class="image_wrapper">
                                                    <img class="scale-with-grid" src="{{  asset ('styleBeTheme/content/landing2/images/home_landing2_pic1.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section equal-height" id="how" style="padding-top:70px; padding-bottom:0px; background-image:url({{  asset ('styleBeTheme/content/landing2/images/home_landing2_sectionbg11.png')}}); background-repeat:no-repeat; background-position:center top">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one-fourth column_placeholder">
                                            <div class="placeholder">
                                                &nbsp;
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-second column_column">
                                            <div class="column_attr clearfix align_center">
                                                <h2>How it's working?</h2>
                                                <p style="color: #8f96a6;">
                                                    Duis dignissim mi ut laoreet mollis. Nunc id tellus finibus, eleifend mi vel, maximus justo. Maecenas mi tortor, pellentesque a aliquam ut, fringilla eleifend lectus.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column two-fifth column_column">
                                            <div class="column_attr clearfix align_right" style="padding:40px 10% 0 0">
                                                <h3>Choose your bank
                                                    <br> from our partners</h3>
                                                <p>
                                                    Mauris rhoncus orci in imperdiet placerat. Vestibulum euismod nisl suscipit ligula volutpat, a feugiat urna maximus.
                                                </p>
                                                <p>
                                                    Cras massa nibh, tincidunt ut eros a, vulputate consequat odio. Vestibulum vehicula tempor nulla, sed hendrerit urna interdum in. Donec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis fringilla.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-fifth column_column">
                                            <div class="column_attr clearfix align_center" style="background-image:url({{  asset ('styleBeTheme/content/landing2/images/home_landing2_pic6.png') }}); background-repeat:no-repeat; background-position:center top;">
                                                <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                                    <div class="image_wrapper">
                                                        <img class="scale-with-grid" src="{{  asset ('styleBeTheme/content/landing2/images/home_landing2_pic3.png') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one valign-top move-up clearfix" style="margin-top:-55px" data-mobile="no-up">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column two-fifth column_placeholder">
                                            <div class="placeholder">
                                                &nbsp;
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-fifth column_column">
                                            <div class="column_attr clearfix align_center" style="background-image:url({{  asset ('styleBeTheme/content/landing2/images/home_landing2_pic6.png') }}); background-repeat:no-repeat; background-position:center top;">
                                                <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                                    <div class="image_wrapper">
                                                        <img class="scale-with-grid" src="{{  asset ('styleBeTheme/content/landing2/images/home_landing2_pic4.png') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column two-fifth column_column">
                                            <div class="column_attr clearfix" style="padding:40px 0 0 10%">
                                                <h3>Associate the selected
                                                    <br> cards and accounts</h3>
                                                <p>
                                                    Aliquam ac dui vel dui vulputate consectetur. Mauris accumsan, massa non consectetur condimentum, diam arcu tristique nibh, nec egestas diam elit at nulla.
                                                </p>
                                                <ul class="list_check">
                                                    <li>
                                                        Suspendisse a pellentesque dui, non felis.
                                                    </li>
                                                    <li>
                                                        Quisque lorem tortor fringilla sed.
                                                    </li>
                                                    <li>
                                                        Nulla ipsum dolor lacus, suscipit adipiscing.
                                                    </li>
                                                </ul>
                                                <p>
                                                    Suspendisse potenti. In non lacinia risus, ac tempor ipsum. Phasellus venenatis leo eu semper varius.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one valign-top move-up clearfix" style="margin-top:-55px" data-mobile="no-up">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column two-fifth column_column">
                                            <div class="column_attr clearfix align_right" style="padding:40px 10% 0 0;">
                                                <h3>Use BeLanding for all
                                                    <br> your transactions</h3>
                                                <p>
                                                    Vivamus in diam turpis. In condimentum maximus tristique. Maecenas non laoreet odio. Fusce lobortis porttitor purus, vel vestibulum libero pharetra vel.
                                                </p>
                                                <p>
                                                    Pellentesque lorem augue, fermentum nec.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-fifth column_column">
                                            <div class="column_attr clearfix align_center">
                                                <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                                    <div class="image_wrapper">
                                                        <img class="scale-with-grid" src="{{  asset ('styleBeTheme/content/landing2/images/home_landing2_pic5.png') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section" style="padding-top:50px; padding-bottom:0px; background-image:url({{  asset ('styleBeTheme/content/landing2/images/home_landing2_sectionbg4.png')}}); background-repeat:no-repeat; background-position:center bottom">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                        



















































                                 





      <form id="form_ex_send" method="POST" action="{{ url('/user/exchange') }}" >
       @csrf

            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                       
                            <h4 class="card-title">Recent Tickets</h4>
            
                            <div style="float:left;">
                                <!-- image   -->
                                <div style="float:left;">
                                    <img src="{{  asset ('styleTestAdmin/assets/images/faces/face2.jpg') }}" class="mr-2" alt="image">
                                </div>
            
                                <!-- les inputs   -->
                                <div style="float:right;">
                                    <div>
                                        <select name="from" onchange="showSelect2(event)" id="selectNum1" class="form-control-lg form-control-sm ">
                                          @foreach ($comptes as $compte)
                                          <option   @if ($loop->first) selected @endif  value="{{$compte['name']}}">{{$compte['name']}}</option>
                                          @endforeach
                                     
                                        </select>
                                    </div>
            
                                    <div>
                                        <input type="number" name="fromValue"  id="Input1NoDisabled" class="form-control-lg form-control-sm "
                                        @error('fromValue') is-invalid @enderror" value="{{ old('fromValue') }}" >
                                        @error('fromValue')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
            
                            <div style="float:right;">
                                <!-- les inputs   -->
                                <div style="float:left;">
                                    <div>
                                        <select id="selectNum2" name="to"  onchange="changeHandler2()" class="form-control-lg form-control-sm ">
                                    
                                         
                                        </select>
            
                                    </div>
            
                                    <div>
                                        <input type="text" name="toValue" id="Input2Disabled"class="form-control-lg form-control-sm " readonly  >
                                 
                                    </div>
                                </div>
            
                                <!-- image   -->
                                <div style="float:right;">
                                    <img src="{{  asset ('styleTestAdmin/assets/images/faces/face2.jpg') }}" class="mr-2" alt="image">
                                </div>
                            </div>



                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" id="exampleModalLabel">New message</h4>
                                    </div>
                                    <div class="modal-body">
                                      <form>
                                        <div class="form-group">
                                          <label for="recipient-name" id="labelFrom"  class="control-label">:</label>
                                          <input type="text" name="fromAccount"  class="form-control" id="recipient-name"
                                          @error('fromAccount') is-invalid @enderror" value="{{ old('fromAccount') }}">
                                          @error('fromAccount')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                        </div>
                                        <div class="form-group">
                                          <label for="message-text" id="labelTo"  class="control-label">:</label>
                                          <input type="text" name="toAccount"  class="form-control" id="message-text"
                                          @error('toAccount') is-invalid @enderror" value="{{ old('toAccount') }}">
                                          @error('toAccount')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                       
                                        </div>
                                      </form>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              
                                      <button type="submit" class="btn btn-primary" onclick="event.preventDefault();
                                      document.getElementById('form_ex_send').submit();"  > exchange now</button>



<button type="submit" class="btn btn-primary" onclick="event.preventDefault(); console.log('jhgdjhjgkg') "  > khtek now</button>



                                   
                                    </div>
                                  </div>
                                </div>
                              </div>
  

                         





                        
                        </div>


                    

                      
                    </div>
                </div>
            </div>



            <div id="myDiv" >
                           

                @guest
  
                <button class="btn btn-gradient-danger btn-icon-text" type="submit" onclick="event.preventDefault();
                document.getElementById('form_ex_send').submit();"  > <i class="mdi mdi-upload btn-icon-prepend" ></i> exchange</button>


                     @else
                
                <button class="btn btn-gradient-danger btn-icon-text" onclick="changeTextOfLabelInCOnfermationAlert()" type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" > <i class="mdi mdi-upload btn-icon-prepend" ></i> exchange</button>
                @endguest


              </div>



            </form>





























            















































            <script type="text/javascript">


                function changeTextOfLabelInCOnfermationAlert(){
                                    var ex = document.getElementById("selectNum2");
                                    var elementSelectedIn2 = ex.options[ex.selectedIndex].value;
                                            
                                    var ex1 = document.getElementById("selectNum1");
                                    var elementSelectedIn1 = ex1.options[ex1.selectedIndex].value;
                
                                    document.getElementById('labelFrom').innerHTML = 'votre compte de '  + elementSelectedIn1 + ':';
                
                                    document.getElementById('labelTo').innerHTML = 'votre compte de '  + elementSelectedIn2 + ':';
                
                
                
                };
                
                
                                window.onload = function hasin() {
                
                                  showSelect2();
                               
                
                
                                       };
                
                                       function showSelect2(e){
                                    
                
                //Create array of options to be added
                var array = {!! json_encode($comptes ) !!};
                
                //select list
                var selectList = document.getElementById('selectNum2');
                
                
                //delet all option 
                while (selectList.firstChild) {
                    selectList.removeChild(selectList.firstChild);
                  }
                
                //elemnt celected n first list
                var ex12 = document.getElementById("selectNum1");
                var theElementSelectedIn1 = ex12.options[ex12.selectedIndex].value;
                
                //Create and append the options
                var first_iteration = true;
                array.forEach(myFunction);
                
                function myFunction(value) {
                  if (  value['name'] !== theElementSelectedIn1  ) {
                    if (first_iteration) {
                         
                          first_iteration = false;
                    
                  var option = document.createElement("option");
                    option.value = value['name'];
                    option.text = value['name'];
                    option.setAttribute('selected', 'selected');
                    selectList.appendChild(option);
                  }else{
                
                
                  var option = document.createElement("option");
                    option.value = value['name'];
                    option.text = value['name'];
                    selectList.appendChild(option);
                
                
                  }
                }
                
                }
                
                changeHandler(e);  
                
                                       };
                
                
                       function changeHandler2(e){ changeHandler(e);  };
                
                
                
                             
                                  function changeHandler(e){
                                    // list of bank
                                    var dt = {!! json_encode($comptes ) !!};
                                    
                                    var input2 = document.getElementById('Input2Disabled');
                                    var ex = document.getElementById("selectNum2");
                                    var elementSelectedIn2 = ex.options[ex.selectedIndex].value;
                                            
                                    var ex1 = document.getElementById("selectNum1");
                                    var elementSelectedIn1 = ex1.options[ex1.selectedIndex].value;
                                
                                    var vlv2 = [] ;
                                    var vlv1 = [] ;
                                   
                                     dt.forEach(myFunction);
                
                                           function myFunction(value) {
                
                                           
                                            if (  value['name'] === elementSelectedIn2  ) {
                
                                             vlv2 =value;
                
                                                      }
                                        
                                           
                                            if (  value['name'] === elementSelectedIn1  ) {
                
                                               vlv1 =value;
                
                                            }
                                             
                
                                               };
                                              
                                                    input2.value =  (vlv1['value'] / vlv2['value']).toFixed(2) ;
                                                    var input1 = document.getElementById('Input1NoDisabled');
                                                    input1.value = 1 ;
                                                    changeInputValue();
                                                    
                
                
                                 
                                    
                                  };
                
                
                                  
                    
                              </script>
                
                              <script type="text/javascript">
                              function changeInputValue () {
                
                
                
                
                
                                var input1 = document.getElementById('Input1NoDisabled');
                                var input2 = document.getElementById('Input2Disabled');
                              
                   
                                  var dt = {!! json_encode($comptes ) !!};
                                    var input2 = document.getElementById('Input2Disabled');
                                    var ex = document.getElementById("selectNum2");
                                    var elementSelectedIn2 = ex.options[ex.selectedIndex].value;
                                            
                                    var ex1 = document.getElementById("selectNum1");
                                    var elementSelectedIn1 = ex1.options[ex1.selectedIndex].value;
                                   
                                    var vlv2 = [] ;
                                    var vlv1 = [] ;
                                   
                                   
                                     dt.forEach(myFunction);
                
                                           function myFunction(value) {
                                             
                                           
                
                      
                    
                   
                    if (  value['name'] === elementSelectedIn2  ) {
                
                      vlv2 =value;
                
                              }
                
                   
                    if (  value['name'] === elementSelectedIn1  ) {
                
                  vlv1 =value;
                
                    }
                  };
                 
                  input2.value  = (( input1.value  * vlv1['value']) / vlv2['value']).toFixed(2) ;
                  
                               };
                
                
                                var input1 = document.getElementById('Input1NoDisabled');
                              
                              
                                input1.addEventListener('input', function() {
                
                
                
                                  changeInputValue ();
                
                                  
                                });
                              </script>
                
                
                
                
                
                
                
                
                
                
                
                
                


























































































            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section" id="rules" style="padding-top:70px; padding-bottom:20px; background-color:#f5f8ff; background-image:url({{  asset ('styleBeTheme/content/landing2/images/home_landing2_sectionbg8.png') }}); background-repeat:no-repeat; background-position:center top">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one-fourth column_placeholder">
                                            <div class="placeholder">
                                                &nbsp;
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-second column_column">
                                            <div class="column_attr clearfix align_center">
                                                <h2>Clear rules</h2>
                                                <p style="color: #8f96a6;">
                                                    Ut ultricies imperdiet sodales. Aliquam fringilla aliquam ex sit amet elementum. Proin bibendum sollicitudin feugiat.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider">
                                            <hr class="no_line" style="margin:0 auto 30px">
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-fourth valign-top clearfix" style="padding:60px 0 0">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix" style="background-image:url({{  asset ('styleBeTheme/content/landing2/images/home_landing2_pic13.png') }}); background-repeat:no-repeat; background-position:left top; padding:0 0 0 80px;">
                                                <h4>No fees for transactions made with the card</h4>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix" style="background-image:url({{  asset ('styleBeTheme/content/landing2/images/home_landing2_pic14.png') }}); background-repeat:no-repeat; background-position:left top; padding:0 0 0 80px;">
                                                <h4>The possibility of full personalization of the card</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-second valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                <div class="image_wrapper">
                                                    <img class="scale-with-grid" src="{{  asset ('styleBeTheme/content/landing2/images/home_landing2_pic1.png')}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-fourth valign-top clearfix" style="padding:60px 0 0">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix align_right" style="background-image:url({{  asset ('styleBeTheme/content/landing2/images/home_landing2_pic15.png') }}); background-repeat:no-repeat; background-position:right top; padding:0 80px 0 0;">
                                                <h4>Secure service of funds from several bank accounts</h4>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix align_right" style="background-image:url({{  asset ('styleBeTheme/content/landing2/images/home_landing2_pic16.png') }}); background-repeat:no-repeat; background-position:right top; padding:0 80px 0 0;">
                                                <h4>Support and service of over 20 cryptocurrencies</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_divider ">
                                            <hr class="no_line" style="margin:0 auto 30px">
                                        </div>
                                        <div class="column mcb-column one-second column_column">
                                            <div class="column_attr clearfix" style="padding:0 10% 0 0;">
                                                <p>
                                                    Curabitur sed iaculis dolor, non congue ligula. Maecenas imperdiet ante eget hendrerit posuere. Nunc urna libero, congue porta nibh a, semper feugiat sem. Sed auctor dui eleifend, scelerisque eros ut.
                                                </p>
                                                <p>
                                                    Donec sodales, neque vitae rutrum convallis, nulla tortor pharetra odio, in varius ante ante sed nisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-second column_column">
                                            <div class="column_attr clearfix" style="padding:0 10% 0 0;">
                                                <p>
                                                    Aliquam ac dui vel dui vulputate consectetur. Mauris accumsan, massa non consectetur condimentum, diam arcu tristique nibh.
                                                </p>
                                                <ul class="list_check">
                                                    <li>
                                                        Suspendisse a pellentesque dui, non felis.
                                                    </li>
                                                    <li>
                                                        Quisque lorem tortor fringilla sed.
                                                    </li>
                                                    <li>
                                                        Nulla ipsum dolor lacus, suscipit adipiscing.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section full-width  " style="padding-top:0px; padding-bottom:0px;">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                <div class="image_wrapper">
                                                    <img class="scale-with-grid" src="{{  asset ('styleBeTheme/content/landing2/images/home_landing2_pic19.png' ) }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section" id="pricing" style="padding-top:110px; padding-bottom:40px; background-image:url({{  asset ('styleBeTheme/content/landing2/images/home_landing2_sectionbg5.png')}}); background-repeat:no-repeat; background-position:center top">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one-fourth column_placeholder">
                                            <div class="placeholder">
                                                &nbsp;
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-second column_column">
                                            <div class="column_attr clearfix align_center">
                                                <h2>Pricing</h2>
                                                <p style="color: #8f96a6">
                                                    Vivamus in diam turpis. In condimentum maximus tristique. Maecenas non laoreet odio. Fusce lobortis porttitor purus, vel vestibulum.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider ">
                                            <hr class="no_line" style="margin:0 auto 30px">
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-third valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_divider ">
                                            <hr class="no_line" style="margin:0 auto 40px">
                                        </div>
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix align_center" style="padding:50px 50px 35px; border: 1px solid #e3ebff; margin: 0 5%; border-radius: 15px;">
                                                <span style="background: #ccdbff; color: #4260a8; padding: 15px 30px; font-size: 16px; display: inline-block; margin: 0 auto; border-radius: 25px;">Basic</span>
                                                <hr class="no_line" style="margin:0 auto 30px">
                                                <div class="google_font" style="font-family:'Tenor Sans';font-size:40px;line-height:40px;font-weight:400;color:#4260a8;">
                                                    $24.99
                                                </div>
                                                <p style="color: #8f96a6;">
                                                    per month
                                                </p>
                                                <hr class="no_line" style="margin:0 auto 15px">
                                                <div style="width: 100%; height: 1px; background: #e3ebff;"></div>
                                                <hr class="no_line" style="margin:0 auto 30px">
                                                <p>
                                                    Connection to 2 credit cards
                                                </p>
                                                <p>
                                                    50 transactions a month
                                                </p>
                                                <p>
                                                    Full personalization of the card
                                                </p>
                                                <p>
                                                    1 extract from the history of the month
                                                </p>
                                                <p>
                                                    Cryptocurrency service
                                                </p>
                                                <hr class="no_line" style="margin:0 auto 20px">
                                                <a class="button button_right button_size_2 button_js" href="#" style="background-color:#4260a8 !important; color:#fff;"><span class="button_icon"><i class="icon-right-open-mini" style="color:#fff !important;"></i></span><span class="button_label">Buy now</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-third valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix align_center" style="padding:50px 50px 35px; box-shadow: 0 0px 30px rgba(255,118,87,.14); margin: 0 5%; border-radius: 15px;">
                                                <span style="background: #ffdcd4; color: #ff7657; padding: 15px 30px; font-size: 16px; display: inline-block; margin: 0 auto; border-radius: 25px;">Standard</span>
                                                <hr class="no_line" style="margin:0 auto 30px">
                                                <p style="color: #9acc4b;">
                                                    Most popular
                                                </p>
                                                <div class="google_font" style="font-family:'Tenor Sans';font-size:40px;line-height:40px;font-weight:400;color:#ff7657;">
                                                    $29.99
                                                </div>
                                                <p style="color: #8f96a6;">
                                                    per month
                                                </p>
                                                <hr class="no_line" style="margin:0 auto 15px">
                                                <div style="width: 100%; height: 1px; background: #e3ebff;"></div>
                                                <hr class="no_line" style="margin:0 auto 30px">
                                                <p>
                                                    Connection to 4 credit cards
                                                </p>
                                                <p>
                                                    200 transactions a month
                                                </p>
                                                <p>
                                                    Full personalization of the card
                                                </p>
                                                <p>
                                                    3 extract from the history of the month
                                                </p>
                                                <p>
                                                    Cryptocurrency service
                                                </p>
                                                <hr class="no_line" style="margin:0 auto 20px">
                                                <a class="button button_right button_size_2 button_js" href="#" style="background-color:#ff7657 !important; color:#fff;"><span class="button_icon"><i class="icon-right-open-mini" style="color:#fff !important;"></i></span><span class="button_label">Buy now</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-third valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_divider ">
                                            <hr class="no_line" style="margin:0 auto 40px">
                                        </div>
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix align_center" style="padding:50px 50px 35px; border: 1px solid #e4f9ff; margin: 0 5%; border-radius: 15px;">
                                                <span style="background: #d8f6ff; color: #3cc5ed; padding: 15px 30px; font-size: 16px; display: inline-block; margin: 0 auto; border-radius: 25px;">Extended</span>
                                                <hr class="no_line" style="margin:0 auto 30px">
                                                <div class="google_font" style="font-family:'Tenor Sans';font-size:40px;line-height:40px;font-weight:400;color:#3cc5ed;">
                                                    $36.99
                                                </div>
                                                <p style="color: #8f96a6;">
                                                    per month
                                                </p>
                                                <hr class="no_line" style="margin:0 auto 15px">
                                                <div style="width: 100%; height: 1px; background: #e3ebff;"></div>
                                                <hr class="no_line" style="margin:0 auto 30px">
                                                <p>
                                                    Connection to 8 credit cards
                                                </p>
                                                <p>
                                                    400 transactions a month
                                                </p>
                                                <p>
                                                    Full personalization of the card
                                                </p>
                                                <p>
                                                    6 extract from the history of the month
                                                </p>
                                                <p>
                                                    Cryptocurrency service
                                                </p>
                                                <hr class="no_line" style="margin:0 auto 20px">
                                                <a class="button button_right button_size_2 button_js" href="#" style="background-color:#3cc5ed !important; color:#fff;"><span class="button_icon"><i class="icon-right-open-mini" style="color:#fff !important;"></i></span><span class="button_label">Buy now</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_divider ">
                                            <hr class="no_line" style="margin:0 auto 40px">
                                        </div>
                                        <div class="column mcb-column one-fourth column_placeholder">
                                            <div class="placeholder">
                                                &nbsp;
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-second column_column">
                                            <div class="column_attr clearfix align_center">
                                                <p>
                                                    Curabitur sed iaculis dolor, non congue ligula. Maecenas imperdiet ante eget hendrerit posuere. Nunc urna libero, congue porta nibh a, semper feugiat sem.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section full-width" style="padding-top:0px; padding-bottom:0px">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                <div class="image_wrapper">
                                                    <img class="scale-with-grid" src="{{  asset ('styleBeTheme/content/landing2/images/home_landing2_pic20.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section" id="clients" style="padding-top:110px; padding-bottom:40px; background-color:#f5f8ff; background-image:url({{  asset ('styleBeTheme/content/landing2/images/home_landing2_sectionbg6.png') }}); background-repeat:no-repeat; background-position:center top">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one-fourth column_placeholder">
                                            <div class="placeholder">
                                                &nbsp;
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-second column_column">
                                            <div class="column_attr clearfix align_center">
                                                <h2>Our clients</h2>
                                                <p style="color: #8f96a6;">
                                                    Duis dignissim mi ut laoreet mollis. Nunc id tellus finibus, eleifend mi vel, maximus justo. Maecenas mi tortor, pellentesque.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider ">
                                            <hr class="no_line" style="margin:0 auto 30px">
                                        </div>
                                        <div class="column mcb-column one column_testimonials ">
                                            <div class="testimonials_slider single-photo">
                                                <ul class="testimonials_slider_ul">


                                                    @foreach ($comments as $comment)

                                                    <li>
                                                        <div class="single-photo-img">
                                                            <img src="/storage/{{$comment->user->image}}"  class="scale-with-grid wp-post-image">
                                                        </div>
                                                        <div class="bq_wrapper">
                                                            <blockquote>
                                                                {{ $comment->text }}
                                                           </blockquote>
                                                        </div>
                                                        <div class="hr_dots">
                                                            <span></span><span></span><span></span>
                                                        </div>
                                                        <div class="author">
                                                            <h5>{{ $comment->user->firstName }} {{ $comment->user->lastName }}</h5><span class="company"></span>
                                                        </div>
                                                    </li>

                                                    @endforeach




                                                    <li>
                                                        <div class="single-photo-img">
                                                            <img src="{{  asset ('styleBeTheme/content/landing2/images/home_landing2_pic10-85x85.png') }}" class="scale-with-grid wp-post-image">
                                                        </div>
                                                        <div class="bq_wrapper">
                                                            <blockquote>
                                                                Quisque lorem tortor fringilla sed, vestibulum id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non, consectetuer lobortis quis, varius in, purus.
                                                            </blockquote>
                                                        </div>
                                                        <div class="hr_dots">
                                                            <span></span><span></span><span></span>
                                                        </div>
                                                        <div class="author">
                                                            <h5>Kevin Perry</h5><span class="company"></span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="single-photo-img">
                                                            <img src="{{  asset ('styleBeTheme/content/landing2/images/home_landing2_pic11-85x85.png') }}" class="scale-with-grid wp-post-image">
                                                        </div>
                                                        <div class="bq_wrapper">
                                                            <blockquote>
                                                                Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit, rhoncus eu, luctus et interdum adipiscing wisi. Aliquam erat ac ipsum. Integer aliquam purus.
                                                            </blockquote>
                                                        </div>
                                                        <div class="hr_dots">
                                                            <span></span><span></span><span></span>
                                                        </div>
                                                        <div class="author">
                                                            <h5>Tony Johnson</h5><span class="company"></span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="single-photo-img">
                                                            <img src="{{  asset ('styleBeTheme/content/landing2/images/home_landing2_pic12-85x85.png') }}" class="scale-with-grid wp-post-image">
                                                        </div>
                                                        <div class="bq_wrapper">
                                                            <blockquote>
                                                                Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna.
                                                            </blockquote>
                                                        </div>
                                                        <div class="hr_dots">
                                                            <span></span><span></span><span></span>
                                                        </div>
                                                        <div class="author">
                                                            <h5>Brandon Ross</h5><span class="company"></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="slider_pager slider_pagination"></div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider ">
                                            <hr class="no_line" style="margin:0 auto 50px">
                                        </div>
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix align_center">
                                                <h3>Partners</h3>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-fifth column_image">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                <div class="image_wrapper">
                                                    <img class="scale-with-grid" src="{{  asset ('styleBeTheme/content/landing2/images/home_landing2_client_2.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-fifth column_image">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                <div class="image_wrapper">
                                                    <img class="scale-with-grid" src="{{  asset ('styleBeTheme/content/landing2/images/home_landing2_client_1.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-fifth column_image">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                <div class="image_wrapper">
                                                    <img class="scale-with-grid" src="{{  asset ('styleBeTheme/content/landing2/images/home_landing2_client_4.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-fifth column_image">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                <div class="image_wrapper">
                                                    <img class="scale-with-grid" src="{{  asset ('styleBeTheme/content/landing2/images/home_landing2_client_5.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-fifth column_image">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                <div class="image_wrapper">
                                                    <img class="scale-with-grid" src="{{  asset ('styleBeTheme/content/landing2/images/home_landing2_client_3.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section full-width" style="padding-top:0px; padding-bottom:0px;">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                <div class="image_wrapper">
                                                    <img class="scale-with-grid" src="{{  asset ('styleBeTheme/content/landing2/images/home_landing2_pic19.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section" id="contact" style="padding-top:110px; padding-bottom:70px; background-image:url({{  asset ('styleBeTheme/content/landing2/images/home_landing2_sectionbg9.png') }}); background-repeat:no-repeat; background-position:center top">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one-fourth column_placeholder">
                                            <div class="placeholder">
                                                &nbsp;
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-second column_column">
                                            <div class="column_attr clearfix align_center">
                                                <h2>Contact us</h2>
                                                <p style="color: #8f96a6;">
                                                    Mauris rhoncus orci in imperdiet placerat. Vestibulum euismod nisl suscipit ligula volutpat, a feugiat urna maximus pellentesque a aliquam.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider ">
                                            <hr class="no_line" style="margin:0 auto 30px">
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-second valign-top clearfix" style="padding:0 5% 0 0">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix">
                                                <h3>Contact with our support</h3>
                                                <p style="color: #8f96a6;">
                                                    Duis dignissim mi ut laoreet mollis. Nunc id tellus finibus, eleifend mi vel, maximus justo. Maecenas mi tortor, pellentesque a aliquam ut.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-second column_column">
                                            <div class="column_attr clearfix">
                                                <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                                    <div class="image_wrapper">
                                                        <img class="scale-with-grid" src="{{  asset ('styleBeTheme/content/landing2/images/home_landing2_pic17.png') }}">
                                                    </div>
                                                </div>
                                                <hr class="no_line" style="margin:0 auto 30px">
                                                <h4 style="margin-bottom: 5px;">Marshal Marvyn</h4>
                                                <p style="color: #8f96a6;">
                                                    CEO & Owner
                                                </p>
                                                <hr class="no_line" style="margin:0 auto 10px">
                                                <div style="width: 50px; height: 2px; background: #3cc5ed;"></div>
                                                <hr class="no_line" style="margin:0 auto 30px">
                                                <p>
                                                    +61 (0) 3 8376 6284
                                                    <br>
                                                    <a href="#">noreply@envato.com</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-second column_column">
                                            <div class="column_attr clearfix">
                                                <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                                    <div class="image_wrapper">
                                                        <img class="scale-with-grid" src="{{  asset ('styleBeTheme/content/landing2/images/home_landing2_pic18.png') }}">
                                                    </div>
                                                </div>
                                                <hr class="no_line" style="margin:0 auto 30px">
                                                <h4 style="margin-bottom: 5px;">Montana Hilary</h4>
                                                <p style="color: #8f96a6;">
                                                    Support
                                                </p>
                                                <hr class="no_line" style="margin:0 auto 10px">
                                                <div style="width: 50px; height: 2px; background: #3cc5ed;"></div>
                                                <hr class="no_line" style="margin:0 auto 30px">
                                                <p>
                                                    +61 (0) 3 8376 6284
                                                    <br>
                                                    <a href="#">noreply@envato.com</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-second valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix">
                                                <h3>Send message to us</h3>
                                                <p style="color: #8f96a6;">
                                                    Mauris rhoncus orci in imperdiet placerat. Vestibulum euismod nisl suscipit ligula volutpat, a feugiat urna maximus. Cras massa nibh, tincidunt ut eros.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix" style="background-color:#f5f8ff; padding:50px 50px 15px; border-radius: 15px;">
                                                <div id="contactWrapper">
                                                    <form id="contactform" method="POST" action="/send_mail" >
                                                        @csrf
                                                        <!-- One Second (1/2) Column -->
                                                        <div class="column one-second">
                                                            <input placeholder="Your name" type="text" name="full_name" id="name" size="40" aria-required="true" aria-invalid="false" />
                                                        </div>
                                                        <!-- One Second (1/2) Column -->
                                                        <div class="column one-second">
                                                            <input placeholder="Your e-mail" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                                        </div>
                                                        <div class="column one">
                                                            <input placeholder="Subject" type="text" name="subject" id="subject" size="40" aria-invalid="false" />
                                                        </div>
                                                        <div class="column one">
                                                            <textarea placeholder="Message" name="message" id="body" style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                                        </div>
                                                        <div class="column one">
                                                      <!--      <input type="button" value="Send A Message" id="submit" onClick="return check_values();"> -->
                                                            <input type="submit" value="Send A Message" id="submit" >
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="section mcb-section full-width" style="padding-top:0px; padding-bottom:0px;">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                <div class="image_wrapper">
                                                    <img class="scale-with-grid" src="{{  asset ('styleBeTheme/content/landing2/images/home_landing2_pic21.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <footer id="Footer" class="clearfix">
            <div class="footer_copy">
                <div class="container">
                    <div class="column one">
                        <div class="copyright">
                            &copy; 2018 BeLanding 2 - BeTheme. Muffin group - HTML by <a target="_blank" rel="nofollow" href="http://bit.ly/1M6lijQ">BeantownThemes</a>
                        </div>
                        <ul class="social"></ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- side menu -->
    <div id="Side_slide" class="right dark" data-width="250">
        <div class="close-wrapper">
            <a href="#" class="close"><i class="icon-cancel-fine"></i></a>
        </div>
        <div class="extras">
            <a href="http://bit.ly/1M6lijQ" class="action_button" target="_blank">Buy now</a>
        </div>
        <div class="menu_wrapper"></div>
    </div>
    <div id="body_overlay"></div>
    <a id="back_to_top" class="button button_js sticky scroll" href="#"><i class="icon-up-open-big"></i></a>

    <!-- JS -->
    <script src="{{  asset ('styleBeTheme/js/jquery-2.1.4.min.js') }}"></script>

    <script src="{{  asset ('styleBeTheme/js/mfn.menu.js') }}"></script>
    <script src="{{  asset ('styleBeTheme/js/jquery.plugins.js') }}"></script>
    <script src="{{  asset ('styleBeTheme/js/jquery.jplayer.min.js') }}"></script>
    <script src="{{  asset ('styleBeTheme/js/animations/animations.js') }}"></script>
    <script src="{{  asset ('styleBeTheme/js/translate3d.js') }}"></script>
    <script src="{{  asset ('styleBeTheme/js/scripts.js') }}"></script>
    <script src="{{  asset ('styleBeTheme/js/email.js') }}"></script>




    <!-- for form alert -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <!-- fin form alert -->





</body>

</html>