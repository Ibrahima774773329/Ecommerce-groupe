
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/category-dropdown.css">
    <link rel="stylesheet" href="styles/scss/category-dropdown.scss">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C600%2C700"/>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
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
          <div class="category-phone col-sm-4">
            <a href="">
              <ion-icon class="icone1" name="phone-portrait-outline"></ion-icon>
            </a>
            <p class="phones1 text-decoration-none">Phone</p>
          </div>
          <div class="category-phone col-sm-4">
            <a href="">
              <ion-icon class="icone1" name="desktop-outline"></ion-icon>
            </a>
            <p class="phones2 text-decoration-none">Computers</p>
          </div>
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

    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
    <script src="script.js"></script>
    </body>
    </html>

