<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Inter%3A700')}}"/>
    <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C700')}}"/>
    <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css?family=Poppins%3A400%2C500')}}"/>
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css')}}">
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('style.css')}}"/>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>navbar</title>
</head>
<body>
    <style>
        /* startttt detailscart */
  .entete{
    position: relative;
    height: 48px;
    background-color: black;
    color: aliceblue;
    display: flex;
    justify-content: center;
  }
  .langue{
   position: relative;
   left: 300px;
  }
  .show {
    position: relative;
    left: 5px;
   color: aliceblue;
  }
  header{
    display: flex;
    width: 100%;
    align-items: center;
    justify-content: space-evenly;
    padding: 20px 10%;
}
.logo{
    position: relative;
    font-family: fantasy;
    color: black;
    text-decoration: none;
    right: 150px;
}

.nav-icon{
    position: relative;
    right: 200px;
    display: flex;
    align-items: center;
    gap:10px;
    color: black;
    font-size: 30px;

}

.nav-icon a{
   position: relative;
   left: 100px;
   color: gray;
   text-decoration: none;
   transition: all .42s ease;
}

.nav-icon a:hover{
  transform: scale(1.1);
  color: rosybrown;
}
.btn1{
    width: 200px;
    height: 38px;
    border: gainsboro;
    background-color: gainsboro;
    padding-right: 50px;
}

#menu-icon{
font-size: 35px;
z-index: 10001 ;
cursor: pointer;
left: 60px;
visibility: hidden;

}


.navbar{
    position: relative;
    right: 150px;
    display: flex;
    justify-content: center;
     align-items: center;
     list-style: none;

}

.navbar a{
   color: black;
   font-size: 1;
   font-weight: 400;
   padding: 10px 20px;
   margin: 0px 30;
   transition: all .5s ease ;
   text-decoration: none;

}

.navbar a li{

   text-decoration: none;

}

.navbar a:hover{
   color: rosybrown;
}

.navbar a:active{
   color: green;
}
.ligne{
    position: relative;
    top: 80px;
    color: blueviolet;
}
.section-1{
    position: relative;
    top :150px;
    left: 90px;
    color: gainsboro;
}
.section-1:hover{
    color: black;
}
 #navbarNav{
    margin-left: 25vh;
}

.navbar-brand{
    margin-left:25vh;
}
.carousel-item img{
    width:150vh;
    height: 400px;
}
.form-control{
    margin-bottom: 2vh;
}
input{
    width: 200vh;
    background-color: #f2f2f2;
}
.bi-search{
  position: relative;
  right: 3vh;
  top: 2vh;
}
  </style>

    <div class="entete ">
        <div class="summer" >
           <p>Summer sale For All Swims and free express Delivery-off 50% <a href="" class="show">Show now</a></p>
        </div>
        <div class="langue">
            <p>English <span><ion-icon class="" name="chevron-down-outline"></ion-icon></span></p>
        </div>
    </div>
    <!-- headersss -->

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand text-black fw-bold fs-3" href="#">Exclusive</a>
            <!-- Bouton de basculement pour les petits écrans -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Contenu de la barre de navigation -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link text-black" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="{{route('contact')}}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="{{route('register')}}">Sign Up</a>
                    </li>
                </ul>
                    <form class="d-flex">
                        <input class="form-control border-0" type="search" placeholder="what are you looking for?" aria-label="Search" style="  background-color: #f2f2f2;">
                        <i class="bi bi-search"></i>
                    </form>
                    <ul class="navbar-nav mx-5">
                        <li class="nav-item">
                        <a class="nav-link fs-5" href="#"><i class="bi bi-suit-heart text-black"></i></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link fs-5" href="#"><i class="bi bi-person text-black"></i></a>
                        </li>
                        <li class="nav-item ">
                        <!-- <a class="nav-link fs-5" href="#"><i class="bi bi-cart3 text-black"></i></a> -->

                          </li>

                    </ul>
 <div class="container me-5">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12">
            <div class="dropdown">

                <button id="dLabel" type="button" class="btn btn-primary me-0" data-bs-toggle="dropdown">
                <span class="badge bg-danger">{{ count((array) session('cart')) }}</span> <i class="bi bi-cart3" aria-hidden="true"></i>
                </button>

                <div class="dropdown-menu" aria-labelledby="dLabel">
                    <div class="row total-header-section">
                        @php $total = 0 @endphp
                        @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach
                        <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                            <p>Total: <span class="text-success">$ {{ $total }}</span></p>
                        </div>
                    </div>
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail ">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="{{ asset('img') }}/{{ $details['photo'] }}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['product_name'] }}</p>
                                    <span class="price text-success"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<br/>
<div class="container">

    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
    @endif

    @yield('content')
</div>


            </div>
        </div>
</nav>
@yield('scripts')

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>

</body>
</html>
