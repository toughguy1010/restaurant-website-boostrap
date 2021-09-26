<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foods</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
     <!--Navbar Start-->
    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-md-8">
                <img src="img/logo.png" alt="">
            </div>
            <div class="col-md-4">
                <ul class="mt-4 nav justify-content-center  fw-bold fs-4  ">
                    <li class="nav-item ">
                        <a class="nav-link menu-link nav-menu" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link nav-menu" href="categories.php">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link nav-menu" href="food.php">Foods</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link nav-menu" href="order.php">Order</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--Navbar End-->

    <!--FoodSearch Start-->
    <div class="container-fluid food-search">
        <div class="row ">
            <div class="col-md-6 mx-auto ">
                <div class="input-group ">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary bg-danger link-light" type="button" id="button-addon2">Search</button>
                  </div>
            </div>
        </div>
    </div>
    <!--FoodSearch End-->

   <!--FoodMenu Start-->
   <section class="food-menu">
    <div class="container">
        <h3 class="text-center py-5  fw-bold">Food Menu</h3>
        <div class="row">
            <div class="col-6">
                <div class="food-menu-box">
                    <div class="food-menu-img ">
                        <img src="img/menu-momo.jpg" alt="Momo" class="img menu-left">
                    </div>
                    <div class="food-menu-desc">
                        <h4>Dumplings Specials</h4>
                        <p>$5.00</p>
                        <p>Chicken Dumpling with herbs from Mountains</p>
                    </div>
                    <br>
                     <a href="food.php" class="btn bg-danger link-light ms-5">Order Now</a>
                </div>
            </div>
            <div class="col-6">
                <div class="food-menu-box">
                    <div class="food-menu-img ">
                        <img src="img/menu-burger.jpg" alt="Burger" class="img menu-left">
                    </div>
                    <div class="food-menu-desc">
                        <h4>Best Burger</h4>
                        <p>$4.00</p>
                        <p>Burger with Ham, Pineapple and lots of Cheese.</p>
                    </div>
                    <br>
                     <a href="food.php" class="btn bg-danger link-light ms-5">Order Now</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="food-menu-box">
                    <div class="food-menu-img ">
                        <img src="img/menu-pizza.jpg" alt="Pizza" class="img menu-left">
                    </div>
                    <div class="food-menu-desc">
                        <h4 >Somoky BBQ Pizza</h4>
                        <p>$6.00</p>
                        <p>Best Firewood Pizza in Town</p>
                    </div>
                    <br>
                     <a href="food.php" class="btn bg-danger link-light ms-5">Order Now</a>
                </div>
            </div>
            <div class="col-6">
                <div class="food-menu-box">
                    <div class="food-menu-img ">
                        <img src="img/menu-momo.jpg" alt="Momo" class="img menu-left">
                    </div>
                    <div class="food-menu-desc">
                        <h4>Sadeko Momo</h4>
                        <p>$6.000</p>
                        <p>Best Spicy Momo for winter</p>
                    </div>
                    <br>
                     <a href="food.php" class="btn bg-danger link-light ms-5">Order Now</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="food-menu-box">
                    <div class="food-menu-img ">
                        <img src="img/menu-pizza.jpg" alt="Pizza" class="img menu-left">
                    </div>
                    <div class="food-menu-desc">
                        <h4>Mixed Pizza</h4>
                        <p>$10.000</p>
                        <p>Pizza with chicken, Ham, Buff, Mushroom, and Vegetable.</p>
                    </div>
                    <br>
                     <a href="food.php" class="btn bg-danger link-light ms-5">Order Now</a>
                </div>
            </div>
            <div class="col-6"></div>
        </div>
     </div>
    <h4 class="text-center link-danger mt-4 ">See all foods<h4>
</section>
<!--FoodMenu End-->


     <!--Social Start-->
     <div class="container social  ">
        <ul class="social">
            <li>
                <a href="#">    
                    <i class="fab fa-facebook"></i>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="">
                   <i class="fab fa-twitter"></i>
                </a>
            </li>
        </ul>
     </div>

    <!--Social End-->

    <!--Footer Start-->
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <p class=" fw-bold text-center ">All right reserved. Design by <a href="">TLU</a></p>
            </div>
        </div>
    </div>
    <!--Footer End-->

    <!--JS-->
    <script src="js/bootstrap.min.js"></script>
    <!--JS-->
</body>
</html>