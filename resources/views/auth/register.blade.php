<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V5</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{  asset ('styleLogin/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{  asset ('styleLogin/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{  asset ('styleLogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{  asset ('styleLogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{  asset ('styleLogin/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{  asset ('styleLogin/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{  asset ('styleLogin/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{  asset ('styleLogin/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{  asset ('styleLogin/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{  asset ('styleLogin/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{  asset ('styleLogin/css/main.css') }}">
<!--===============================================================================================-->
   
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('{{  asset ('styleLogin/images/bg-01.jpg') }}');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('register') }}">
                
                        @csrf
					<span class="login100-form-title p-b-53">
						Sign In With
					</span>

					<a href="{{ url('/auth/redirect/facebook') }}"class="btn-face m-b-20">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>

					<a href="#" class="btn-google m-b-20">
						<img src="{{  asset ('styleLogin/images/icons/icon-google.png') }}" alt="GOOGLE">
						Google
                    </a>
                    




 

					<div class="p-t-31 p-b-9">
						<span class="txt1">
							firstName
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "firstName is required">
               
						<input id="firstName" class="input100 form-control @error('firstName') is-invalid @enderror" type="text"  name="firstName" value="{{ old('firstName') }}" >
                        <span class="focus-input100"></span>
                        @error('firstName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>


			







					<div class="p-t-31 p-b-9">
						<span class="txt1">
							lastName
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "lastName is required">
               
						<input id="lastName" class="input100 form-control @error('lastName') is-invalid @enderror" type="text"  name="lastName" value="{{ old('lastName') }}" >
                        <span class="focus-input100"></span>
                        @error('lastName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>
					



                    
                    


					<div class="p-t-31 p-b-9">
						<span class="txt1">
							tel
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "tel is required">
               
						<input id="tel" class="input100 form-control @error('tel') is-invalid @enderror" type="number"  name="tel" value="{{ old('tel') }}" >
                        <span class="focus-input100"></span>
                        @error('tel')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>
					

                    
                    



                    
                    
		
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							email
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "email is required">
               
						<input id="email" class="input100 form-control @error('email') is-invalid @enderror" type="email"  name="email" value="{{ old('email') }}" >
                        <span class="focus-input100"></span>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>





				












					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>
				
					
					</div>




					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input id="password" class="input100 form-control @error('password') is-invalid @enderror" type="password"  name="password" >
                        <span class="focus-input100"></span>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
    
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							confirm Password
						</span>
				
					
					</div>

					
					<div  class="wrap-input100 validate-input" data-validate = "Password is required">

							<input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password">
							<span class="focus-input100"></span>
					</div>


















     
 









					<div class="container-login100-form-btn m-t-17">
						<button type="submit" class="login100-form-btn">
							Sign In
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							membre déjà?
						</span>

					<a href="{{ url('login/') }}" class="txt2 bo1">
							Connectez-vous maintenant
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{  asset ('styleLogin/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{  asset ('styleLogin/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{  asset ('styleLogin/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{  asset ('styleLogin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{  asset ('styleLogin/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{  asset ('styleLogin/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{  asset ('styleLogin/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{  asset ('styleLogin/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{  asset ('styleLogin/js/main.js') }}"></script>











	<script>
		window.fbAsyncInit = function() {
		  FB.init({
			appId      : '208031830341107',
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













</body>
</html>