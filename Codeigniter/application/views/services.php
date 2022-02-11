<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=base_url("/resources/Css/ShopNowStyle.css")?>">
    <link rel="shortcut icon" type="image/jpg" href=<?=base_url("/resources/ToLootPics/cube.png")?>>
    <title>Shop Category</title>
</head>
<body>
    <!---------------------------------------------------------First-Page------------------------------------------------------>
    <section class="header">
        <div class="bg"></div>
        <nav>
            <a href="<?=base_url("/pages/site")?>"><img src="<?php echo base_url("/resources/ToLootPics/cube.png");?>" class="logo"></a>
            <img src="<?php echo base_url("/resources/ToLootPics/LoginLogo.png");?>" class="login-logo">
            <div class="nav-links" id="navlinks">
                <ul>
                    <li><a href="<?=base_url("/pages/site")?>">Home</a></li>
                    <li><a href="<?=base_url("/pages/services")?>">Services</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
    </section>
    <!---------------------------------------------------------Category------------------------------------------------------->
    <div class="shops">
        <a href="#" class="shop1">Go To Shop &nbsp&nbsp&nbsp ></a>
        <a href="<?=base_url("/pages/gadgetstore")?>" class="shop2">Go To Shop &nbsp&nbsp&nbsp ></a>
        <a href="#" class="shop3">Go To Shop &nbsp&nbsp&nbsp ></a>
    </div>
    <section class="header1">
        <section class="about">
            <div class="container">
                <div class="second-page-text">
                    <h1>Category Selection</h1>
                    <p>Any Product You like</p>
                </div>
                <div class="cat1">
                    <div class="cat2">
                    <img src="<?php echo base_url();?>/resources/ToLootPics/Food.png" >
                        <h3>&nbspFoods</h3>
                    </div>
                </div>
                <div class="cat1">
                    <div class="cat2">
                    <img src="<?php echo base_url();?>/resources/ToLootPics/Gadget.png" >
                        <h3>&nbspGadgets</h3>
                    </div>
                </div>
                <div class="cat1">
                    <div class="cat2">
                    <img src="<?php echo base_url();?>/resources/ToLootPics/makeups.png" >
                        <h3>&nbspMakeups</h3>
                    </div>
                </div>
            </div>

     </section>

    <!------------------------------------------------------Login-&-Signup------------------------------------------------------->
    <!--Login-->
    <input type="checkbox" id="show">
    <label for="show" class="show-btn">LOGIN</label>
    <div class="login-container">
        <label for="show" class="close-btn" title="close">x</label>
        <h1>Welcome</h1>
        <form action="#">
            <label>Email or Phone</label>
            <input type="text" required>
            <label>Password</label>
            <input type="password" required>
            <a href="#">Forgot Password?</a>
            <button>Login</button>
            <div class="link">Not a member? <a href="<?=base_url("/pages/signup")?>">Sing up here</a></div>
        </form>
    </div> 
</body>
</html>