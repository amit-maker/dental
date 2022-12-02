<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    

  </head>
  <body class="antialiased">

    <div class="container-scroller">
    	<nav class="navbar navbar-expand-lg navbar-light bg-light">

    		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    			<ul class="navbar-nav mr-auto">
    				<li class="nav-item active">
    					<a class="nav-link" href="{{ url('/home') }}" style="padding-left: 40px; font-size: 20px;">Home <span class="sr-only">(current)</span></a>
    				</li>
   
    			</ul>
    			<form action="{{ url('/home') }}" class="form-inline my-2 my-lg-0" style="padding-right: 40px;">
    				<input class="form-control mr-sm-2" type="search" name="search"  placeholder="Search by name..." aria-label="Search" style="font-size: 20px;">
    				<button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="font-size: 20px;">Search</button>
    			</form>

          <nav  class="link-btn">
                            @guest
                                    @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @endif

                                    @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                    @endif
                                    @else
                                    <li class="dropdown">
                                        <a  class="" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-content" >
                                            <a class="" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                        </div>
                                    </li>
                            @endguest
                    </nav>

    		</div>
    	</nav>
    	<div>
    		
    		<div class="container" align="center" style="padding-top: 100px;">
              <div class="container" align="center" style="padding-top:30px;">

                  <div class="main-panel">
                    <div class="row ">
                        <div class="col-12 grid-margin">
                          <div class="card">
                            <div class="card-body">

                              <div class="table-responsive">
                                <div class="container mt-3">
                                  <h2 style="padding-bottom: 50px; font-size: 30px;">Appointments Table</h2>
                                          <table class="table  table table-hover">
                                            <thead>
                                                <tr style="font-size: 20px;">
                                                    
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Number</th>
                                                    <th scope="col">Addresh</th>
                                                    <th scope="col">Date/Time</th>
                                                    <th scope="col">Action</th>
                                                    

                                                </tr>
                                            </thead>

                                            @foreach($appointment as $appointments)
                                            <tbody>
                                              <tr style="font-size: 15px;">
                                                
                                                <td>{{ $appointments->id }}</td>
                                                <td>{{ $appointments->name }}</td>
                                                <td>{{ $appointments->email }}</td>
                                                <td>{{ $appointments->number }}</td>
                                                <td>{{ $appointments->addresh }}</td>
                                                <td>{{ $appointments->date }}</td>
                                        
                                                <td>
                                                    <a href="/delete/{{ $appointments->id }}"><button class="btn btn-danger" style="font-size: 20px;">Delete</button></a>
                                                </td>
                                                  
                                                  
                                              </tr>
                                          </tbody>
                                          @endforeach
                                      </table>
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

      
     
  </body>
</html>