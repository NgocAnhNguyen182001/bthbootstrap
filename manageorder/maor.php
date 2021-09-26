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
                    <a class="nav-link text-pink" href="#">Food</a>
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
                <div class="h1">Manage Order</div>
            </div>

            <div class="row mar-top-30">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">S.N.</th>
                            <th scope="col">Food</th>
                            <th scope="col">Price</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Total</th>
                            <th scope="col">Order Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr bo-none>
                            <th scope="row">1.</th>
                            <td>Mixed Pizza</td>
                            <td>10.00</td>
                            <td>2</td>
                            <td>20.00</td>
                            <td>2020-11-30<br>
                                04:07:17
                            </td>
                            <td>
                                <p class=" text-pink"> Delivered</p>
                            </td>
                            <td>Jana Bush</td>
                            <td>+1 (562)<br>
                                101-2028
                            </td>
                            <td>tydujy@mailinator.com</td>
                            <td>Minima iure ducimius</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary bg-mid-btn">Update Food</button>
                                </div>
                            </td>
                        </tr>
                        <tr bo-none>
                            <th scope="row">2.</th>
                            <td>Best Burger</td>
                            <td>4.00</td>
                            <td>4</td>
                            <td>16.00</td>
                            <td>2020-11-30<br>
                                03:52:43
                            </td>
                            <td>
                                <p class=" text-pink"> Delivered</p>
                            </td>
                            <td>Kelly Dillard</td>
                            <td>+1 (908)<br>
                                914-3106

                            </td>
                            <td>fexekihor@mailinator.com</td>
                            <td>Incidunt ipsum ad d</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary bg-mid-btn">Update Food</button>
                                </div>
                            </td>
                        </tr>
                        <tr bo-none>
                            <th scope="row">3.</th>
                            <td>Sadeko Momo</td>
                            <td>6.00</td>
                            <td>3</td>
                            <td>18.00</td>
                            <td>2020-11-30<br>
                                03:49:48
                            </td>
                            <td>
                                <p class=" text-pink"> Cancelled</p>
                            </td>
                            <td>Bradley Farrell</td>
                            <td>+1 (576)<br>
                                504-4657
                            </td>
                            <td>zuhafiq@mailinator.com</td>
                            <td>Duis aliqua Qui for</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary bg-mid-btn">Update Food</button>
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