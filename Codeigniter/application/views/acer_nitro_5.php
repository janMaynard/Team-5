<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Acer Nitro 5</title>
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
        <form action="<?=base_url("/pages/payment_details")?>" method="post"></form>
        <div class="item-container">
            <img src="<?php echo base_url("/resources/GadgetPics/Acer Nitro 5.jpg");?>">
            <div class="specs">
                <h3 value="Acer Nitro 5" name="item">Acer Nitro 5</h3>
                <h5 value="38,995" name="price">₱38,995</h5>
                AMD Ryzen 5 4600H 6 Core 3.0 GHz upto 4.0 GHz<br>
                8 GB RAM 3200mhz<br>
                256 GB NVMe M.2 SSD<br>
                15.6" IPS LCD Display<br>
                NVIDIA GeForce GTX 1650<br>
                Intel® Wireless Wi-Fi 6 AX200<br>
                Bluetooth 5.0<br>
                57.5 Wh 4-cell Lithium Ion (Li-Ion) Battery<br>
                Color: Black
            </div>
        </div>
    </div>
    <div class="shop-btn">
        <a href="<?=base_url("/pages/payment")?>"><button class="sbtn" name="buy_acer">Buy Now</button></a>
        <a href="#"><button class="sbtn">Add To Cart</button></a>
    </div>
    <div class="search">
        <input type="text" class="search-box" placeholder="Search">
        <button class="search-btn">Search</button>
    </div>

    </body>
</html>
