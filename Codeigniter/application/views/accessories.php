<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gadget Store: Accessories</title>
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
                <a href="Acer Nitro 5.html"><img src="<?php echo base_url("/resources/GadgetPics/Accessories/BENRO BPI T-600 EX.jpg");?>"></a>
                <div class="caption">
                BENRO BPI T-600 EX<br>
                    ₱38,995
                </div>
            </div>
            <div class="item">
                <a href="Canon Pixma G1010.html"><img src="<?php echo base_url("/resources/GadgetPics/Accessories/BOYA BY-MM1.jpg");?>"></a>
                <div class="caption">
                BOYA BY-MM1
                    ₱5,175
                </div>
            </div>
            <div class="item">
                <a href="Apple iPhone 13.html"><img src="<?php echo base_url("/resources/GadgetPics/Accessories/BOYA BY-VM01.jpg");?>"></a>
                <div class="caption">
                BOYA BY-VM01
                    ₱50,990
                </div>
            </div>
            <div class="item">
                <a href="Logitech Z120.html"><img src="<?php echo base_url("/resources/GadgetPics/Accessories/CANON EF 50MM.jpg");?>"></a>
                <div class="caption">
                CANON EF 50MM
                    ₱459
                </div>
            </div>
            <div class="item">
                <a href="Asus RT-AX55.html"><img src="<?php echo base_url("/resources/GadgetPics/Accessories/Epson T664100 Ink Black.jpg");?>"></a>
                <div class="caption">
                Epson T664100 Ink Black
                    ₱5,095
                </div>
            </div>
            <div class="item">
                <a href="Black Shark 4.html"><img src="<?php echo base_url("/resources/GadgetPics/Accessories/Fantech GS202 Sonar.jpg");?>"></a>
                <div class="caption">
                Fantech GS202 Sonar4<br>
                    ₱23,950 
                </div>
            </div>
            <div class="item">
                <a href="Canon Eos 3000D.html"><img src="<?php echo base_url("/resources/GadgetPics/Accessories/Intel NUC i3-10110U Mini-PC.jpg");?>"></a>
                <div class="caption">
                Intel NUC i3-10110U Mini-PC
                    ₱20,269
                </div>
            </div>
            <div class="item">
                <a href="Edifier X100.html"><img src="<?php echo base_url("/resources/GadgetPics/Accessories/IPAL651.jpg");?>"></a>
                <div class="caption">
                IPAL651
                    ₱15,295
                </div>
            </div>
            <div class="item">
                <a href="Canon Pixma G2010.html"><img src="<?php echo base_url("/resources/GadgetPics/Accessories/Logitech Z120.jpg");?>"></a>
                <div class="caption">
                Logitech Z120
                     ₱20,269
                </div>
            </div>
            <div class="item">
                <a href="EasyBuild Intel Core i3-9100f.html"><img src="<?php echo base_url("/resources/GadgetPics/Accessories/North Bayou NB-767-L600.jpg");?>"></a>
                <div class="caption">
                North Bayou NB-767-L600
                    ₱5,095
                </div>
            </div>
            <div class="item">
                <a href="Canon Pixma G1010.html"><img src="<?php echo base_url("/resources/GadgetPics/Accessories/Onikuma G21 + CW902.jpg");?>"></a>
                <div class="caption">
                Onikuma G21 + CW902<br>
                     ₱23,950 
                </div>
            </div>
            <div class="item">
                <a href="Apple iPhone 13.html"><img src="<?php echo base_url("/resources/GadgetPics/Accessories/Rakk Daguob Illuminated.jpg");?>"></a>
                <div class="caption">
                Rakk Daguob Illuminated
                     ₱20,269
                </div>
            </div>
            <div class="item">
                <a href="Epson EB-S41.html"><img src="<?php echo base_url("/resources/GadgetPics/Accessories/RAKK Kusog Pro 7.1 RGB.jpg");?>"></a>
                <div class="caption">
                RAKK Kusog Pro 7.1 RGB
                    ₱23,950 
                </div>
            </div>
            <div class="item">
                <a href="Fantech GS202 Sonar.html"><img src="<?php echo base_url("/resources/GadgetPics/Accessories/SANDISK EXTREME PRO.png");?>"></a>
                <div class="caption">
                SANDISK EXTREME PRO
                    ₱5,095
                </div>
            </div>
            <div class="item">
                <a href="Fujifilm X-T2.html"><img src="<?php echo base_url("/resources/GadgetPics/Accessories/SIGMA 16MM F1.4 DC.jpg");?>"></a>
                <div class="caption">
                SIGMA 16MM F1.4 DC
                     ₱20,269
                </div>
            </div>
        </div>

    </body>
</html>
