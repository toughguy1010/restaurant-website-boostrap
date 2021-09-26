<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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


    <!--User start-->
    <div class="container bg-light border-top border-3 px-5 pb-5">
        <div class="row">
            <div class="col mb-5">
                <h1 class="mt-5 ms-5">Manage User</h1>
            </div>
        </div>
        <button type="button" class="btn btn-primary btn-sm ms-5 mb-5 ">Add New User</button>

        <table class="table ms-5">
            <thead>
                <tr>
                    <th>S.N.</th>
                    <th>FullName</th>
                    <th>UserName</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1.</th>
                    <th>Arsenio Leach</th>
                    <th>toduwaxobi</th>
                    <th>
                        <button type="button" class="btn btn-primary btn-sm  ">Change Password</button>
                        <button type="button" class="btn btn-success btn-sm">Update Admin</button>
                        <button type="button" class="btn btn-danger btn-sm ">Delete Admin</button>
                    </th>
                </tr>
                <tr>
                    <th>2.</th>
                    <th>Sasha Mendez</th>
                    <th>goxemyde</th>
                    <th>
                        <button type="button" class="btn btn-primary btn-sm  ">Change Password</button>
                        <button type="button" class="btn btn-success btn-sm">Update Admin</button>
                        <button type="button" class="btn btn-danger btn-sm ">Delete Admin</button>
                    </th>
                </tr>
                <tr>
                    <th>3.</th>
                    <th>Vijay Thapa</th>
                    <th>vijaythapa</th>
                    <th>
                        <button type="button" class="btn btn-primary btn-sm  ">Change Password</button>
                        <button type="button" class="btn btn-success btn-sm">Update Admin</button>
                        <button type="button" class="btn btn-danger btn-sm ">Delete Admin</button>
                    </th>
                </tr>
                <tr>
                    <th>4.</th>
                    <th>Adminstrator</th>
                    <th>admin</th>
                    <th>
                        <button type="button" class="btn btn-primary btn-sm  ">Change Password</button>
                        <button type="button" class="btn btn-success btn-sm">Update Admin</button>
                        <button type="button" class="btn btn-danger btn-sm ">Delete Admin</button>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>

    <!--User end-->

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