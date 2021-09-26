<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Order</title>
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
                    <a class="nav-link color" href="admin_home.php">Home</a>
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

    <!--Order Start-->
    <div class="container bg-light border-top border-3 px-5 pb-5">
        <div class="row">
            <div class="col mb-5">
                <h1 class="mt-5 ms-5">Menu Order</h1>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Food</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th>Order Date</th>
                    <th>Status</th>
                    <th>Customer Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <th>Mixed </br> Pizza</th>
                    <th>10.00</th>
                    <th>2</th>
                    <th>20.00</th>
                    <th>2020-11-30 <br> 04:07:17</th>
                    <th>Delivered</th>
                    <th>Jana Bush</th>
                    <th>+1(562) <br> 101-2028</th>
                    <th>tlu@.com</th>
                    <th>175 Tay Son</th>
                    <th class="bg-success">Update <br> Order</th>
                </tr>
                <tr>
                    <th>1</th>
                    <th>Mixed </br> Pizza</th>
                    <th>10.00</th>
                    <th>2</th>
                    <th>20.00</th>
                    <th>2020-11-30 <br> 04:07:17</th>
                    <th>Delivered</th>
                    <th>Jana Bush</th>
                    <th>+1(562) <br> 101-2028</th>
                    <th>tlu@.com</th>
                    <th>175 Tay Son</th>
                    <th class="bg-success">Update <br> Order</th>
                </tr>
                <tr>
                    <th>1</th>
                    <th>Mixed </br> Pizza</th>
                    <th>10.00</th>
                    <th>2</th>
                    <th>20.00</th>
                    <th>2020-11-30 <br> 04:07:17</th>
                    <th>Delivered</th>
                    <th>Jana Bush</th>
                    <th>+1(562) <br> 101-2028</th>
                    <th>tlu@.com</th>
                    <th>175 Tay Son</th>
                    <th class="bg-success">Update <br> Order</th>
                </tr>
            </tbody>
        </table>
        
    </div>
    <!--Order End-->


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