<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styleku.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="shortcut icon" href="{{ asset('image/betterme.png')}}">

    <title>BetterMe</title>
  </head>
<body>
	<nav class = "navbar navbar-default">
		<div class = "container-fluid">
        <div class = "col-md-3">
               <p class="text-dark"><?php echo "Welcome, ".$user->nama ?></p>
               
                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                        </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">  
                   @csrf
                 </form>
          </div>
		</div>
    </nav>


    <div class="wrapper">	   
       <nav id="sidebar">
              <div class="sidebar-header">
                  <h3>Better Me</h3>
              </div>
              
              
              <ul class="list-unstyled components">
                  
                  <li class="active">
                      <a href="{{ url('/home2')}}" data-toggle="collapse" aria-expanded="false">Home</a>
                  </li>
                  <li>
                      <a href="{{ url('/exercise2')}}">Latihan Management</a>
                  </li>		
          </nav>
          
          
       <div class="content col-md-12">
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
               
               <button type="button" id="sidebarCollapse" class="btn btn-info">
                   <i class="fa fa-align-justify"></i> <span>toggle sidebar</span>
               </button>
              
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
           </nav> 
           @yield('content')
    </div>
    
    

    <footer class="col-md-12 text-center bg-info fixed-bottom">
            <h3>Copyright @BetterMe-2020</h3>
        </footer>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
	    $(document).ready(function(){
			$('#sidebarCollapse').on('click',function(){
				$('#sidebar').toggleClass('active');
			});
        });  
        
        
    </script>
    
    

</body>
</html>
	