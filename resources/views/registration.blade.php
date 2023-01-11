<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href=" {{asset('regAssets')}}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{asset('regAssets')}}/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('regAssets')}}/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('regAssets')}}/css/style.css">

    <title> Rgistration</title>
  </head>
  <body>
  

  <div class="half">
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
                <a class="nav-link text-warning" href="{{url('/login')}}">Login</a>
              </li>
      
          <!-- Dropdown -->
          
        </ul>
      </nav>
    <div class="bg order-1 order-md-2" style="background-image: url('{{asset('regAssets')}}/images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

        

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
              <h3><strong>Registration</strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>

              <form action="{{route('registeruser')}}" method="post">
                        @if (Session::has('success'))
                            <div class="alert alert-success">{{Session:: get('success')}}</div>

                        @endif

                        @if (Session::has('fail'))
                            <div class="alert alert-danger">{{Session:: get('fail')}}</div>

                        @endif

                @csrf
                <div class="form-group first">

                  <label for="name">Name</label>
                  <input type="text" class="form-control" placeholder="your Name" name="name"  value="{{old('name')}}">
                  <span class="text-danger">@error('name'){{$message}} @enderror</span>
                      
                 

                </div>

                <div class="form-group ">
                    <label for="email">Email</label>

                <input type="text" class="form-control" placeholder="your-email@gmail.com" name="email" value="{{old('email')}}">
                <span class="text-danger">@error('email'){{$message}} @enderror</span>


                </div>
                <div class="form-group ">
                    <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Your Password" name="password"  value="{{old('password')}}">
                <span class="text-danger">@error('password'){{$message}} @enderror</span>
                
                   

                </div>
 
                

                

                
              </div>
                
                
                

                <input type="submit" value="Registration" class="btn btn-block btn-primary">
                <br>
                <div class="">
                    <h4 class=""> Already Registered !! <a href="{{url('login')}}"> <span class="text-info"><b>Login Here</b></span></a></h4>

                    
                    </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="{{asset('regAssets')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('regAssets')}}/js/popper.min.js"></script>
    <script src="{{asset('regAssets')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('regAssets')}}/js/main.js"></script>
  </body>
</html>