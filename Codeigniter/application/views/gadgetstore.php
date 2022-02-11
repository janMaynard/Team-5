<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gadget Store</title>
        <link rel="stylesheet" type="text/css" href="<?=base_url("/resources/Css/GadgetStoreStyle.css")?>">
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
<!---------------------------------------------------------Ads--------------------------------------------------------->
    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

            <div class="slide first">
                <img src="<?php echo base_url("/resources/GadgetPics/lenovo ad.jpg");?>">
            </div>
            <div class="slide">
                <img src="<?php echo base_url("/resources/GadgetPics/phone ad.jpg");?>">
            </div>
            <div class="slide">
                <img src="<?php echo base_url("/resources/GadgetPics/Logitech ad.jpg");?>">
            </div>
            <div class="slide">
                <img src="<?php echo base_url("/resources/GadgetPics/samsung ad.jpg");?>">
            </div>
            <div class="nav-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
        </div>
        <div class="nav-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>
    <!-------------------------------------------------------Items--------------------------------------------------------->
    <div class="box1 boxs">
        <div class="page box2">
            <div class="item">
                <a href="<?=base_url("/pages/acer_nitro_5")?>"><img src="<?php echo base_url("/resources/GadgetPics/Acer Nitro 5.jpg");?>"></a>
                <div class="caption">
                    Acer Nitro 5<br>
                    ₱38,995
                </div>
            </div>
            <div class="item">
                <a href="<?=base_url("/pages/canon_pixma_g1010")?>"><img src="<?php echo base_url("/resources/GadgetPics/Canon Pixma G1010.jpg");?>"></a>
                <div class="caption">
                    Canon Pixma G1010<br>
                    ₱5,175
                </div>
            </div>
            <div class="item">
                <a href="<?=base_url("/pages/apple_iphone_13")?>"><img src="<?php echo base_url("/resources/GadgetPics/Apple iPhone 13.png");?>"></a>
                <div class="caption">
                    Apple iPhone 13<br>
                    ₱50,990
                </div>
            </div>
            <div class="item">
                <a href="<?=base_url("/pages/logitech_z120")?>"><img src="<?php echo base_url("/resources/GadgetPics/Logitech Z120.jpg");?>"></a>
                <div class="caption">
                    Logitech Z120<br>
                    ₱459
                </div>
            </div>
            <div class="item">
                <a href="<?=base_url("/pages/asus_rtax55")?>"><img src="<?php echo base_url("/resources/GadgetPics/Asus RT-AX55.jpg");?>"></a>
                <div class="caption">
                    Asus RT-AX55<br>
                    ₱5,095
                </div>
            </div>
            <div class="item">
                <a href="<?=base_url("/pages/black_shark_4")?>"><img src="<?php echo base_url("/resources/GadgetPics/Black Shark 4.jpg");?>"></a>
                <div class="caption">
                    Black Shark 4<br>
                    ₱23,950 
                </div>
            </div>
            <div class="item">
                <a href="<?=base_url("/pages/canon_eos_3000d")?>"><img src="<?php echo base_url("/resources/GadgetPics/Canon Eos 3000D.jpg");?>"></a>
                <div class="caption">
                    Canon Eos 3000D<br>
                    ₱20,269
                </div>
            </div>
            <div class="item">
                <a href="<?=base_url("/pages/edifier_x100")?>"><img src="<?php echo base_url("/resources/GadgetPics/Edifier X100.jpg");?>"></a>
                <div class="caption">
                    Edifier X100<br>
                    ₱1,295
                </div>
            </div>
            <div class="item">
                <a href="Canon Pixma G2010.html"><img src="/ToLootThings/GadgetPics/Canon Pixma G2010.jpg"></a>
                <div class="caption">
                    Canon Pixma G2010<br>
                </div>
            </div>
            <div class="item">
                <a href="EasyBuild Intel Core i3-9100f.html"><img src="/ToLootThings/GadgetPics/EasyBuild Intel Core i3-9100f.jpg"></a>
                <div class="caption">
                    EasyBuild Intel Core i3-9100f<br>
                </div>
            </div>
            <div class="item">
                <a href="easybuild ryzen 5 3500.html"><img src="/ToLootThings/GadgetPics/easybuild ryzen 5 3500.jpg"></a>
                <div class="caption">
                    easybuild ryzen 5 3500<br>
                </div>
            </div>
            <div class="item">
                <a href="Canon Pixma G1010.html"><img src="/ToLootThings/GadgetPics/Canon Pixma G1010.jpg"></a>
                <div class="caption">
                    Canon Pixma G1010<br>
                </div>
            </div>
    
            <div class="item">
                <a href="Apple iPhone 13.html"><img src="/ToLootThings/GadgetPics/iphone 13.jpg"></a>
                <div class="caption">
                    iphone 13<br>
                </div>
            </div>
            <div class="item">
                <a href="Epson EB-S41.html"><img src="/ToLootThings/GadgetPics/Epson EB-S41.jpg"></a>
                <div class="caption">
                    Epson EB-S41<br>
                </div>
            </div>
            <div class="item">
                <a href="Fantech GS202 Sonar.html"><img src="/ToLootThings/GadgetPics/Fantech GS202 Sonar.jpg"></a>
                <div class="caption">
                    Fantech GS202 Sonar<br>
                </div>
            </div>
            <div class="item">
                <a href="Fujifilm X-T2.html"><img src="/ToLootThings/GadgetPics/Fujifilm X-T2.jpg"></a>
                <div class="caption">
                    Fujifilm X-T2<br>
                </div>
            </div>
            <div class="item">
                <a href="Canon Eos 3000D.html"><img src="/ToLootThings/GadgetPics/Canon Eos 3000D.jpg"></a>
                <div class="caption">
                    Canon Eos 3000D<br>
                </div>
            </div>
            <div class="item">
                <a href="Lenovo Ideal Pad3.html"><img src="/ToLootThings/GadgetPics/Lenovo Ideal Pad3.jpg"></a>
                <div class="caption">
                    Lenovo Ideal Pad3<br>
                </div>
            </div>
            <div class="item">
                <a href="Edifier X100.html"><img src="/ToLootThings/GadgetPics/Edifier X100.jpg"></a>
                <div class="caption">
                    Edifier X100<br>
                </div>
            </div>
            <div class="item">
                <a href="MSI GF63.html"><img src="/ToLootThings/GadgetPics/MSI GF63.jpg"></a>
                <div class="caption">
                    MSI GF63<br>
                </div>
            </div>
            <div class="item">
                <a href="iphone 13 mini.html"><img src="/ToLootThings/GadgetPics/iphone 13 mini.jpg"></a>
                <div class="caption">
                    iphone 13 mini<br>
                </div>
            </div>
            <div class="item">
                <a href="Onikuma G21 + CW902.html"><img src="/ToLootThings/GadgetPics/Onikuma G21 + CW902.jpg"></a>
                <div class="caption">
                    Onikuma G21 + CW902<br>
                </div>
            </div>
            <div class="item">
                <a href="RAKK Aptas V2.html"><img src="/ToLootThings/GadgetPics/RAKK Aptas V2.jpg"></a>
                <div class="caption">
                    RAKK Aptas V2<br>
                </div>
            </div>
            <div class="item">
                <a href="Rakk Daguob Illuminated.html"><img src="/ToLootThings/GadgetPics/Rakk Daguob Illuminated.jpg"></a>
                <div class="caption">
                    Rakk Daguob Illuminated<br>
                </div>
            </div>
            <div class="item">
                <a href="RAKK Kusog Pro 7.1 RGB.html"><img src="/ToLootThings/GadgetPics/RAKK Kusog Pro 7.1 RGB.jpg"></a>
                <div class="caption">
                    RAKK Kusog Pro 7.1 RGB<br>
                </div>
            </div>
            <div class="item">
                <a href="red magic 6.html"><img src="/ToLootThings/GadgetPics/red magic 6.jpeg"></a>
                <div class="caption">
                    red magic 6<br>
                </div>
            </div>
            <div class="item">
                <a href="Epson EB-S41.html"><img src="/ToLootThings/GadgetPics/Epson EB-S41.jpg"></a>
                <div class="caption">
                    Epson EB-S41<br>
                </div>
            </div>
            <div class="item">
                <a href="Asus ROG Rapture GT.html"><img src="/ToLootThings/GadgetPics/Asus ROG Rapture GT.jpg"></a>
                <div class="caption">
                    Asus ROG Rapture GT<br>
                </div>
            </div>
            <div class="item">
                <a href="Apple iPhone 13 mini.html"><img src="/ToLootThings/GadgetPics/Apple iPhone 13 mini.png"></a>
                <div class="caption">
                    Apple iPhone 13 mini<br>
                </div>
            </div>
            <div class="item">
                <a href="nikon d3500.html"><img src="/ToLootThings/GadgetPics/nikon d3500.jpg"></a>
                <div class="caption">
                    nikon d3500<br>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------------------------Pagination---------------------------------------------------->
    <div class="pagination">
        <div class="pages">
            <input type="radio" name="p-btn" id="page1">
            <input type="radio" name="p-btn" id="page2">
            <input type="radio" name="p-btn" id="page3">
            <input type="radio" name="p-btn" id="page4">
        </div>
        <div class="page-manual">
            <a href="#" class="laque">&laquo;</a>
            <label for="page1" class="page-btn">1</label>
            <label for="page2" class="page-btn">2</label>
            <label for="page3" class="page-btn">3</label>
            <label for="page4" class="page-btn">4</label>
            <a href="#" class="raquo">&raquo;</a>
        </div>
    </div>
    <!----------------------------------------------------Reviews---------------------------------------------------->
    <section id="testimonials">
        <div class="testimonial-box-container">
            <strong id="top">Top Comments</strong>
            <div class="testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <div class="name-user">
                            <strong>Mark Anthony Caballero</strong>
                            <span>@HeneralAntonio</span>
                        </div>
                    </div>
                </div>
                <div class="client-comment">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <div class="name-user">
                            <strong>Mark Anthony Caballero</strong>
                            <span>@HeneralAntonio</span>
                        </div>
                    </div>
                </div>
                <div class="client-comment">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <div class="name-user">
                            <strong>Mark Anthony Caballero</strong>
                            <span>@HeneralAntonio</span>
                        </div>
                    </div>
                </div>
                <div class="client-comment">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <div class="name-user">
                            <strong>Mark Anthony Caballero</strong>
                            <span>@HeneralAntonio</span>
                        </div>
                    </div>
                </div>
                <div class="client-comment">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <div class="name-user">
                            <strong>Mark Anthony Caballero</strong>
                            <span>@HeneralAntonio</span>
                        </div>
                    </div>
                </div>
                <div class="client-comment">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
          document.getElementById('radio' + counter).checked = true;
          counter++;
          if(counter > 4){
            counter = 1;
          }
        }, 5000);
        </script>
    </body>
</html>
