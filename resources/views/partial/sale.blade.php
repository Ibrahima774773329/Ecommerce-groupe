<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C700"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>sale</title>
</head>
<body>

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
                    <button type="submit" form="" class="bg-dark text-white mt-5 py-3 btn-cart">Add To Cart</button>
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
       <a href="{{route('whislist')}}"> <button class="btn btn-lg btn-danger btn-button mx-5" type="button">View All Products</button></a>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
  </div>
</body>
</html>
