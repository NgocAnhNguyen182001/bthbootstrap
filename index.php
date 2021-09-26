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
    <!-- navbar end -->

    <!-- slider and search start  -->
    <div class="container-fluid pad-fluid">
        <div class="row po-rel">
            <!--  slider -->
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/slider.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>

            <!-- slider end -->
            <!-- search button -->
            <div class="search-btn po-ab">
                <input type="text" placeholder="Search for Foods" class="width-40 bo-ra-btn pad-8">
                <input type="submit" value="Search" class="bo-ra-btn font-btn pad-8">
            </div>
        </div>
    </div>
    </div>

    <!-- slider and search end -->

    <!-- categories start -->
    <div id="about" class="container">
        <div class="row text-align mar-top-60">
            <h1 class="explore-food head-text">Explore Food</h1>
        </div>
        <div class="row mar-top-40">
            <div class="col-md-4">
                <div class="card bg-dark text-white po-rel bo-none">
                    <img src="img/pizza.jpg" class="card-img bor-ra-menu-se" alt="...">
                    <h5 class="card-title po-ab">Pizza</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark text-white po-rel bo-none">
                    <img src="img/burger.jpg" class="card-img bor-ra-menu-se" alt="...">
                    <h5 class="card-title po-ab">Burger</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark text-white po-rel bo-none">
                    <img src="img/momo.jpg" class="card-img bor-ra-menu-se" alt="...">
                    <h5 class="card-title po-ab">Momo</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- categories end -->

    <!-- food menu start -->
    <div id="food" class="container-fluid bg-foodmenu">
        <div class="row text-align mar-top-60 pad-top-40">
            <h1 class="explore-food head-text">Food Menu</h1>
        </div>
        <div class="container mar-top-40">
            <div class="row ma-ce">
                <div class="col-md-6 bg-white wid-col bor-ra-menu-se ">
                    <div class="col-md-4 fl-le">
                        <img src="img/menu-pizza.jpg" class="img-fluid rounded-start pad-img bor-ra-menuimg" alt="...">
                    </div>
                    <div class="col-md-8 fl-le">
                        <div class="card-body pad-none">
                            <h5 class="card-title mar-top-26">Food Title</h5>
                            <p class="card-text fo-price">$2.3</p>
                            <p class="card-text food-detail">Made with Italian sauce, chicken and organice vegettable.
                            </p>
                            <input type="button" class="font-btn bo-ra-btn mar-bot-20" value="Order Now">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 bg-white wid-col bor-ra-menu-se">
                    <div class="col-md-4 fl-le">
                        <img src="img/menu-burger.jpg" class="img-fluid rounded-start pad-img bor-ra-menuimg" alt="...">
                    </div>
                    <div class="col-md-8 fl-le">
                        <div class="card-body pad-none">
                            <h5 class="card-title mar-top-26">Smoky Burger</h5>
                            <p class="card-text fo-price">$2.3</p>
                            <p class="card-text food-detail">Made with Italian sauce, chicken and organice vegettable.
                            </p>
                            <input type="button" class="font-btn bo-ra-btn mar-bot-20" value="Order Now">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ma-ce">
                <div class="col-md-6 bg-white wid-col bor-ra-menu-se">
                    <div class="col-md-4 fl-le">
                        <img src="img/menu-burger.jpg" class="img-fluid rounded-start pad-img bor-ra-menuimg" alt="...">
                    </div>
                    <div class="col-md-8 fl-le">
                        <div class="card-body pad-none">
                            <h5 class="card-title mar-top-26">Nice Burger</h5>
                            <p class="card-text fo-price">$2.3</p>
                            <p class="card-text food-detail">Made with Italian sauce, chicken and organice vegettable.
                            </p>
                            <input type="button" class="font-btn bo-ra-btn mar-bot-20" value="Order Now">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 bg-white wid-col bor-ra-menu-se">
                    <div class="col-md-4 fl-le">
                        <img src="img/menu-pizza.jpg" class="img-fluid rounded-start pad-img bor-ra-menuimg" alt="...">
                    </div>
                    <div class="col-md-8 fl-le">
                        <div class="card-body pad-none">
                            <h5 class="card-title mar-top-26">Food Title</h5>
                            <p class="card-text fo-price">$2.3</p>
                            <p class="card-text food-detail">Made with Italian sauce, chicken and organice vegettable.
                            </p>
                            <input type="button" class="font-btn bo-ra-btn mar-bot-20" value="Order Now">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ma-ce">
                <div class="col-md-6 bg-white wid-col bor-ra-menu-se">
                    <div class="col-md-4 fl-le">
                        <img src="img/menu-pizza.jpg" class="img-fluid rounded-start pad-img bor-ra-menuimg" alt="...">
                    </div>
                    <div class="col-md-8 fl-le">
                        <div class="card-body pad-none">
                            <h5 class="card-title mar-top-26">Food Title</h5>
                            <p class="card-text fo-price">$2.3</p>
                            <p class="card-text food-detail">Made with Italian sauce, chicken and organice vegettable.
                            </p>
                            <input type="button" class="font-btn bo-ra-btn mar-bot-20" value="Order Now">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 bg-white wid-col bor-ra-menu-se">
                    <div class="col-md-4 fl-le">
                        <img src="img/menu-momo.jpg" class="img-fluid rounded-start pad-img bor-ra-menuimg" alt="...">
                    </div>
                    <div class="col-md-8 fl-le">
                        <div class="card-body pad-none">
                            <h5 class="card-title mar-top-26">Chicken Steam Momo</h5>
                            <p class="card-text fo-price">$2.3</p>
                            <p class="card-text food-detail">Made with Italian sauce, chicken and organice vegettable.
                            </p>
                            <input type="button" class="font-btn bo-ra-btn mar-bot-20" value="Order Now">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-align ">
                <h6 class="explore-food head-text  sub-menu">See All Foods</h6>
            </div>
        </div>
    </div>


    <!-- food menu end -->

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