<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <!--Navbar start-->
        <div class="container">
            <div class="row">
                <di class="col">
                    <ul class="nav justify-content-center mt-2 fw-bold color ">
                        <li class="nav-item">
                            <a class="nav-link color" href="">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="admin.php" class="nav-link color">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a href="admin_category.php" class="nav-link color">Category</a>
                        </li>
                        <li class="nav-item">
                            <a href="admin_food.php" class="nav-link color">Food</a>
                        </li>
                        <li class="nav-item">
                            <a href="admin_order.php" class="nav-link color">Order</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link color">Logout</a>
                        </li>
                    </ul>
                </di>
            </div>
        </div>
    <!--Navbar end-->
    
    <!--Dashboard start-->
        <div class="container bg-light border-top border-3 px-5 pb-5">
            <div class="row">
                <div class="col mb-5">
                    <h1 class="mt-5 ms-5">Dashboard</h1>
                </div>
            </div>
            <div class="row  justify-content-center">
                <div class="col-md-3 card bg-white mx-1 pt-1 text-center" style="width: 20%;">
                    <h2>4</h2>
                    <p>Category</p>
                </div>
                <div class="col-md-3 card bg-white mx-1 pt-1 text-center" style="width: 20%;">
                    <h2>6</h2>
                    <p>Foods</p>
                </div>
                <div class="col-md-3 card bg-white mx-1 pt-1 text-center" style="width: 20%;">
                    <h2>3</h2>
                    <p>Total Orders</p>
                </div>
                <div class="col-md-3 card bg-white mx-1 pt-1 text-center" style="width: 20%;">
                    <h2>$36.00</h2>
                    <p>Revenue Generated</p>
                </div>
            </div>
        </div>
    <!--Dashboard end-->
    <!--Footer-->
    <div class="container bg-danger p-3 link-light text-center">
        <p>2020 All right reserveed. Design by - <a href="#">CSE485</a></p>
    </div>
    <!--Footer-->
    <!--JS-->
    <script src="js/bootstrap.min.js"></script>
    <!--JS-->
</body>
</html>