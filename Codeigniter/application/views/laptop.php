<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gadget Store: Laptop</title>
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
                <a href="Acer Nitro 5.html"><img src="<?php echo base_url("/resources/GadgetPics/Laptop/Acer Aspire VX15.jpg");?>"></a>
                <div class="caption">
                Acer Aspire VX15<br>
                    ₱38,995
                </div>
            </div>
            <div class="item">
                <a href="Canon Pixma G1010.html"><img src="<?php echo base_url("/resources/GadgetPics/Laptop/Acer Nitro 5.jpg");?>"></a>
                <div class="caption">
                Acer Nitro 5
                    ₱5,175
                </div>
            </div>
            <div class="item">
                <a href="Apple iPhone 13.html"><img src="<?php echo base_url("/resources/GadgetPics/Laptop/Acer Predator Helios 300.jpg");?>"></a>
                <div class="caption">
                Acer Predator Helios 300<br>
                    ₱50,990
                </div>
            </div>
            <div class="item">
                <a href="Asus RT-AX55.html"><img src="<?php echo base_url("/resources/GadgetPics/Laptop/Asus VivoBook X509JP-EJ134T.jpg");?>"></a>
                <div class="caption">
                Asus VivoBook X509JP-EJ134T<br>
                    ₱5,095
                </div>
            </div>
            <div class="item">
                <a href="Black Shark 4.html"><img src="<?php echo base_url("/resources/GadgetPics/Laptop/Asus VivoBook X515MA-BR614W.jpg");?>"></a>
                <div class="caption">
                Asus VivoBook X515MA-BR614W<br>
                    ₱23,950 
                </div>
            </div>
            <div class="item">
                <a href="Canon Eos 3000D.html"><img src="<?php echo base_url("/resources/GadgetPics/Laptop/Asus X409MA-BV212T.jpg");?>"></a>
                <div class="caption">
                Asus X409MA-BV212T<br>
                    ₱20,269
                </div>
            </div>
            <div class="item">
                <a href="Edifier X100.html"><img src="<?php echo base_url("/resources/GadgetPics/Laptop/Chuwi Mijabook.jpg");?>"></a>
                <div class="caption">
                Chuwi Mijabook
                    ₱1,295
                </div>
            </div>
            <div class="item">
                <a href="Canon Pixma G2010.html"><img src="<?php echo base_url("/resources/GadgetPics/Laptop/Dell Inspiron 15 3501.jpg");?>"></a>
                <div class="caption">
                Dell Inspiron 15 3501<br>
                     ₱20,269
                </div>
            </div>
            <div class="item">
                <a href="EasyBuild Intel Core i3-9100f.html"><img src="<?php echo base_url("/resources/GadgetPics/Laptop/Dell Inspiron 5405.jpg");?>"></a>
                <div class="caption">
                Dell Inspiron 5405<br>
                    ₱5,095
                </div>
            </div>
            <div class="item">
                <a href="Canon Pixma G1010.html"><img src="<?php echo base_url("/resources/GadgetPics/Laptop/Gigabyte Aorus 15P.jpg");?>"></a>
                <div class="caption">
                Gigabyte Aorus 15P<br>
                     ₱23,950 
                </div>
            </div>
            <div class="item">
                <a href="Apple iPhone 13.html"><img src="<?php echo base_url("/resources/GadgetPics/Laptop/HP Notebook.jpg");?>"></a>
                <div class="caption">
                HP Notebook
                     ₱20,269
                </div>
            </div>
            <div class="item">
                <a href="Epson EB-S41.html"><img src="<?php echo base_url("/resources/GadgetPics/Laptop/Lenovo Ideal Pad3.jpg");?>"></a>
                <div class="caption">
                Lenovo Ideal Pad3<br>
                    ₱23,950 
                </div>
            </div>
            <div class="item">
                <a href="Canon Pixma G2010.html"><img src="<?php echo base_url("/resources/GadgetPics/Laptop/MSI Alpha 15.jpg");?>"></a>
                <div class="caption">
                MSI Alpha 15
                     ₱21,999
                </div>
            </div>
            <div class="item">
                <a href="Canon Pixma G2010.html"><img src="<?php echo base_url("/resources/GadgetPics/Laptop/MSI Gaming Pro GF75.jpg");?>"></a>
                <div class="caption">
                MSI Gaming Pro GF75<br>
                     ₱20,269
                </div>
            </div>
            <div class="item">
                <a href="Fantech GS202 Sonar.html"><img src="<?php echo base_url("/resources/GadgetPics/Laptop/MSI GE66 Raider.jpg");?>"></a>
                <div class="caption">
                MSI GE66 Raider<br>
                    ₱5,095
                </div>
            </div>
            <div class="item">
                <a href="Fujifilm X-T2.html"><img src="<?php echo base_url("/resources/GadgetPics/Laptop/MSI GF63.jpg");?>"></a>
                <div class="caption">
                MSI GF63
                     ₱20,269
                </div>
            </div>
        </div>

    </body>
</html>
