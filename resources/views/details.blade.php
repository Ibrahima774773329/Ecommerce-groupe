<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A700"/>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container-2{
    position: relative;
    top: 250px;
    display: flex;

    align-items: center;
    gap: 50px;
    width: 100%;
    left:80px;
}
.card-img{
    width: 150px;
    height: 135px;
    background-color: #F5F5F5;
}

.card-img2{
    position: relative;
    width: 500px;
    height: 500px;
   top: 90px;
   left: 10px;

}
.img-2-1{
    background-color: #F5F5F5;
    width: 500px;
    height: 600px;
}

.card-img1{
   display: grid;
   grid-gap: 500px;
   grid-template-columns: 330px ;
   gap: 20px;
   width: 130px;
   height: 600px;

}
.bloc3{
    position: relative;
    left: 0px;
    top: 160px;
    font-weight: 900px;


}
.havic{
    position: relative;
    bottom: 140px;


}
.icone-start{
    position: relative;
    bottom: 140px;

    font-size: 20px;

}
.start1{
    color: #FFAD33;
}

.prix{
    position: relative;
    bottom: 140px;



}
.colors{
    position: relative;
    display: flex;
    bottom: 150px;

    gap: 20px;

}

.img-color{
    width: 50px;
    height: 30px;
    position: relative;
    top: 20px;

}

.size{
    position: relative;
    display: flex;
    bottom: 150px;

    gap: 20px;

}
.taille{
    border: 1px solid black;
    width: 40px;
    height: 40px;
    border-radius: 5px;
    padding: 5px;
    cursor: pointer;

}

.taille:hover{
  background-color: red;

}.groubtn{
    position: relative;
    display: flex;
    bottom: 150px;
    gap: 20px;
}
.btn3{
    width: 140px;
    height: 40px;
    border-radius: 5px ;
    cursor: pointer;
    border: 1px solid #00000080;
}
.btn4{
    position: relative;
    right: 120px;
    width: 140px;
    height: 40px;
    border: none;
    border-radius: 5px ;
    cursor: pointer;
    color: black;
    background-color: red;
}
.btn4:hover{
    background-color: red;
    border:  1px solid red;
    color: #F5F5F5;
  }
.plus{
    position: relative;
    bottom: 0px;
    right: 60px;
    background-color: red;
    width: 40px;
    height: 40px;
    color: #F5F5F5;
    border-radius: 5px ;
    border:  1px solid red;
    cursor: pointer;
}

.moin{
    position: relative;
    bottom: 0px;
    right: 220px;
    border: 1px solid #00000080;
    width: 40px;
    height: 40px;
    border-radius: 5px ;
    cursor: pointer;
}
 .heart-prix{
    position: relative;
    right: 130px;
    border: 1px solid #00000080;
    width: 40px;
    height: 40px;
    border-radius: 5px ;
    cursor: pointer;
 }
 .bloc-free{
    position: relative;
    bottom: 150px;
    border: 1px solid black;
    width: 350px;
    height: 250px;
 }
 .free{
    position: relative;
    left: 40px;
 }
 .deli{
    width: 30px;
    height: 30px;
    position: relative;
    bottom: 60px;
 }
    </style>
</head>
<body>
@include('partial.navbar')

    <!-- headersss -->
       <hr class="ligne">
    <div class="section-1">
        <span>Acount / Gaming / Having Hvg 92 Game pade</span>
    </div>
    <!-- sectioncart -->
    <div class="container-2 py-0 mb-0">
        <div class="card-img1">
            <img src="assets/image-57.png" class="card-img" alt="">
            <img src="assets/image-59.png"class="card-img" alt="">
            <img src="assets/image-59.png"class="card-img" alt="">
            <img src="assets/image-63.png" class="card-img"alt="">
        </div>
        <div class="img-2-1">
            <img src="assets/image-63.png"class="card-img2" alt="">
        </div>
        <div class="bloc3">
          <h2 class="havic">Havic HV G-92 Gamepad</h2>
            <div class="icone-start">
             <s><ion-icon name="star-outline" class="start1"></ion-icon></s>
             <s><ion-icon name="star-outline" class="start1"></ion-icon></s>
             <s><ion-icon name="star-outline" class="start1"></ion-icon></s>
             <s><ion-icon name="star-outline" class="start1"></ion-icon></s>
             <s><ion-icon name="star-outline"></ion-icon></s>
              <span>(150 Reviews)In Stock</span>
            </div>
            <div class="prix">
              <h2>$192.00</h2>
              <p>PlayStation 5 Controller Skin High quality vinyl with air channel adhesive for easy bubble free
               install & mess free removal Pressure sensitive.</p>
               <hr>
           </div>
           <div class="colors">
            <h2>Colours:</h2>
           <a href=""> <img src="assets/colour-chnage-k5Y.png" class="img-color" alt=""></a>
        </div>
        <div class="size mt-3">
            <h2>Size: </h2>
            <p class="taille">XS</p>
            <p class="taille">S</p>
            <p class="taille">M</p>
            <p class="taille">L</p>
            <p class="taille">XL</p>
        </div>
        <div class="groubtn">
            <button class="btn3">2</button>
               <h1 class="plus">+</h1>
               <h1 class="moin">-</h1>
            <button class="btn4">Buy Now</button>
            <span><ion-icon name="heart-outline" class="heart-prix"></ion-icon></span>
        </div>
        <div class="bloc-free mt-4">
            <h4 class="free">Free Delivery</h4>
            <p class="free"><a href=""> Enter your postal code for Delivery Availability</a></p>
            <img src="assets/icon-delivery.png"  class="deli ">
             <hr>
              <h4 class="free">Return Delivery</h4>
            <p class="free">Return Delivery Free 30 Days Delivery Returns. <a href="">Details</a></p>
            <img src="assets/icon-return.png"class="deli" alt="">
        </div>
        </div>
    </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- @include('partial.footer') -->
</body>
</html>
