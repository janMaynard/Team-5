<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Too Loot Things</title>
        <link rel="stylesheet" type="text/css" href="<?=base_url("/resources/Css/ToLootStyle.css")?>">
        <link rel="shortcut icon" type="image/jpg" href="<?php echo base_url("/resources/ToLootPics/cube.png");?>">
    </head>
    <body>
<!-------------------------------------------------------First-Page------------------------------------------------------->
    <section class="header">
        <a href="<?=base_url("/pages/site")?>"><img src="<?php echo base_url("/resources/ToLootPics/cube.png");?>" class="logo" id="fix"></a>
        <nav>
            <img src="<?php echo base_url("/resources/ToLootPics/LoginLogo.png");?>" class="login-logo" id="fix">
            <div class="nav_links" id="fix">
                <ul>
                    <li><a href="<?=base_url("/pages/site")?>">Home</a></li>
                    <li><a href="<?=base_url("/pages/services")?>">Services</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
        <div class="welcome-text">
            <h1>To Loot Things</h1>
            <p>Expertise. Commitment. Value.</p>
            <br>
            <a href="<?=base_url("/pages/services")?>" class="shop-now">Shop Now &nbsp;&nbsp;&nbsp; ></a>
        </div>
    </section>
<!------------------------------------------------------Login-&-Signup------------------------------------------------------->
    <!--Login-->
    <input type="checkbox" id="show">
    <label for="show" class="show-btn" id="fix">LOGIN</label>
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="customer()">Customer</button>
            <button type="button" class="toggle-btn" onclick="seller()">Seller</button>
        </div>
        <form id="Customer" class="input-group">
            <input type="text" class="input-field" placeholder="User ID" required>
            <input type="text" class="input-field" placeholder="Password" required><br><br>
            <button type="submit" class="submit-btn">Login</button>
        </form>
        <form id="Seller" class="input-group">
            <input type="text" class="input-field" placeholder="User ID" required>
            <input type="text" class="input-field" placeholder="Password" required><br><br>
            <button type="submit" class="submit-btn">Login</button>
        </form>
    </div>
<!-------------------------------------------------------Second-page------------------------------------------------------->
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
<!-------------------------------------------------------Third-page------------------------------------------------------->
    <Selection class="header2">
        <img src="<?php echo base_url();?>/resources/ToLootPics/building.png">
    <div class="company-profile">
        <h1>Company Profile</h1>
        <p>details about the company/website</p>
        <br>
        <a href="#" class="learn-more">Learn More &nbsp&nbsp&nbsp ></a>
    </div>
    </Selection>
<!-------------------------------------------------------Fourth-page------------------------------------------------------->
    <Selection class="header3">
        <div class="services">
            <h1>&emsp;Our <br>&emsp;Services</h1>
        </div>
        <img src="<?php echo base_url();?>/resources/ToLootPics/services.png">
        <div class="bbox">
            <div class="box">
                <div class="text-box">
                    <hr> <br>
                    <h2>01</h2>
                    <h3>&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;Enter text here</h3>
                    <p style="font-family: Times New Roman;">
                        Enter text here Enter text here Enter text here <br>     
                        Enter text here Enter text here Enter text here <br>
                        Enter text here Enter text here Enter text here <br>
                    </p> <br>
                </div>
            </div>
            <div class="box">
                <div class="text-box">
                    <hr> <br>
                    <h2>02</h2>
                    <h3>&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;Enter text here</h3>
                    <p style="font-family: Times New Roman;">
                        Enter text here Enter text here Enter text here <br>     
                        Enter text here Enter text here Enter text here <br>
                        Enter text here Enter text here Enter text here <br>
                    </p> <br>
                </div>
            </div>
            <div class="box">
                <div class="text-box">
                    <hr> <br>
                    <h2>03</h2>
                    <h3>&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;Enter text here</h3>
                    <p style="font-family: Times New Roman;">
                        Enter text here Enter text here Enter text here <br>     
                        Enter text here Enter text here Enter text here <br>
                        Enter text here Enter text here Enter text here
                    </p> 
                </div>
            </div>
        </div>
    </Selection>

<!-------------------------------------------------------Fifth-page------------------------------------------------------->

    <Selection class="header4">
        <div class="contact">
            <h1>&emsp;Let's work together.</h1>
        </div>
        <img src="<?php echo base_url();?>/resources/ToLootPics/deal.png">
        <div class="contacts">
            <div class="contacts1">
                <div class="contacts2">
                    <h3>Mailing Address</h3>
                    <p style="font-family: Times New Roman;">
                        5050 saksakan street makailag buhay
                    </p> <br>
                </div>
            </div>
            <div class="contacts1">
                <div class="contacts2">
                    <h3>Phone Number</h3>
                    <p style="font-family: Times New Roman;">
                        09969187420
                    </p> <br>
                </div>
            </div>
            <div class="contacts1">
                <div class="contacts2">
                    <h3>Email Address</h3>
                    <p style="font-family: Times New Roman;">
                        hello@reallygreatsite.com
                    </p> 
                </div>
            </div>
        </div>
    </Selection>
 
<!---------------------------------------------------------Newton--------------------------------------------------------->
    <Selection class="newton">
        <div class="density">
            <h1>.</h1>
        </div>
    </Selection>

    <script>
        var x = document.getElementById("Customer");
        var y = document.getElementById("Seller");
        var z = document.getElementById("btn");

        function seller(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }

        function customer(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px";
        }

    </script>
    
    </body>
</html>
