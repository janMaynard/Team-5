<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gadget Store: Desktop Computer</title>
        <link rel="stylesheet" type="text/css" href="<?=base_url("/resources/Css/CatStoreStyle.css")?>">
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
<!---------------------------------------------------------Store--------------------------------------------------------->
    <div class="box"></div>
    <div class="search">
        <input type="text" class="search-box" placeholder="Search">
        <button class="search-btn">Search</button>
    </div>
    <div class="cat">
        <div class="cat-box">
            <p>Categories</p>
            <a href="<?=base_url("/pages/mobile")?>"><button class="btn" id="phone">Mobile Phone</button> <br> <br></a>
            <a href="<?=base_url("/pages/desktop")?>"><button class="btn" id="comp">Desktop Computer</button> <br> <br></a>
            <a href="<?=base_url("/pages/laptop")?>"><button class="btn" id="laptop">Laptop</button> <br> <br></a>
            <a href="<?=base_url("/pages/camera")?>"><button class="btn" id="cam">Camera</button> <br> <br></a>
            <a href="<?=base_url("/pages/router")?>"><button class="btn" id="router">Router</button> <br> <br></a>
            <a href="<?=base_url("/pages/printer")?>"><button class="btn" id="printer">Printer</button> <br> <br></a>
            <a href="<?=base_url("/pages/accessories")?>"><button class="btn" id="accessories">Accessories</button></a>
        </div>
    </div>
    <!-------------------------------------------------------Items--------------------------------------------------------->

    <div class="page box2">
            <div class="item">
                <a href="Acer Nitro 5.html"><img src="<?php echo base_url("/resources/GadgetPics/Desktop/EasyBuild AMD Kaveri A8-7680.jpg");?>"></a>
                <div class="caption">
                    EasyBuild AMD Kaveri A8-7680<br>
                    ₱38,995
                </div>
            </div>
            <div class="item">
                <a href="Canon Pixma G1010.html"><img src="<?php echo base_url("/resources/GadgetPics/Desktop/EasyBuild Intel Core i3-9100f.jpg");?>"></a>
                <div class="caption">
                    EasyBuild Intel Core i3-9100f<br>
                    ₱52,175
                </div>
            </div>
            <div class="item">
                <a href="Apple iPhone 13.html"><img src="<?php echo base_url("/resources/GadgetPics/Desktop/EasyBuild Ryzen 3 Pro 4350G.jpg");?>"></a>
                <div class="caption">
                    EasyBuild Ryzen 3 Pro 4350G<br>
                    ₱50,990
                </div>
            </div>
            <div class="item">
                <a href="Logitech Z120.html"><img src="<?php echo base_url("/resources/GadgetPics/Desktop/easybuild ryzen 5 3500.jpg");?>"></a>
                <div class="caption">
                    Easybuild ryzen 5 3500<br>
                    ₱43,259
                </div>
            </div>
            <div class="item">
                <a href="Logitech Z120.html"><img src="<?php echo base_url("/resources/GadgetPics/Desktop/Acer all-in-one computer.jpg");?>"></a>
                <div class="caption">
                    Acer all-in-one computer<br>
                    ₱43,259
                </div>
            </div>
        </div>

    </body>
</html>
