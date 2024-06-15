
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="{{url('/')}}" class="navbar-brand p-0">
                <h1 class="text-primary m-0" >
                <img src="img/logo.png" alt="Logo">
             RestoPh
                    
</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                        <a href="{{url('aboutus')}}" class="nav-item nav-link">About</a>
                        <a href="{{url('store')}}" class="nav-item nav-link">Menu</a>
                     
                        
                <a href="{{url('contactus')}}" class="nav-item nav-link">Contact</a>
                @if (Route::has('login'))

@auth

<a href="{{url('myorders')}}" class="nav-item nav-link">
 My Order
  </a>
<br></br>
<a href="{{url('mycart')}}" class="nav-item nav-link">
    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
    [{{$count}}]
  </a>

<form style="padding:15px;"method="POST" action="{{ route('logout') }}">
                  @csrf
                  <input class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft"type="submit" value="logout">
              </form>

              @else

  <a href="{{url('/login')}}">
    <i class="fa fa-user" aria-hidden="true"></i>
    <span>
      Login
    </span>
  </a>

  <a href="{{url('/register')}}">
    <i class="fa fa-vcard" aria-hidden="true"></i>
    <span>
      Register
    </span>
  </a>

  @endauth
  @endif

                    </div>
                 
  
</div>
 
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Enjoy RestoPh<br>Delicious Meal</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">"Savor the Taste of Excellence: A Culinary Experience Like No Other Awaits You at Our Restaurant!"</p>

                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

