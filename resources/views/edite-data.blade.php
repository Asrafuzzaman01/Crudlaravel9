<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>laravel User add </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous" />

<style>
body {
	color: #fff;
	background: #63738a;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  
</style>
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-info navbar-warning">
        <!-- Brand -->
        <a class="navbar-brand" href="#">
            <h1 class="display-4 text-center text-info">
            <i class="fas fa-book-open text-warning"></i></h1>
        </a>

        <h2 class=""> <span class="text-danger">Laravel </span>  <span class="text-warning">|| </span> Students Information</h2>
      
        <!-- Links -->
        <ul class="navbar-nav ml-auto text-dengar">
          <li class="nav-item">
            <a class="nav-link text-warning" href="{{url('/show-data')}}">All User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning" href="{{url('/add-data')}}">Registration</a>
          </li>
      
          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Dropdown link
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Link 1</a>
              <a class="dropdown-item" href="#">Link 2</a>
              <a class="dropdown-item" href="#">Link 3</a>
            </div>
          </li>
        </ul>
      </nav>
<div class="signup-form">
    <form action="{{url('/update-data/'.$editedata->id)}}" method="post">
        @csrf

		<h2 class="text-info">Edite  Student</h2>

       
       
		
        
			<div class="form-group">
				<input type="text" class="form-control" name="name" value="{{$editedata->name}}" placeholder="Name" >
                @error ('name')    
            
                <span class="text-info">{{$message}}</span>
                @enderror
			</div>  
         
      
        <div class="form-group">
        	<input type="email" class="form-control" name="email"  value="{{$editedata->email}}"placeholder="Email" >

            @error ('email')    
            
            <span class="text-info">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
        	<input type="phone" class="form-control" name="phone" value="{{$editedata->phone}}" placeholder="Phone" >
            @error ('phone')    
            
            <span class="text-info">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="address" value="{{$editedata->address}}" placeholder="Address" >
            @error ('address')    
            
            <span class="text-info">{{$message}}</span>
            @enderror
        </div>
        
      
       
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Update</button>
        </div>
    </form>
	
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>