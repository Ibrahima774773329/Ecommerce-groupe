<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>about</title>

<style>
.titres{
    position: relative;
    width: Hug (525px);
    height: Hug (336px);
    top: 122px;
    left: 75px;
    text-justify: auto;

}

.img-titre{
    width: 605px;
    height: 509px;
    top: 285px;
    left: 735px;
    border-radius: 4px, 0px, 0px, 4px;

}
.bloc-titre{
    display: grid;
    grid-template-columns: auto auto;
    gap: 250px;
}

/* cardcash */
.bloc-cash{
    display: grid;
    grid-template-columns: auto auto auto auto;
    justify-content: center;
    gap:50px;
}
.card-cash{
    position: relative;
    top: 140px;
    border: 1px solid black;
    width: 190px;
    height: 170px;
    border-radius: 5px;

}
.card-cash:hover{
    background-color: red;
}

.cash-icone{
    font-size: 50px;
    margin-left: 60px;
    margin-top: 10px;
    border: 1px solid grey;
    border-radius: 50%;
    box-shadow: -1px 0px 0px 7px #0000004D;
}

.cash-icone:hover{
    color: aliceblue;
    border: 1px solid whitesmoke;
}
.tit1{
    margin-left: 50px;
}

.tit{
    margin-left: 15px;
    font-size: 14px;
}

.tit1:hover{
color: aliceblue;
}

.tit:hover{
color: aliceblue;
}


.carousel{
    position: relative;
    top: 100px;

}
.point{
    position: relative;
    top: -70px;
    color: blueviolet !important;
    background-color: blue !important;
}
.card{
    width: 200px;


}
.card:hover{
    background-color: rgb(250, 61, 61);
}
@media only screen and (max-width: 768px){
    .bloc-titre{
        gap: 150px;
        display: grid;
        grid-template-columns: auto;
         width: 100%;
    }
    .titres{
    position: relative;
    left: 15px;
}
.bloc-cash{
    position: relative;
    right: -100px;
        gap: 100px;
        display: grid;
        grid-template-columns: auto auto;
         width: 100%;
    }

  }
  .secicone{
    bottom: 20vh;
    display: flex;
    justify-content: center;
    gap: 50px;
  }
.line{
    margin-bottom: 10vh;
}
/* .card-image{
   margin-left:40px;
} */
    </style>
</head>
<body>
@include('partial.navbar')
<hr class="line ">
<nav aria-label="breadcrumb" class="mx-5">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-secondary">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:black;">About</li>
  </ol>
</nav>
<div class="bloc-titre">
   <div class="titres">
    <h1 >Our Story</h1>
    <p>Launced in 2015, Exclusive is South Asia’s premier online shopping  makterplace with an active presense in Bangladesh. Supported  by wide range of tailored marketing, data and service solutions, Exclusive has 10,500 sallers and 300 brands and serves 3 millioons customers across the region. </p>
      <p> Exclusive has more than 1 Million products to offer, growing at a  very fast. Exclusive offers a diverse assotment in categories  ranging  from consumer.</p>
   </div>
   <div>

    <img src="assets/portrait-two-african-females-holding-shopping-bags-while-reacting-something-their-smartphone-1.png" class="img-titre">
   </div>
</div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3 col-12 col-sm-6 col-lg-3">
                <div class="card mx-5">
                    <img src="./assets/services-PeS.png" alt="" width="35%" class="mx-5 mt-3">
                    <h1 class="text-center">10.5K</h1>
                    <p class="text-center">Sallers active our site</p>
                </div>
            </div>

            <div class="col-md-3 col-12 col-sm-6 col-lg-3">
                <div class="card mx-5">
                    <img src="./assets/services-NJn.png" alt="" width="35%" class="mx-5 mt-3">
                    <h1 class="text-center">33K</h1>
                    <p class="text-center">Mopnthly Produduct Sale</p>
                </div>
            </div>

            <div class="col-md-3 col-12 col-sm-6 col-lg-3">
                <div class="card card-img2 mx-5">
                    <img src="./assets/services-PeS.png" alt="" width="35%" class="mx-5 mt-3">
                    <h1 class="text-center">45.5K</h1>
                    <p class="text-center">Customer active in our site</p>
                </div>
            </div>

            <div class="col-md-3 col-12 col-sm-6 col-lg-3">
                <div class="card mx-5">
                    <img src="./assets/services-2C2.png" alt="" width="35%" class="mx-5 mt-3">
                    <h1 class="text-center">25K</h1>
                    <p class="text-center">Anual gross sale in our site</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5 text-center">
        <div class="row">
            <div class="col-md-3 col-12 col-sm-6 col-lg-3">
                 <div class="card border-0 mx-5" style="background-color: #f2f2f2;height: 250px;">
                     <img src="assets/image-46.png" alt="" class="w-50 mx-5 mt-5">
                 </div>
                 <div class="card-body">
                    <h5>TOME CUREIE</h5>
                    <p>funder& Charmon</p>
                    <img src="assets/icon-twitter-j9U.png" alt="" width="6%">
                    <img src="assets/icon-instagram-U5x.png" alt="" width="6%">
                    <img src="assets/icon-linkedin-7rS.png" alt="" width="6%">
                 </div>
            </div>
            <div class="col-md-3 col-12 col-sm-6 col-lg-3">
                 <div class="card border-0 mx-5" style="background-color: #f2f2f2;height: 250px;">
                     <img src="assets/image-51.png" alt="" class="w-50 mx-5 mt-5">
                 </div>
                 <div class="card-body">
                    <h5>Emma Watson</h5>
                    <p>Managing Director</p>
                    <img src="assets/icon-twitter-j9U.png" alt="" width="6%">
                    <img src="assets/icon-instagram-U5x.png" alt="" width="6%">
                    <img src="assets/icon-linkedin-7rS.png" alt="" width="6%">
                 </div>
            </div>
            <div class="col-md-3 col-12 col-sm-6 col-lg-3">
                 <div class="card border-0 mx-5" style="background-color: #f2f2f2;height: 250px;">
                     <img src="assets/image-47.png" alt="" class="w-50 mx-5 mt-5">
                 </div>
                 <div class="card-body">
                    <h5>Will Smith</h5>
                    <p>Product Designer</p>
                    <img src="assets/icon-twitter-j9U.png" alt="" width="6%">
                    <img src="assets/icon-instagram-U5x.png" alt="" width="6%">
                    <img src="assets/icon-linkedin-7rS.png" alt="" width="6%">
                 </div>
            </div>
        </div>
    </div>

    <div class="container">
    <div class="row text-center pt-5">
      <div class="col-lg-4 col-md-12">
        <img src="./assets/icon-car.png" alt="" width="25%">
        <h4 class="pt-3">FREE AND FAST DELIVERY</h4>
        <p>Free delivery for all orders over $140</p>
      </div>
      <div class="col-lg-4 col-md-12">
        <img src="./assets/icon-kit.png" alt="" width="25%">
        <h4 class="pt-3">24/7 CUSTOMER SERVICE</h4>
        <p>Friendly 24/7 customer support</p>
      </div>
      <div class="col-lg-4 col-md-12">
        <img src="./assets/icon-validate.png" alt="" width="25%">
        <h4 class="pt-3">MONEY BACK GUARANTEE</h4>
        <p>We reurn money within 30 days</p>
      </div>
    </div>
  </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  @include('partial.footer')
</body>
</html>
