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
    <!-- header begin -->
    <div class="container-fluid bo-he">
        <div class="row ">
            <ul class="nav justify-content-center ">
                <li class="nav-item ">
                    <a class="nav-link text-pink" href="#">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-pink" href="#">Admin</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-pink" href="#">Category</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-pink" href="#">Food</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-pink" href="#">Order</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-pink" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- header end -->
    <!-- content begin -->
    <div class="container-fluid bg-content">
        <div class="container">
            <div class="row pa-top-40">
                <div class="h1">Manage Category</div>
            </div>
            <div class="submit-btn mar-top-60">
                <input type="submit" value="Add Category" class="btn">
            </div>
            <div class="row mar-top-30">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">S.N.</th>
                            <th scope="col">Tiltle</th>
                            <th scope="col">img</th>
                            <th scope="col">Featured</th>
                            <th scope="col">Active</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr bo-none>
                            <th scope="row">1.</th>
                            <td>Pizza</td>
                            <td><img src="\foodandorderbybootstrap\img\pizza.jpg" alt="" class="img-w "></td>
                            <td>Yes</td>
                            <td>yes</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <ul>
                                        <li> <button type="button" class="btn btn-primary bg-mid-btn ">Update
                                                Category</button></li>
                                        <li> <button type="button" class="btn btn-primary bg-footer ">Delete
                                                Category</button></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr bo-none>
                            <th scope="row">2.</th>
                            <td>Burger</td>
                            <td><img src="\foodandorderbybootstrap\img\burger.jpg" alt="" class="img-w"></td>
                            <td>Yes</td>
                            <td>yes</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <ul>
                                        <li> <button type="button" class="btn btn-primary bg-mid-btn ">Update
                                                Category</button></li>
                                        <li> <button type="button" class="btn btn-primary bg-footer ">Delete
                                                Category</button></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr bo-none>
                            <th scope="row">3.</th>
                            <td>Momo</td>
                            <td><img src="\foodandorderbybootstrap\img\momo.jpg" alt="" class="img-w"></td>
                            <td>Yes</td>
                            <td>yes</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <ul>
                                        <li> <button type="button" class="btn btn-primary bg-mid-btn ">Update
                                                Category</button></li>
                                        <li> <button type="button" class="btn btn-primary bg-footer ">Delete
                                                Category</button></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr bo-none>
                            <th scope="row">4.</th>
                            <td>Quia est ipsum id id</td>
                            <td><img src="\foodandorderbybootstrap\img\menu-pizza.jpg" alt="" class="img-w"></td>
                            <td>no</td>
                            <td>yes</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <ul>
                                        <li> <button type="button" class="btn btn-primary bg-mid-btn ">Update
                                                Category</button></li>
                                        <li> <button type="button" class="btn btn-primary bg-footer ">Delete
                                                Category</button></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- content end -->
    <!-- footer begin -->
    <div class="container-fluid bg-footer">
        <div class="row text-al">
            <p>
                2020 All right reserved. Food House. Design By <a href="#" class="">Ngoc Anh Nguyen</a>
            </p>
        </div>
    </div>
    <!-- footer end -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>