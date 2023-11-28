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
    <title>checkout</title>

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
.span{
    background-color: #db4444;
    border-radius: 50%;
    padding: 4px;
    font-size: 10px;
    position: relative;
    bottom: 8vh;
    left: 3.5vh;
}
 h4{
    margin-top: 15vh;
    margin-left: 13vh;
    font-size: 16px;
}
 .form-check label{
    font-size: 10px;
 }
 #exampleCheckbox{
    background-color: #db4444;
 }
 .cash-checkout{
    margin-left: 80vh;
    /* margin-top: 100vh; */

 }
 .cash-checkout label{
    font-size: 16px;
 }
 .paiement{
    padding-left: 50px;
    margin-left: 70px;
 }
  </style>
</head>
<body>
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
                        <a class="nav-link text-black" href="{{ route('sign')}}">Sign Up</a>
                    </li>
                </ul>
                    <form class="d-flex">
                        <input class="form-control border-0" type="search" placeholder="what are you looking for?" aria-label="Search" style="  background-color: #f2f2f2;">
                        <i class="bi bi-search"></i>
                    </form>
                    <ul class="navbar-nav mx-5">
                        <li class="nav-item">
                        <a class="nav-link fs-4" href="#"><i class="bi bi-suit-heart text-black"></i></a>
                        <span class="span text-white">4</span>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link fs-4" href="#"><i class="bi bi-cart3 text-black"></i></a>
                        <span class="span text-white">2</span>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link fs-4" href="#"><i class="bi bi-person text-black"></i></a>
                        </li>
                    </ul>
            </div>
        </div>
</nav>
<hr class="mb-5">
<nav aria-label="breadcrumb" class="mx-5 mt-5 ">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-secondary">Account</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-secondary">My Account</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-secondary">Product</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-secondary">View Cart</a></li>
        <li class="breadcrumb-item active" aria-current="page" style="color:black;">Checkout</li>
    </ol>
    </nav>

    <h4 class="mt-5">Billing Details</h4>
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-3 col-12 col-sm-6 col-lg-3">
                <form action="">
                    <div class="first-name">
                        <label for="" class="text-secondary">First Name</label>
                        <input type="text" style="  background-color: #f2f2f2;outline:none; width:400px;" class="border-0 p-2 ">
                    </div>
                    <div class="first-name py-3">
                        <label for="" class="text-secondary">Company Name</label>
                        <input type="text" style="  background-color: #f2f2f2;outline:none; width:400px;" class="border-0 p-2 ">
                    </div>
                    <div class="first-name py-2">
                        <label for="" class="text-secondary">Street Address</label>
                        <input type="text" style="  background-color: #f2f2f2;outline:none; width:400px;" class="border-0 p-2 ">
                    </div>
                    <div class="first-name py-3">
                        <label for="" class="text-secondary">Apartment, floor, etc. (optional)</label>
                        <input type="text" style="  background-color: #f2f2f2;outline:none; width:400px;" class="border-0 p-2 ">

                        <div class="first-name py-3">
                        <label for="" class="text-secondary">Town/City</label>
                        <input type="text" style="  background-color: #f2f2f2;outline:none; width:400px;" class="border-0 p-2 ">
                    </div>
                    <div class="first-name py-é">
                        <label for="" class="text-secondary">Phone Number</label>
                        <input type="text" style="  background-color: #f2f2f2;outline:none; width:400px;" class="border-0 p-2 ">
                    </div>
                    <div class="first-name py-3">
                        <label for="" class="text-secondary">Email Address</label>
                        <input type="text" style="  background-color: #f2f2f2;outline:none; width:400px;" class="border-0 p-2 ">
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="exampleCheckbox">
                        <label class="form-check-label" for="exampleCheckbox">
                                Save this information for faster check-out next time
                        </label>
                    </div>
                </div>

                </form>
            </div>

            <div class="col-md-3 col-12 col-sm-6 col-lg-3 cash-checkout ">
                <div class="d-flex form-check">
                    <div>
                        <input class="form-check-input " type="radio" name="exampleRadios" id="option1" value="option1" >
                        <label class="form-check-label" for="option1" class="">Bank</label>
                    </div>
                    <div class="paiement">
                        <img src="assets/image-32.png" alt="" width="21%">
                        <img src="assets/image-30.png" alt="" width="21%">
                        <img src="assets/image-31.png" alt="" width="21%">
                        <img src="assets/image-33.png" alt="" width="21%">
                    </div>
                </div>
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="option2" value="option2" checked>
                    <label class="form-check-label" for="option2">Cash on delivery</label>
                </div>
                <div class="d-flex">
                    <div>
                        <input type="text" placeholder="Coupon Code" style="width:200px; outline:none; border:none; padding:5px;border-radius:5px; color:#ffffff;" class="input-coupon">
                    </div>
                    <div>
                        <button class="mx-4  btn "  style="color:#ffffff;background-color: #db4444; width: 200px; outline:none; border:none; padding:5px;border-radius:3px; width:200px">Apply Coupon</button>
                    </div>
                </div>
                <div class="py-3">
                    <button class="w-50 "  style="color:#ffffff;background-color: #db4444; outline:none; border:none; padding:8px;border-radius:3px; width:200px">Apply Coupon</button>
                </div>
            </div>
        </div>
    </div>




    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
    @include('partial.footer')

</body>
</html>

