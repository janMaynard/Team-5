<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Canon EOS 3000D</title>
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
            <img src="<?php echo base_url("/resources/GadgetPics/Canon Eos 3000D.jpg");?>">
            <div class="specs">
                <h3>Canon Eos 3000D</h3>
                <h5>???20,269</h5><br>
                18-megapixel APS-C-size CMOS sensor<br>
                9-point AF with 1 centre cross-type AF point<br>
                Standard ISO 100 - 6400 (expandable to 12800)<br>
                Canon EF lenses (including EF-S lenses) compatible.<br>
                CMOS sensor<br>
                2.7 in, LCD Display<br>
                1/4000 sec Max Shutter Speed<br>
                1080p HD Video Recording

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
