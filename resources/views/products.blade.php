
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
    bottom: 60px !important;
}
.add1 a{
text-decoration: none;
color: #fff;
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
    left: -220px;
    bottom: 150px;
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
    @foreach($products as $product)
      <div class="col-md-3 col-12 col-sm-6 col-lg-3">
        <div class="card w-100 border-0 " style=" background-color: #f2f2f2;height: 250px;">
          <img src="{{ asset('img') }}/{{ $product->photo }}" class="card-img-top w-50 mx-5 py-2 m-4 col-md-3 col-12 col-sm-6 col-lg-3" alt="Image 1">
             <button class="bg-dark text-white mt-5 py-1 add1  "> <a href="{{ route('add_to_cart', $product->id) }}">Add To Cart</button>
          <div class="icon-heart-eye ">
          <a href=""><i class="bi bi-archive"></i> </a>
            <h6 class="promo">-35%</h6>

           <a href=""><ion-icon name="trash-outline " class="supicone"></ion-icon></a>
          </div>
        </div>
        <div class="card-body">
          <h6 class="card-title">{{ $product->product_name }}</h6>
          <div class="">
              <p class="text-danger fw-bold py-2">${{ $product->price }}</p> <br>
              <!-- <p class="text-danger py-2">{{ $product->product_description }} </p> -->

           </div>
        </div>
      </div>
      @endforeach

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
