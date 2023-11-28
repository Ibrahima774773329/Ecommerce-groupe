<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A700"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> -->
</head>

<style>
.card {
    background-color:#f2f2f2;
    margin: 10px;
    height: 250px;
    border: none;
}
.card-img-top{
 height: 200px;
}
  .card:hover{
  cursor: pointer;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  transition: all 0.3s ease;
  transform: scale(1.05);
}
.card-body {
    padding: 15px;
}
.stars .bi-star-fill{
  color: #e8c70ce0;
}
.stars .bi-star{
  color: #939191e7;
}
.text-en-gras{
 font-weight: bold;
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
.icon-heart-eye{
display: flex;
flex-direction: column;
align-items: flex-end;
position: relative;
bottom: 330px;
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

.icon-heart-eye2{
display: flex;
flex-direction: column;
align-items: flex-end;
position: relative;
bottom: 280px;
}
.icon-heart-eye2 i{
background-color: #fff;
border-radius: 50%;
padding: 8px;
font-size: large;
}
.icon-heart-eye2 a{
color: #000;
margin: 10px;
}

.icon-heart-eye4{
display: flex;
flex-direction: column;
align-items: flex-end;
position: relative;
bottom: 280px;
}
.icon-heart-eye4 i{
background-color: #fff;
border-radius: 50%;
padding: 8px;
font-size: large;
}
.icon-heart-eye4 a{
color: #000;
margin: 10px;
}

/* span{
    text-decoration: line-through;
} */
.supicone{
position: absolute;

}
.image-color-change img{
width: 50px;
position: relative;
bottom: 30px;
}
.btn-button{
    margin-left: 100px;
background-color:#db4444;
color: #fff;
font-size: 16px;
}
.btn-button{
  width: 40%;
}

.add1{
    position: relative !important;
    bottom: 80px !important;
}

.add2{
    position: relative !important;
    bottom: 30px !important;
}

.add3{
    position: relative !important;
    bottom: 30px !important;
}

.add3{
    position: relative !important;
    bottom:-14px !important;
}
.wish{
    position: relative;
    top: 40px;
}
.promo{
    position: relative;
    background-color: red;
    color: #fff;
    border-radius: 5px;
    left: -218px;
    bottom: 40px;
}
.promo2{
    position: relative;
    background-color: red;
    color: #fff;
    border-radius: 5px;
    left: -200px;
    bottom: 40px;
}

.promo3{
    position: relative;
    background-color: green;
    color: #fff;
    border-radius: 5px;
    left: -189px;
    bottom: 40px;
    width: 50px;
}

</style>
<body>
    @include('partial.navbar')

  <div class=" mx-5">
    <div class=" d-flex mx-4">

    <p class="explore-our-products mx-4 fw-bold wish">Wishlist(24)</p>
  </div>
    <div class="image-fill">
     <button class="btn-move">Move all to bag</button>
  </div>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-3 col-12 col-sm-6 col-lg-3">
        <div class="card w-100 border-0 " style=" background-color: #f2f2f2;height: 250px;">
          <img src="assets/c2st87460010820000light-gucci-savoy-medium-duffle-bag-1.png" class="card-img-top w-50 mx-5 py-2 m-4 col-md-3 col-12 col-sm-6 col-lg-3" alt="Image 1">
             <button class="bg-dark text-white mt-5 py-1 add1 ">Add To Cart</button>
          <div class="icon-heart-eye ">
          <a href=""><i class="bi bi-archive"></i> </a>
            <h6 class="promo">-35%</h6>

           <a href=""><ion-icon name="trash-outline " class="supicone"></ion-icon></a>
          </div>
        </div>
        <div class="card-body">
          <h6 class="card-title">Breed Dry Dog Food</h6>
          <div class="d-flex">
              <p class="text-danger py-2">$100 <span class="text-decoration-line-through">$1160</span> </p>

           </div>
        </div>
      </div>
      <div class="col-md-3 col-12 col-sm-6 col-lg-3">
        <div class="card border-0" style=" background-color: #f2f2f2;height: 250px;">
          <img src="assets/gammaxx-l240-argb-1-500x500-1.png" class="card-img-top w-50 mx-5 py-4 col-md-3 col-12 col-sm-6 col-lg-3" alt="Image 1">
          <button class="bg-dark text-white mt-5 py-1 add2 ">Add To Cart</button>
          <div class="icon-heart-eye2 ">
            <a href=""><i class="bi bi-archive"></i> </a>
            </div>
        </div>
        <div class="card-body">
          <h6 class="card-title ">CANON EOS DSLR Camera</h6>
          <div class="d-flex">
            <p class="text-danger py-2">$360</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 col-sm-6 col-lg-3">
        <div class="card border-0" style=" background-color: #f2f2f2;height: 250px;">
          <img src="assets/gp11prd3-1-UiN.png" class="card-img-top w-60 mx-5 py-5" alt="Image 1">
          <button class="bg-dark text-white mt-5 py-1 add2 ">Add To Cart</button>
          <div class="icon-heart-eye py-5">
            <a href=""><i class="bi bi-archive"></i> </a>
            </div>
        </div>
        <div class="card-body">
          <h6 class="card-title">ASUS FHD Gaming Laptop </h6>
          <div class="d-flex">
            <p class="text-danger py-2">$700</p>

          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 col-sm-6 col-lg-3">
        <div class="card border-0" style=" background-color: #f2f2f2;height: 250px;">
          <img src="assets/z8a1x34750011000000light-reversible-quilted-satin-jacket-1.png" class="card-img-top w-50 mx-5 py-3 " alt="Image 1">
          <button class="bg-dark text-white mt-5 py-1 add3 ">Add To Cart</button>
        <div class="icon-heart-eye2 py-5 ">
            <a href=""><i class="bi bi-archive"></i> </a>
        </div>
        </div>
        <div class="card-body">
          <h6 class="card-title">Curology Product Set</h6>
          <div class="d-flex">
            <p class="text-danger py-2">$500</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 col-sm-6 col-lg-3">
        <div class="card border-b" style=" background-color: #f2f2f2;height: 250px;">
          <img src="assets/ideapad-gaming-3i-01-500x500-1.png" class="card-img-top py-3" alt="Image 1">
          <button class="bg-dark text-white mt-5 py-1 add2">Add To Cart</button>
          <div class="icon-heart-eye py-5">
             <a href=""><i class="bi bi-eye"></i></a>
             <h6 class="promo2">-35%</h6>
          </div>
        </div>
        <div class="card-body">
          <h6 class="card-title">Kids Electric Car</h6>
          <div class="d-flex">
            <p class="text-danger py-2">$960</p>
            <div class="stars mx-2 py-3 d-flex justify-content-end">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <p class="text-en-gras py-3">(65)</p>
          </div>
          <div class="image-color-change">
            <img src="" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 col-sm-6 col-lg-3">
        <div class="card border-0" style=" background-color: #f2f2f2;height: 250px;">
          <img src="assets/g27cq4-500x500-1-3qt.png" class="card-img-top w-55" alt="Image 1">
          <button class="bg-dark text-white mt-3 py-1 ">Add To Cart</button>
          <div class="icon-heart-eye4 py-2 ">
             <a href=""><i class="bi bi-eye"></i></a>
          </div>
        </div>
        <div class="card-body">
          <h6 class="card-title">Jr. Zoom Soccer Cleats</h6>
          <div class="d-flex">
            <p class="text-danger py-2">$1160</p>
              <div class="stars mx-2 py-3 d-flex justify-content-end">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <p class="text-en-gras py-3">(35)</p>
          </div>
          <div class="image-color-change">

          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 col-sm-6 col-lg-3">
        <div class="card border-0" style=" background-color: #f2f2f2;height: 250px;">
          <img src="assets/g92-2-500x500-1.png" class="card-img-top  py-5" alt="Image 1">
          <button class="bg-dark text-white mt-5 py-1  add2">Add To Cart</button>
          <div class="icon-heart-eye py-5 ">
             <a href=""><i class="bi bi-eye"></i></a>
             <h5 class="promo3">New</h5>
          </div>
        </div>
        <div class="card-body">
          <h6 class="card-title">GP11 Shooter USB Gamepad</h6>
          <div class="d-flex">
            <p class="text-danger mx-2 py-2">$660</p>
              <div class="stars d-flex py-3 justify-content-end">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <p class="text-en-gras py-3">(55)</p>
          </div>

        </div>
      </div>
      <div class="col-md-3 col-12 col-sm-6 col-lg-3">
        <div class="card border-0" style=" background-color: #f2f2f2;height: 250px;">
          <img src="assets/ak-900-01-500x500-1.png" class="card-img-top py-3" alt="Image 1">
          <button class="bg-dark text-white mt-5 py-1  add2">Add To Cart</button>
          <div class="icon-heart-eye py-5 ">
             <a href=""><i class="bi bi-eye"></i></a>

          </div>
        </div>
        <div class="card-body">
          <h6 class="card-title">Quilted Satin Jacket</h6>
          <div class="d-flex">
            <p class="text-danger mx-2 py-2">$660</p>
              <div class="stars  d-flex py-3 justify-content-end">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <p class="text-en-gras py-3">(55)</p>
          </div>

        </div>
      </div>
      <div class=" col-6 mx-auto ">
        <button class="btn btn-lg btn-danger btn-button btnview" type="button">View All Products</button>
      </div>
    </div>
  </div>



  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  @include('partial.footer')
</body>
</body>
</html>
