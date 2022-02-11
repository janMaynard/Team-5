<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gadget Store: Mobile Phone</title>
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
                <a href="Acer Nitro 5.html"><img src="<?php echo base_url("/resources/GadgetPics/Phone/Apple iPhone 13.png");?>"></a>
                <div class="caption">
                    Apple iPhone 13
                    ₱38,995
                </div>
            </div>
            <div class="item">
                <a href="Canon Pixma G1010.html"><img src="<?php echo base_url("/resources/GadgetPics/Phone/huawei-nova-9.png");?>"></a>
                <div class="caption">
                    huawei nova 9
                    ₱5,175
                </div>
            </div>
            <div class="item">
                <a href="Apple iPhone 13.html"><img src="<?php echo base_url("/resources/GadgetPics/Phone/xiaomi-poco-m3.jpg");?>"></a>
                <div class="caption">
                    xiaomi poco m3
                    ₱50,990
                </div>
            </div>
            <div class="item">
                <a href="Logitech Z120.html"><img src="<?php echo base_url("/resources/GadgetPics/Phone/INSTA360 ONE X2.jpg");?>"></a>
                <div class="caption">
                    INSTA360 ONE X2
                    ₱459
                </div>
            </div>
            <div class="item">
                <a href="Asus RT-AX55.html"><img src="<?php echo base_url("/resources/GadgetPics/Phone/iphone 13 mini.jpg");?>"></a>
                <div class="caption">
                    iphone 13 mini
                    ₱5,095
                </div>
            </div>
            <div class="item">
                <a href="Black Shark 4.html"><img src="<?php echo base_url("/resources/GadgetPics/Phone/Black Shark 4.jpg");?>"></a>
                <div class="caption">
                    Black Shark 4
                    ₱23,950 
                </div>
            </div>
            <div class="item">
                <a href="Canon Eos 3000D.html"><img src="<?php echo base_url("/resources/GadgetPics/Phone/iphone 13.jpg");?>"></a>
                <div class="caption">
                    iphone 13
                    ₱20,269
                </div>
            </div>
            <div class="item">
                <a href="Edifier X100.html"><img src="<?php echo base_url("/resources/GadgetPics/Phone/LG-Wing-5G.png");?>"></a>
                <div class="caption">
                    LG Wing 5G
                    ₱1,295
                </div>
            </div>
            <div class="item">
                <a href="Canon Pixma G2010.html"><img src="<?php echo base_url("/resources/GadgetPics/Phone/Motorola-moto-G31.jpg");?>"></a>
                <div class="caption">
                     Motorola moto G31
                     ₱20,269
                </div>
            </div>
            <div class="item">
                <a href="EasyBuild Intel Core i3-9100f.html"><img src="<?php echo base_url("/resources/GadgetPics/Phone/oneplus 9.png");?>"></a>
                <div class="caption">
                    oneplus 9
                    ₱5,095
                </div>
            </div>
            <div class="item">
                <a href="Canon Pixma G1010.html"><img src="<?php echo base_url("/resources/GadgetPics/Phone/xiaomi-poco-m3.jpg");?>"></a>
                <div class="caption">
                     xiaomi poco m3
                     ₱23,950 
                </div>
            </div>
            <div class="item">
                <a href="Apple iPhone 13.html"><img src="<?php echo base_url("/resources/GadgetPics/Phone/Samsung M32.jpg");?>"></a>
                <div class="caption">
                     Samsung M32
                     ₱20,269
                </div>
            </div>
            <div class="item">
                <a href="Epson EB-S41.html"><img src="<?php echo base_url("/resources/GadgetPics/Phone/Tecno_Spark_7.png");?>"></a>
                <div class="caption">
                    Tecno Spark 7
                    ₱23,950 
                </div>
            </div>
            <div class="item">
                <a href="Fantech GS202 Sonar.html"><img src="<?php echo base_url("/resources/GadgetPics/Phone/vivo y76 5g.jpg");?>"></a>
                <div class="caption">
                    vivo y76 5g
                    ₱5,095
                </div>
            </div>
            <div class="item">
                <a href="Fujifilm X-T2.html"><img src="<?php echo base_url("/resources/GadgetPics/Phone/xiaomi mi 11 lite.jpg");?>"></a>
                <div class="caption">
                     xiaomi mi 11 lite
                     ₱20,269
                </div>
            </div>
        </div>

    </body>
</html>
