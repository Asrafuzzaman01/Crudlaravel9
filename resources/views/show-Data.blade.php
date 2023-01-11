<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>All Student Info... </title>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="resources/css/app.css">


<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>

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
            <a class="nav-link text-warninig" href="{{url('/show-data')}}">All User </a>
          </li>

          
          <li class="nav-item">
            <a class="nav-link text-warning" href="{{url('/logout')}}">Logout</a>
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
      


<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    
            
                    <div class="col-sm-6"><h3 class="text-warning">Students  Details</h3>
                    
                        
                        <a href="{{url('/add-data')}}" class="btn btn-info add-new"> <i class="fa fa-plus"></i> Add New</a>
                        @if (Session::has('msg'))
                    <p class="alert alert-success">{{Session::get('msg')}}</p> 
               @endif
                    </div>
                    
                  
                    <div class="col-sm-6">
                        <div class="search-box">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name <i class="fa fa-sort"></i></th>
                        <th>Email <i class="fa fa-sort"></i></th>
                        <th>Phone <i class="fa fa-sort"></i></th>
                         
                       <th>Address<i class="fa fa-sort"></i></th>
                       
                        
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($showData as $key=>$data)
                        
                  
                    <tr>
                        <td>{{$key+ 1}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phone}}</td>
                        
                        <td>{{$data->address}}</td>
                       
                        <td>
                            <a href="#" class="view" title="View" data-toggle="tooltip" style="color: yellow"><i class="material-icons">&#xE417;</i></a>
                            <a href="{{url('/edite-data/'.$data->id)}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="{{url('/delete-data/'.$data->id)}}" class="Delete" title="Delete" data-toggle="tooltip" style="color: red"  onclick="return confirm(' Are You Sure to Delete')"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    @endforeach
                   
                   
                  
                   
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>  
</div>   
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>