<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style.css')}}"/>
    <title>contact</title>
    <style>
    .text-contact{
        font-size: 15px;
    }
    form input{
        margin-right: 10px;
    }
    span{
        position: relative;
        right: 20vh;
        top: 9px;
        margin-left:5px;
    }
    </style>
</head>
<body>
    @include('partial.navbar')
    <hr class="line ">
    <nav aria-label="breadcrumb" class="mx-5">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-secondary">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page" style="color:black;">Contact</li>
    </ol>
    </nav>

    <div class="container py-5 mt-5 ">
        <div class="row">
            <div class="col-lg-3 col-md-6 mx-5">
                    <div class="d-flex">
                        <img src="assets/icons-phone.png" alt="" width="15%">
                        <h5 class="mx-3">Call To Us</h5>
                    </div>
                    <p class="text-contact">We are available 24/7, 7 days a week.</p>
                    <p class="text-contact">Phone: +8801611112222</p>
                    <hr class="">
                    <div class="d-flex">
                        <img src="assets/icons-mail.png" alt="" width="15%">
                        <h5 class="mx-3">Wrire To Us</h5>
                    </div>
                    <p class="text-contact">Fill out our form and we will contact you within 24 hours.</p>
                    <p class="text-contact">Emails: customer@exclusive.com</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <form action="">
                    <div class="d-flex ">
                        <input type="text" placeholder="Your Name " style="  background-color: #f2f2f2;outline:none;" class="border-0 p-2 ">
                        <!-- <span style="color: #db4444;">*</span> -->
                        <input type="text" placeholder="Your Email" style="  background-color: #f2f2f2;outline:none;" class="border-0">
                        <!-- <span style="color: #db4444;">*</span> -->
                        <input type="phone" placeholder="Your Phone" style="  background-color: #f2f2f2;outline:none;" class="border-0">
                        <!-- <span style="color: #db4444; margin-left:10px;  line-height: 1.5;" >*</span> -->
                    </div>
                    <div class="py-5">
                        <textarea name="" id="" cols="80" rows="8" placeholder="Your Message" style="  background-color: #f2f2f2;outline:none;" class="border-0 p-2"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
@include('partial.footer')
</body>
</html>
