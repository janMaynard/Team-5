<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Logitech Z120</title>
        <link rel="stylesheet" type="text/css" href="<?=base_url("/resources/Css/ItemDetailsStyle.css")?>">
        <link rel="shortcut icon" type="image/jpg" href="<?php echo base_url("/resources/ToLootPics/cube.png");?>">
    </head>
    <body>
<!-------------------------------------------------------First-Page------------------------------------------------------->
<section class="header">
        <a href="<?=base_url("/pages/site")?>"><img src="<?php echo base_url("/resources/ToLootPics/cube.png");?>" class="logo" id="fix"></a>
        <a href="#"><img src="<?php echo base_url("/resources/ToLootPics/cart.png");?>" class="cart" id="fix"></a>
        <nav>
            <img src="<?php echo base_url("/resources/ToLootPics/LoginLogo.png");?>" class="login-logo" id="fix">
            <div class="nav_links" id="fix">
                <ul>
                    <li><a href="<?=base_url("/pages/site")?>" >Home</a></li>
                    <li><a href="<?=base_url("/pages/services")?>">Services</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
    </section>
    <!------------------------------------------------------Login-&-Signup------------------------------------------------------->
    <!--Login-->
    <input type="checkbox" id="show">
    <label for="show" class="show-btn" id="fix">LOGIN</label>
    <div class="login-container">
        <label for="show" class="close-btn" title="close">x</label>
        <h1>Welcome</h1>
        <form action="#">
            <label>Email or Phone</label>
            <input type="text" required>
            <label>Password</label>
            <input type="password" required>
            <a href="#">Forgot Password?</a>
            <button class="log">Login</button>
            <div class="link">Not a member? <a href="SignUp.html">Signup here</a></div>
        </form>
    </div>
    <a href="<?=base_url("/pages/gadgetstore")?>" class="Gadget-logo">Gadget World</a>
<!---------------------------------------------------------item-details--------------------------------------------------------->
<div class="box">
        <div class="item-container">
            <img src="<?php echo base_url("/resources/GadgetPics/Logitech Z120.jpg");?>">
            <div class="specs">
                <h3>Logitech Z120</h3>
                <h5>???459</h5><br>
                Color: White<br>
                Compact USB powered speakers<br>
                3.5 mm input<br>
                Integrated cable management system<br>
                Convenient controls: Power and volume are at your fingertips<br>
                Easy connections: Works with PC, Mac and iPod/MP3 players
            </div>
        </div>
        
    </div>
    <div class="shop-btn">
        <a href="ToLoot.html"><button class="sbtn">Buy Now</button></a>
        <a href="#"><button class="sbtn">Add To Cart</button></a>
    </div>
    <div class="search">
        <input type="text" class="search-box" placeholder="Search">
        <button class="search-btn">Search</button>
    </div>

    </body>
</html>
