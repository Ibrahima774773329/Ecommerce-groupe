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
    margin-bottom: 1vh;
      width: 30vh;
}
input{
    background-color: #f2f2f2;
}
.bi-search{
  position: relative;
  right: 3vh;
  top: 2vh;
}
.rectangle{
        margin-right: 1.6rem;
        width: 1.2rem;
        height: 2.5rem;
        background-color: #db4444;
        border-radius: 0.4rem;
        flex-shrink: 0;
     }
     .our-products{
        color: #db4444;
        font-weight: bold;
    }
    .icon-heart-eye i{
        background-color: #fff;
        border-radius: 50%;
        padding: 8px;
        font-size: large;
    }
    .icon-heart-eye a{
        color: #000;
        margin: 10px;
    }
    .icon-heart-eye{
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        position: relative;
        bottom: 220px;
    }
    .stars .bi-star-fill{
        color: #e8c70ce0;
    }
    .stars .start-fil{
        color: #939191e7;
    }
    .star{
        margin-bottom: 10vh;
    }
    .image-color-change img{
        width: 50px;
        position: relative;
        bottom: 30px;
    }
    div .semi-clone{
        width: 0.4rem;
        height: 1.6rem;
        margin: 1.6rem 1.7rem 0rem 0rem;
    }
    .image-fill a{
        color: #000;
    }
    .image-fill{
        justify-content: center;
        text-align: center;
        margin-left:80%;

    }
    .image-fill i{
        background-color:#f2f2f2;
        border-radius: 50%;
        padding:10px;
        font-size: 24px;
        }

    .head{
        display: flex;

        position: relative;
        top: 20px;
      }

    .cares{
        position: relative;
        left: -10px;

        background-color: red;
        color: red;
        width: 35px;
        height: 20px;
        border-radius: 10px;
    }

      .titre-1{
        position: relative;
        right: 50px;
      }

      .flech1 {
        position: relative;
        left: 200px;
        top: 20px;
        width: 50px;
        height: 50px;
        left: 600px;
        border-radius: 50%;
        background-color: gainsboro;
        border: 1px solid gainsboro;

      }

      .cartCategorie{
          display: flex;
        left: 20px;
          position: relative;
          top: 50px;
          gap: 30px;
          overflow-x: auto;
          font-size: 0px;
          scrollbar-width: none;

      }
      .cartCategorie::-webkit-scrollbar{
        display: none;
      }
      .category-phone {
        border: 1px solid black;
        padding: 20px;
        width: 100px;
        height: 150px;
      }
      .category-phone:hover {
        background-color: red;
      }
      .category-phone3 {
        border: 1px solid black;
        padding: 20px;
        width: 250px;
        height: 150px;
      }

      .category-phone3:hover {
        background-color: red;
      }
      .phones {
        font-size: 25px;

      color: black;
      text-decoration: underline;
      }

      .phones a{
       text-decoration: none;
      }
      .phones:hover {
        color: aliceblue;
      }
      .phones1 {
        position: relative;
        font-size: 25px;
        left: 40px;
        color: black;
        text-decoration: underline;
      }

      .phones1 a{
       text-decoration: none;
      }

      .phones1:hover {
        color: aliceblue;
      }
      .phones3 {
        position: relative;
        font-size: 25px;
        left: 40px;
        color: black;
        text-decoration: underline;
      }

      .phones3 a{
       text-decoration: none;
      }

      .phones3:hover {
        color: aliceblue;
      }
      .category-img:hover {
        color: aliceblue;
      }

      .phones2 {
        position: relative;
        font-size: 25px;
        left: 10px;
        color: black;
        text-decoration: underline;
      }
      .phones2 a{
       text-decoration: none;
      }
      .phones2:hover {
        color: aliceblue;
      }
      .phones4 {
        position: relative;
        font-size: 25px;
        left: 60px;
        color: black;
        text-decoration: underline;
      }
      .phones4 a{
       text-decoration: none;
      }
      .phones4:hover {
        color: aliceblue;
      }
      .icone{
          width: 200px;
         color: black;
         font-weight: 800px;
         font-size: 60px;
      }
      .icone a{
         text-decoration: none;
      }
      .icone:hover{
        color: aliceblue;
      }
      .icone1{
        position: relative;
        right: 30px;
        width: 200px;
        color: black;
        font-weight: 800px;
        font-size: 60px;
      }
      .icone1 a{
       text-decoration: none;
      }
      .icone1:hover{
      color: aliceblue;
      }
      @media only screen and (max-width: 768px){
        .head .flech1{
            display: none !important;
        }
        .cartCategorie{
            gap: 20px;
            display: grid;
            grid-template-columns: auto;
            width: 100%;
        }
         .titre-1{
            position: relative;
            left: 20px;
          }
          .categories{
            position: relative;
            left: 30px;
          }
      }
      .title1{
    font-weight: bold;
    }
    .para1{
    color: red;
    font-weight: bold;
    font-size: 30px;
}

