<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- navbar start  -->
    <div class="container">
        <div class="row">
            <!-- logo shop -->
            <div class="col-md-6">
                <img src="\foodandorderbybootstrap\img\icon-shop.png" alt="logo shop" class="img-fluid pad-radi">
            </div>
            <!-- logo shop end -->
            <!-- navbar begin -->
            <div class="col-md-6">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link text-pink" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-pink" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-pink" href="#food">Foods</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-pink" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- navbar end -->
        </div>
    </div>
    <!-- navbar end -->

    <!-- container order begin -->
    <div class="container-fluid po-rel pad-none">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="\foodandorderbybootstrap\img\slider-order.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <div class="container po-ab">
            <div class="row">
                <h1>Fill this form to confirm your order.</h1>
            </div>

            <div class="row ">

                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4 ">
                            <p class="po-rel">Selected Food</p>
                            <img src="\foodandorderbybootstrap\img\menu-pizza.jpg" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Food Title</h5>
                                <p class="card-text">$2.3</p>
                                <div class="form-group">
                                    <label for="sel1">Quantity</label>
                                    <select class="form-control" id="sel1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- address -->
            <div class="row">
                <form class="row g-3">
                    <div class="col-md-12">
                        <p class="po-rel dow">Delivery Details</p>
                        <label for="" class="form-label">Full Name</label>
                        <input type="text" class="form-control" placeholder="E.g Vijay Thapa">
                    </div>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="E.g. 9843xxxxx">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Email</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="E.g hi@vijaythapa.com">
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Address</label>
                        <input type="text" class="form-control" placeholder="E.g. Street, City, Country                                                       " id="inputCity">
                    </div>
                
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary font-btn">Confirm Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- container order end -->

    <!-- tags,footer start -->
    <div class="container " id="contact">
        <div class="text-align mar-top-26">
            <a href=""><i class="bi bi-facebook tag-icon"></i></a>
            <a href=""><i class="bi bi-instagram tag-icon"></i></i></a>
            <a href=""><i class="bi bi-twitter tag-icon"></i></i></a>
        </div>
        <div class="row text-align tag">
            <p>
                All right reserved. Design By <a href="#" class="text-pink">Ngoc Anh Nguyen</a>
            </p>
        </div>
    </div>

    <!-- tags,footer end -->

    <!-- order section begin -->
    <div class="container-fluid po-fix pad-none order-section">
        <!-- header -->
        <div class="container">
            <div class="row">
                <!-- logo shop -->
                <div class="col-md-6">
                    <img src="img/icon-shop.png" alt="logo shop" class="img-fluid pad-radi">
                </div>
                <!-- logo shop end -->
                <!-- navbar begin -->
                <div class="col-md-6">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link text-pink" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-pink" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-pink" href="#food">Foods</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-pink" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- navbar end -->
            </div>
        </div>
        <!-- header end -->
        <!-- section main contact begin -->
        <div class="container-fluid pad-none">
            <div class="row">
                <img src="" alt="">
            </div>
        </div>
        <!-- section amin contact end -->
        <div class="container ">
            <div class="text-align mar-top-26">
                <a href=""><i class="bi bi-facebook tag-icon"></i></a>
                <a href=""><i class="bi bi-instagram tag-icon"></i></i></a>
                <a href=""><i class="bi bi-twitter tag-icon"></i></i></a>
            </div>
            <div class="row text-align tag">
                <p>
                    All right reserved. Design By <a href="#" class="text-pink">Ngoc Anh Nguyen</a>
                </p>
            </div>
        </div>
    </div>
    <!-- order section end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>