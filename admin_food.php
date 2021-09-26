<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Food</title>
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
    <!--Food Start-->
    <div class="container bg-light border-top border-3 px-5 pb-5">
        <div class="row">
            <div class="col mb-5">
                <h1 class="mt-5 ms-5">Manege Foods</h1>
            </div>
        </div>
        <button type="button" class="btn btn-primary btn-sm ms-5 mb-5 ">Add Food</button>
        <table class="table ms-5">
            <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Imge</th>
                    <th>Feature</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <th>Dumplings Special</th>
                    <th>$5.00</th>
                    <th><img src="img/menu-momo.jpg" alt="" class="mana-img"></th>
                    <th>Yes</th>
                    <th>Yes</th>
                    <th>
                        <button type="button" class="btn btn-success btn-sm mana-btn ">Update Category</button>
                        <button type="button" class="btn btn-danger btn-sm mana-btn ">Delete Category</button>
                    </th>
                </tr>
                <tr>
                    <th>2</th>
                    <th>Best Burger</th>
                    <th>$4.00</th>
                    <th><img src="img/menu-burger.jpg" alt="" class="mana-img"></th>
                    <th>Yes</th>
                    <th>Yes</th>
                    <th>
                        <button type="button" class="btn btn-success btn-sm mana-btn ">Update Category</button>
                        <button type="button" class="btn btn-danger btn-sm mana-btn ">Delete Category</button>
                    </th>
                </tr>

                <tr>
                    <th>3</th>
                    <th>Smoky BBQ Pizza</th>
                    <th>$6.00</th>
                    <th><img src="img/menu-pizza.jpg" alt="" class="mana-img"></th>
                    <th>No</th>
                    <th>Yes</th>
                    <th>
                        <button type="button" class="btn btn-success btn-sm mana-btn ">Update Category</button>
                        <button type="button" class="btn btn-danger btn-sm mana-btn ">Delete Category</button>
                    </th>
                </tr>

                <tr>
                    <th>4</th>
                    <th>Sadeko Momo</th>
                    <th>$6.00</th>
                    <th><img src="img/menu-momo.jpg" alt="" class="mana-img"></th>
                    <th>Yes</th>
                    <th>Yes</th>
                    <th>
                        <button type="button" class="btn btn-success btn-sm mana-btn ">Update Category</button>
                        <button type="button" class="btn btn-danger btn-sm mana-btn ">Delete Category</button>
                    </th>
                </tr>

                <tr>
                    <th>5</th>
                    <th>Mixed Pizza</th>
                    <th>$10.00</th>
                    <th><img src="img/menu-pizza.jpg" alt="" class="mana-img"></th>
                    <th>Yes</th>
                    <th>Yes</th>
                    <th>
                        <button type="button" class="btn btn-success btn-sm mana-btn ">Update Category</button>
                        <button type="button" class="btn btn-danger btn-sm mana-btn ">Delete Category</button>
                    </th>
                </tr>

                <tr>
                    <th>6</th>
                    <th>Sed ipsum in</th>
                    <th>$52.00</th>
                    <th><img src="" alt="Img not added" class="mana-img link-danger"></th>
                    <th>No</th>
                    <th>No</th>
                    <th>
                        <button type="button" class="btn btn-success btn-sm mana-btn ">Update Category</button>
                        <button type="button" class="btn btn-danger btn-sm mana-btn ">Delete Category</button>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>

    <!--Food End-->
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