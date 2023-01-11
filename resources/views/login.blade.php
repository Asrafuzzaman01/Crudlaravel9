<!Doctype html>
<html lang="en">
  <head>
  	<title>Login page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href=" {{asset('loginassets')}}/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url({{asset('loginassets')}}/images/bg.jpg);">

        <nav class="navbar navbar-expand-sm bg-info ">
            <!-- Brand -->
            <a class="navbar-brand" href="#">
                <h1 class="display-4 text-center text-info">
                <i class="fas fa-book-open text-warning"></i></h1>
            </a>
    
            <h2 class=""> <span class="text-danger"><b>Laravel</b> </span>  <span class="text-warning"> || </span> Students Information</h2>
          
            <!-- Links -->
            <ul class="navbar-nav ml-auto text-dengar">
              
              
				<li class="nav-item">
					<a class="nav-link text-warning" href="{{url('/registration')}}">Registration</a>
				  </li>
          
              <!-- Dropdown -->
              
            </ul>
          </nav>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>



		      	<form action="{{route('loginuser')}}"   method="POST" class="signin-form">

					@if (Session::has('success'))
					<div class="alert alert-success">{{Session:: get('success')}}</div>

				@endif

				@if (Session::has('fail'))
					<div class="alert alert-danger">{{Session:: get('fail')}}</div>

				@endif



					@csrf

		      		<div class="form-group">
		      			<input type="text" class="form-control" name="email" placeholder="Email@" value="{{old('email')}}">
						  <span class="text-danger">@error('email'){{$message}} @enderror</span>
		      		</div>

	            <div class="form-group">
	              <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" >
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
				  <span class="text-danger">@error('password'){{$message}} @enderror</span>
	            </div>


	            <div class="form-group">
	            	
					<input type="submit" value="Login" class="form-control btn btn-primary submit px-3"">
	            </div>

	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
	          
	          
			  <p class="text-warning">New User !! <a href="{{url('/')}}">Register Here</a> </p>
		      </div>
				</div>
			</div>
		
		</div>
	</section>

	<script src=" {{asset('loginassets')}}/js/jquery.min.js"></script>
  <script src="{{asset('loginassets')}}/js/popper.js"></script>
  <script src="{{asset('loginassets')}}/js/bootstrap.min.js"></script>
  <script src="{{asset('loginassets')}}/js/main.js"></script>

	</body>
</html>