.footer{

display: flex;
justify-content: space-around;
}
.footer1{
background-color: black;
}
ul{
margin-right: 40px;
}
ul li , h4{
list-style: none;
font-size: 15px;
margin-bottom: 20px;
}
input{
background-color: black;
outline: none;
border: none;
}
.div1{
border: 1px solid white;
border-radius: 3px;
padding: 7px;
}
.rso{
display: flex;
justify-content: space-between;

}
.cop{
display: flex;
justify-content: center;
color: rgb(204, 204, 197);
}
.cop1{
width: 20px;
height: 20px;
margin-right: 10px;

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

    <nav class="navbar navbar-expand-lg navbar-light">
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
                        <a class="nav-link text-black" href="{{route('welcome')}}">Home</a>
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
                    <form class="d-flex mx-5">
                        <input class="form-control border-0" type="search" placeholder="what are you looking for?" aria-label="Search" style="  background-color: #f2f2f2;">
                        <i class="bi bi-search"></i>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link fs-5" href="#"><i class="bi bi-suit-heart text-black"></i></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link fs-5" href="#"><i class="bi bi-person text-black"></i></a>
                        </li>
                        <li class="nav-item ">
                        <a class="nav-link fs-5" href="#"><i class="bi bi-cart3 text-black"></i></a>
                          </li>
                    </ul>
</nav>
<hr>
    <!-- header -->
<div class="d-flex mx-2 py-5 text-center">
        <div class="mx-5">
            <div class="d-flex">
            <div>
                <p>Woman's Fashion</p></div>
                <div class="mx-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </div>
            </div>
            <div class="d-flex">
                <div>
                    <p>Men's Fashion</p>
                </div>
                <div class="mx-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </div>
            </div>
            <p class="">Electronics</p>
            <p class="">Home & Lifestyle</p>
            <p class="">Medicine</p>
            <p class="">Sports & Outdoor</p>
            <p class="">Baby’s & Toys</p>
            <p class="">Groceries & Pets</p>
            <p class="">Health & Beauty</p>
        </div>


  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/heroendframecvklg0xk3w6elarge-2-WVY.png" class="d-block  " alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/heroendframecvklg0xk3w6elarge-2-y9U.png" class="d-block " alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/heroendframecvklg0xk3w6elarge-2-WVY.png" class="d-block" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<!-- sales -->

<div class=" py-5">

    <div class="  mx-5">
        <div class="d-flex mx-3">
            <div class="rectangle"></div>
            <p class="our-products ">Today's</p>
        </div>
      <div class="d-flex  ">
            <div class="">
                <p class="fs-1 fw-bold mx-4">Flash Sales</p>
            </div>
            <div class="mx-5 ">
                <p class="small">Days</p>
                <p class="fw-bold fs-2 number">03</p>
            </div>
            <img src="assets/semiclone-a5G.png" alt="" class="semi-clone">
            <div class="mx-5">
                <p class="small">Hours</p>
                <p class="fw-bold fs-2 number">23</p>
            </div>
            <img src="assets/semiclone-a5G.png" alt="" class="semi-clone">
          <div class="mx-5">
              <p class="small">minutes</p>
              <p class="fw-bold fs-2 number">19</p>
          </div>
          <img src="assets/semiclone-a5G.png" alt="" class="semi-clone">
          <div class="mx-5">
            <p class="small">Seconds</p>
            <p class="fw-bold fs-2 number">56</p>
        </div>
      </div>
    </div>
    <div class="image-fill ">
      <a href=""><i class="bi bi-arrow-left  "></i></a>
      <a href=""><i class="bi bi-arrow-right"></i></a>
    </div>
  </div>
</div>

 <div class="container ">
        <div class="row">
            <div class="col-md-3 col-12 col-sm-6 col-lg-3">
                <div class="card border-0" style=" background-color: #f2f2f2;height: 250px;">
                  <a href="{{route('details')}}"><img src="assets/g92-2-500x500-1-15L.png" alt="" class="card-img-top mx-5 h-50 w-50 mt-5 col-md-3 col-12 col-sm-6 col-lg-3"></a>
                    <div class="icon-heart-eye py-5">
                        <a href=""><i class="bi bi-suit-heart"></i> </a>
                        <a href=""><i class="bi bi-eye"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="card-title">GP11 Shooter USB Gamepad</h6>
                    <div class="d-flex">
                        <p class="text-danger py-3 fw-bold">$120 <span class="text-black py-3 mx-2 text-decoration-line-through fw-bold">$160</span></p>
                    </div>
                    <div class="stars d-flex ">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <p class="text-en-gras  mx-2 fw-bold">(55)</p>
                     </div>
                </div>
            </div>

            <div class="col-md-3 col-12 col-sm-6 col-lg-3">
                <div class="card border-0" style=" background-color: #f2f2f2;height: 250px;">
                  <a href="{{route('details')}}">  <img src="assets/ak-900-01-500x500-1-3w8.png" alt="" class="card-img-top mx-5 h-50 w-50 mt-4 col-md-3 col-12 col-sm-6 col-lg-3"></a>
                    <button type="submit" form="" class="bg-dark text-white mt-5 py-2 btn-cart">Add To Cart</button>
                    <div class="icon-heart-eye py-1">
                        <a href=""><i class="bi bi-suit-heart"></i> </a>
                        <a href=""><i class="bi bi-eye"></i></a>
                    </div>
                </div>
                    <div class="card-body mx-2">
                        <h6 class="card-title">AK-900 Wired Keyboard</h6>
                        <div class="d-flex">
                            <p class="text-danger py-3 fw-bold">$960 <span class="text-black py-3 mx-2 text-decoration-line-through fw-bold">$1160</span></p>
                        </div>
                        <div class="stars mx-2 py-2 d-flex">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill start-fil"></i>
                            <i class="bi bi-star-fill start-fil"></i>
                            <p class="text-en-gras  fw-bold">(75)</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-12 col-sm-6 col-lg-3">
                    <div class="card  border-0" style=" background-color: #f2f2f2;height: 250px;">
                        <img src="assets/g92-2-500x500-1-15L.png" alt="" class="card-img-top mx-5 h-50 w-50 mt-5 col-md-3 col-12 col-sm-6 col-lg-3">
                        <div class="icon-heart-eye py-5">
                            <a href=""><i class="bi bi-suit-heart"></i> </a>
                            <a href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">GP11 Shooter USB Gamepad</h6>
                        <div class="d-flex">
                            <p class="text-danger py-3 fw-bold">$120 <span class="text-black py-3 mx-2 text-decoration-line-through fw-bold">$160</span></p>
                        </div>
                        <div class="stars d-flex ">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <p class="text-en-gras  mx-2 fw-bold">(55)</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-12 col-sm-6 col-lg-3">
                    <div class="card  border-0" style=" background-color: #f2f2f2;height: 250px;">
                        <img src="assets/g92-2-500x500-1-15L.png" alt="" class="card-img-top mx-5 h-50 w-50 mt-5 col-md-3 col-12 col-sm-6 col-lg-3">
                        <div class="icon-heart-eye py-5">
                            <a href=""><i class="bi bi-suit-heart"></i> </a>
                            <a href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">GP11 Shooter USB Gamepad</h6>
                        <div class="d-flex">
                            <p class="text-danger py-3 fw-bold">$120 <span class="text-black py-3 mx-2 text-decoration-line-through fw-bold">$160</span></p>
                        </div>
                        <div class="stars d-flex ">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <p class="text-en-gras  mx-2 fw-bold">(55)</p>
                        </div>
                    </div>
                </div>
        </div>
        <div class=" mx-auto  col-12 col-md-3 col-sm-6 col-lg-6 ">
       <a href="{{route('register')}}"> <button class="btn btn-lg btn-danger btn-button mx-5" type="button">View All Products</button></a>
        </div>
</div>

    <!-- category -->

    <div class="container-fluid p-0 mb-5 py-5">
      <div class="container ">
        <div class="categories">
          <h6 style="color: red;"> <span class="cares">x</span>Categories</h6>
        </div>
        <div class="head">
          <div class="col-sm-4">
            <h1 class="titre-1 ">Browse By Category</h1>
          </div>
          <div class="">
            <button id="prev" class="flech1 "><ion-icon name="arrow-forward"></ion-icon></button>
            <button id="next" class="flech1 "><ion-icon name="arrow-back"></ion-icon></button>
        </div>
      </div>
      <div class="cartCategorie">

          <div class="category-phone3 col-sm-4">
            <a href="">
              <ion-icon class="icone" name="watch-outline"></ion-icon>
            </a>
            <p class="phones3 text-decoration-none">SmartWatch</p>
          </div>

          <div class="category-phone3 col-sm-4">
            <a href="">
              <ion-icon class="icone" name="camera-outline"></ion-icon>
            </a>
            <p class="phones4 text-decoration-none">Camera</p>
          </div>

          <div class="category-phone3 col-sm-4">
            <a href="">
              <ion-icon class="icone" name="headset-outline"></ion-icon>
            </a>
            <p class="phones3 text-decoration-none"> HeadPhones</p>
          </div>

          <div class="category-phone3 col-sm-4">
            <a href="">
              <ion-icon class="icone" name="headset-outline"></ion-icon>
            </a>
            <p class="phones3 text-decoration-none"> HeadPhones</p>
          </div>

          <div class="category-phone3 col-sm-4">
            <a href="">
              <ion-icon class="icone" name="headset-outline"></ion-icon>
            </a>
            <p class="phones3 text-decoration-none"> HeadPhones</p>
          </div>
        </div>
    </div>

    <!-- selling -->
    <div class="py-5 mt-5">
        <div class="  mx-5">
            <div class="d-flex mx-3">
                <div class="rectangle"></div>
                <p class="our-products ">This Month</p>
            </div>
            <p class="fs-1 fw-bold mx-4">Best Selling Products</p>
        </div>
        <div class="image-fill ">
            <button class="btn-lg border-0" style=" background-color:#db4444;color: #fff;width: 40%; padding: 5px;">View All</button>
        </div>
    </div>
    <div class="container py-0 content">
        <div class="row">
            <div class="col-md-3 col-12 col-sm-6 col-lg-3">
                <div class="card border-0" style=" background-color: #f2f2f2;height: 250px;">
                    <img src="assets/zah9d56260021000000light-the-north-face-x-gucci-coat-1.png" alt="" class="card-img-top mx-5 mt-5 h-50 w-50 col-md-3 col-12 col-sm-6 col-lg-3">
                    <div class="icon-heart-eye mt-5 py-3">
                        <a href=""><i class="bi bi-suit-heart"></i> </a>
                        <a href=""><i class="bi bi-eye"></i></a>
                    </div>
                </div>
                <div class="card-body mx-3">
                    <h6 class="card-title">The north coat</h6>
                        <div class="d-flex">
                            <p class="text-danger  fw-bold">$260 <span class="text-black py-3 mx-2 text-decoration-line-through fw-bold">$360</span></p>
                        </div>
                        <div class="stars mx-2 d-flex">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill start-fil"></i>
                            <i class="bi bi-star-fill start-fil"></i>
                            <p class="text-en-gras  fw-bold">(65)</p>
                        </div>
                </div>
            </div>
            <div class="col-md-3 col-12 col-sm-6 col-lg-3">
                <div class="card border-0" style=" background-color: #f2f2f2;height: 250px;">
                    <img src="assets/c2st87460010820000light-gucci-savoy-medium-duffle-bag-1-3sx.png" alt="" class="card-img-top h-80 w-60 mt-4 col-md-3 col-12 col-sm-6 col-lg-3">
                    <div class="icon-heart-eye">
                    <a href=""><i class="bi bi-suit-heart"></i> </a>
                    <a href=""><i class="bi bi-eye"></i></a>
                    </div>
                </div>
                <div class="card-body mx-3">
                    <h6 class="card-title">Gucci duffle bag</h6>
                    <div class="d-flex">
                        <p class="text-danger fw-bold">$960 <span class="text-black py-3 mx-2 text-decoration-line-through fw-bold">$1160</span></p>
                    </div>
                    <div class="stars  d-flex">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill start-fil"></i>
                        <i class="bi bi-star-fill start-fil"></i>
                        <p class="text-en-gras  fw-bold">(65)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-12 col-sm-6 col-lg-3">
                <div class="card border-0" style=" background-color: #f2f2f2;height: 250px;">
                    <img src="assets/gammaxx-l240-argb-1-500x500-1-Kdk.png" alt="" class="card-img-top h-80 w-80  mt-4 col-md-3 col-12 col-sm-6 col-lg-3">
                    <div class="icon-heart-eye                  ">
                        <a href=""><i class="bi bi-suit-heart"></i> </a>
                        <a href=""><i class="bi bi-eye"></i></a>
                    </div>
                </div>
                <div class="card-body mx-3">
                    <h6 class="card-title">RGB liquid CPU Cooler</h6>
                    <div class="d-flex">
                        <p class="text-danger  fw-bold">$160 <span class="text-black py-3 mx-2 text-decoration-line-through fw-bold">$170</span></p>
                    </div>
                    <div class="stars mx-2 d-flex">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill start-fil"></i>
                        <i class="bi bi-star-fill start-fil"></i>
                        <p class="text-en-gras  fw-bold">(65)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-12 col-sm-6 col-lg-3">
                <div class="card border-0" style=" background-color: #f2f2f2;height: 250px;">
                    <img src="assets/sam-moghadam-khamseh-l7mqshlau-unsplash-1.png" alt="" class="card-img-top h-90 w-60 mb-5 col-md-3 col-12 col-sm-6 col-lg-3">
                    <div class="icon-heart-eye mt-3">
                    <a href=""><i class="bi bi-suit-heart"></i> </a>
                    <a href=""><i class="bi bi-eye"></i></a>
                    </div>
                </div>
                <div class="card-body mx-3">
                    <h6 class="card-title">Small BookSelf</h6>
                    <div class="d-flex">
                        <p class="text-danger fw-bold">$360</p>
                    </div>
                    <div class="stars mx-2 d-flex">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill start-fil"></i>
                        <i class="bi bi-star-fill start-fil"></i>
                        <p class="text-en-gras  fw-bold">(65)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

  <!-- cart -->

  <div class=" ">
        <div class="  mx-5">
            <div class="d-flex mx-3">
                <div class="rectangle"></div>
                <p class="our-products ">Our Products</p>
            </div>
            <p class="fs-1 fw-bold mx-4">Explore Our Products</p>
        </div>
        <div class="image-fill ">
          <a href=""><i class="bi bi-arrow-left icon_arrow "></i></a>
          <a href=""><i class="bi bi-arrow-right icon_arrow"></i></a>
        </div>
    </div>
  <div class="container py-0 content">
      <div class="row">
          <div class="col-md-3 col-12 col-sm-6 col-lg-3">
              <div class="card border-0" style=" background-color: #f2f2f2;height: 250px;">
                  <img src="assets/rdoexxtrl-1-29x.png" alt="" class="card-img-top mx-5 mt-4 h-70 w-50 col-md-3 col-12 col-sm-6 col-lg-3">
                  <div class="icon-heart-eye">
                    <a href=""><i class="bi bi-suit-heart"></i> </a>
                    <a href=""><i class="bi bi-eye"></i></a>
                  </div>
              </div>
              <div class="card-body mx-3">
                  <h6 class="card-title">Breed Dry Dog Food</h6>
                  <div class="d-flex">
                      <p class="text-danger py-4">$100</p>
                      <div class="stars mx-2 py-4 d-flex justify-content-end">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill start-fil"></i>
                        <i class="bi bi-star-fill start-fil"></i>
                        <p class="text-en-gras py-0 mx-1 fw-bold">(35)</p>
                      </div>

                  </div>
              </div>
          </div>

          <div class="col-md-3 col-12 col-sm-6 col-lg-3">
            <div class="card border-0" style=" background-color: #f2f2f2;height: 250px;">
                <img src="assets/eos-250d-03-500x500-1-5ar.png" alt="" class="card-img-top mx-5 h-70 w-50 mt-4 col-md-3 col-12 col-sm-6 col-lg-3">
                <button class="bg-dark text-white btn-cart py-2 mt-5">Add To Cart</button>
                <div class="icon-heart-eye">
                  <a href=""><i class="bi bi-suit-heart"></i> </a>
                  <a href=""><i class="bi bi-eye"></i></a>
                </div>
            </div>
            <div class="card-body mx-2">
                <h6 class="card-title">CANON EOS DSLR Camera</h6>
                <div class="d-flex">
                    <p class="text-danger py-4 mt-1">$360</p>
                    <div class="stars mx-2 py-4 d-flex">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                      <p class="text-en-gras py-0 mx-1 fw-bold">(95)</p>
                    </div>

                </div>
            </div>
          </div>
          <div class="col-md-3 col-12 col-sm-6 col-lg-3">
            <div class="card border-0" style=" background-color: #f2f2f2;height: 250px;">
                <img src="assets/ideapad-gaming-3i-01-500x500-1-QA6.png" alt="" class="card-img-top h-80 w-80  mt-4 col-md-3 col-12 col-sm-6 col-lg-3">
                <div class="icon-heart-eye mt-5">
                  <a href=""><i class="bi bi-suit-heart"></i> </a>
                  <a href=""><i class="bi bi-eye"></i></a>
                </div>
            </div>
            <div class="card-body mx-2">
                <h6 class="card-title">ASUS FHD Gaming Laptop</h6>
                <div class="d-flex">
                <p class="text-danger py-4 mt-1">$360</p>
                    <div class="stars mx-2 py-4 d-flex">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                      <p class="text-en-gras py-0 mx-1 fw-bold">(95)</p>
                    </div>
                </div>
            </div>
          </div>

          <div class="col-md-3 col-12 col-sm-6 col-lg-3">
            <div class="card border-0" style=" background-color: #f2f2f2;height: 250px;">
                <img src="assets/curology-j7pkvqrtusm-unsplash-1.png" alt="" class="card-img-top h-100 w-100 mb-5 col-md-3 col-12 col-sm-6 col-lg-3">
                <div class="icon-heart-eye ">
                  <a href=""><i class="bi bi-suit-heart"></i> </a>
                  <a href=""><i class="bi bi-eye"></i></a>
                </div>
            </div>
            <div class="card-body mx-2">
                <h6 class="card-title">Curology Product Set</h6>
                <div class="d-flex">
                    <p class="text-danger py-4">$500</p>
                    <div class="stars mx-2 py-4 d-flex justify-content-end">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                      <p class="text-en-gras py-0 mx-1 fw-bold">(145)</p>
                    </div>

                </div>
            </div>
          </div>

          <div class="col-md-3 col-12 col-sm-6 col-lg-3">
            <div class="card border-0 " style=" background-color: #f2f2f2;height: 250px;">
                <img src="assets/new-mercedes-benz-gtr-licensed-ride-on-car-kids-electric-toy-car-1-7NJ.png" alt="" class="card-img-top h-80 w-80 mt-4 col-md-3 col-12 col-sm-6 col-lg-3">
                <div class="icon-heart-eye mt-5">
                  <a href=""><i class="bi bi-suit-heart"></i> </a>
                  <a href=""><i class="bi bi-eye"></i></a>
                </div>
            </div>
            <div class="card-body mx-2">
                <h6 class="card-title">Kids Electric Car</h6>
                <div class="d-flex">
                    <p class="text-danger py-4">$960</p>
                    <div class="stars mx-2 py-4 d-flex ">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                      <p class="text-en-gras py-0 mx-1 fw-bold">(65)</p>
                    </div>
                </div>
                <div class="image-color-change py-1">
                  <img src="assets/colour-chnage-GAE.png" alt="">
                </div>
            </div>
          </div>

          <div class="col-md-3 col-12 col-sm-6 col-lg-3">
            <div class="card border-0" style=" background-color: #f2f2f2;height: 250px;">
                <img src="assets/copasense-1-2ki.png" alt="" class="card-img-top h-80 w-80  mt-4 col-md-3 col-12 col-sm-6 col-lg-3">
                <div class="icon-heart-eye mt-5">
                  <a href=""><i class="bi bi-suit-heart"></i> </a>
                  <a href=""><i class="bi bi-eye"></i></a>
                </div>
            </div>
            <div class="card-body mx-2">
                <h6 class="card-title">Jr. Zoom Soccer Cleats</h6>
                <div class="d-flex">
                    <p class="text-danger py-4">$1160</p>
                    <div class="stars mx-2 py-4 d-flex justify-content-end">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                      <p class="text-en-gras py-1 mx-1 fw-bold">(35)</p>
                    </div>

                </div>
                <div class="image-color-change py-1">
                  <img src="assets/colour-chnage-GAE.png" alt="">
                </div>
            </div>
          </div>

          <div class="col-md-3 col-12 col-sm-6 col-lg-3">
            <div class="card border-0" style=" background-color: #f2f2f2;height: 250px;">
                <img src="assets/gp11prd3-1-f2i.png" alt="" class="card-img-top h-80 w-80 mt-4 col-md-3 col-12 col-sm-6 col-lg-3">
                <div class="icon-heart-eye mt-5">
                  <a href=""><i class="bi bi-suit-heart"></i> </a>
                  <a href=""><i class="bi bi-eye"></i></a>
                </div>
            </div>
            <div class="card-body mx-2">
                <h6 class="card-title">GP11 Shooter USB Gamepad</h6>
                <div class="d-flex">
                    <p class="text-danger py-4">$660</p>
                    <div class="stars mx-2 py-4 d-flex justify-content-end">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                      <p class="text-en-gras py-0 mx-1 fw-bold">(55)</p>
                    </div>

                </div>
                <div class="image-color-change py-1">
                  <img src="assets/colour-chnage-GAE.png" alt="">
                </div>
            </div>
          </div>

          <div class="col-md-3 col-12 col-sm-6 col-lg-3 ">
            <div class="card border-0" style=" background-color: #f2f2f2;height: 250px;">
                <img src="assets/z8a1x34750011000000light-reversible-quilted-satin-jacket-1-3AA.png" alt="" class="card-img-top h-80 w-80  mt-4 col-md-3 col-12 col-sm-6 col-lg-3">
                <div class="icon-heart-eye mt-5">
                  <a href=""><i class="bi bi-suit-heart"></i> </a>
                  <a href=""><i class="bi bi-eye"></i></a>
                </div>
            </div>
            <div class="card-body mx-2">
                <h6 class="card-title">Quilted Satin Jacket</h6>
                <div class="d-flex">
                    <p class="text-danger py-4">$660</p>
                    <div class="stars mx-2 py-4 d-flex justify-content-end">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                      <p class="text-en-gras py-0 mx-1 fw-bold">(55)</p>
                    </div>
                </div>
                <div class="image-color-change ">
                  <img src="assets/colour-chnage-GAE.png" alt="">
                </div>
            </div>
          </div>
          <div class="  mx-auto col-md-6 col-12">
           <a href="{{route('register')}}" class="text-decoration-none"><button class="btn btn-lg btn-danger btn-button btn-block mx-5" type="button">View All Products</button></a>
          </div>

      </div>
  </div>

  <!-- feature -->
  <div class="container-fluid p-5">
    <p class="para1"><span>&nbsp;&nbsp;&nbsp;</span> Featured</p>
    <h1 class="title1 my-5">NEW ARRIVAL</h1>
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <img src="assets/fotter-img1.png" alt="">
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="row">
          <div class="col-12">
            <img src="./assets/fotter-img2.png" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col-6 py-4">
            <img src="./assets/fotter-img3.png" alt="">
          </div>
          <div class="col-6 py-4">
            <img src="./assets/fotter-img4.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row text-center pt-5">
      <div class="col-lg-4 col-md-12">
        <img src="./assets/icon-car.png" alt="" width="35%">
        <h4 class="pt-3">FREE AND FAST DELIVERY</h4>
        <p>Free delivery for all orders over $140</p>
      </div>
      <div class="col-lg-4 col-md-12">
        <img src="./assets/icon-kit.png" alt="" width="35%">
        <h4 class="pt-3">24/7 CUSTOMER SERVICE</h4>
        <p>Friendly 24/7 customer support</p>
      </div>
      <div class="col-lg-4 col-md-12">
        <img src="./assets/icon-validate.png" alt="" width="35%">
        <h4 class="pt-3">MONEY BACK GUARANTEE</h4>
        <p>We reurn money within 30 days</p>
      </div>
    </div>
  </div>

  <!-- footer -->
  <div class="container-fluid text-light pt-5 mt-5 footer1">
    <div class="row footer">
      <div class="col-lg-3 col-md-6">
        <h4>Exclusive</h4>
        <ul class="list-group">
          <li>Subscrire</li>
          <li>Get 10% off your first order</li>
          <div class="d-flex div1">
            <input type="text" placeholder="Enter votre adress email" class="outline-0 bg-none">
            <a href="#"><img src="./assets/icon-send-SNe.png" alt="" width="20px" class="ms-4"></a>
          </div>
          <div class="pt-5 rso">
            <a href="#"><img src="./assets/icon-facebook-4W6.png" alt="" width="40%"></a>
            <a href="#"><img src="./assets/icon-instagram-sqk.png" alt="" width="40%"></a>
            <a href="#"><img src="./assets/icon-twitter-G5x.png" alt="" width="40%"></a>
            <a href="#"><img src="./assets/icon-linkedin-Dge.png" alt="" width="40%"></a>
          </div>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6">
        <h4>Support</h4>
        <ul class="list-group">
          <li>111 Bijoy sarani, Dhaka,  DH 1515, Bangladesh.</li>
          <li><a href="#" style="color: aliceblue; text-decoration: none;">exclusive@gmail.com</a></li>
          <li>+88015-88888-9999</li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6">
        <h4>Account</h4>
        <ul class="list-group">
          <li>My Account</li>
          <li><a href=".#" style="color:aliceblue; text-decoration-line: none;">Login </a>/ <a href="#" style="color:aliceblue; text-decoration-line: none;">Register</a></li>
          <li><a href="#" style="color:aliceblue; text-decoration-line: none;">Cart</a></li>
          <li><a href="#" style="color:aliceblue; text-decoration-line: none;">Wishlist</a></li>
          <li><a href="#" style="color:aliceblue; text-decoration-line: none;">Shop</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6">
        <h4>Quick Link</h4>
        <ul class="list-group">
          <li>Privacy Policy</li>
          <li>Terms Of Use</li>
          <li><a href="#" style="color:aliceblue; text-decoration-line: none;">FAQ</a></li>
          <li><a href="#" style="color:aliceblue; text-decoration-line: none;">Contact</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6">
        <h4>Download App</h4>
        <p>Save $3 with App New User Only</p>
        <div class="QR m-5">
            <p><a href="#"><img src="./assets/qrcode-1.png" width="50%"></a></p>
            <p class="para2">
                <a href="#"><img class="image1" src="./assets/png-transparent-google-play-store-logo-google-play-app-store-android-wallets-text-label-logo-eU2.png" width="90px"></a>
                <a href="#"><img class="image1" src="./assets/download-appstore-Yae.png" width="70px"></a>
            </p>
        </div>
      </div>
    </div>
    <div class="d-flex cop">
      <img src="./assets/icon-copyright-qo8.png" alt="" class="cop1">
      <p>Copyright Rimel 2022. All right reserved</p>
    </div>
   </div>


    <script>
            const initSlider =() => {
        const flech1 = document.querySelectorAll(".flech1");
        const cartCategorie = document.querySelector(".cartCategorie");
        flech1.forEach(flech1 => {
            flech1.addEventListener("click",() => {
            const direction = flech1.id === "prev" ? -1 : 1;
            const scrollAmount = cartCategorie.clientWidth * direction;
            cartCategorie.scrollBy({left: scrollAmount, behavior: "smooth"});
            });
        });
        }
        window.addEventListener("load", initSlider);
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>

</body>
</html>
