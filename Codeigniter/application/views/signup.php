<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=base_url("/resources/Css/SignUpStyle.css")?>">
    <link rel="shortcut icon" type="image/jpg" href="<?=base_url("/resources/ToLootPics/cube.png")?>">
    <title>SignUp</title>
</head>
<body>
<!---------------------------------------------------------First-Page------------------------------------------------------>
    <section class="header">
        <nav>
            <a href="<?=base_url("/pages/home")?>"><img src="<?=base_url("/resources/ToLootPics/cube.png")?>" class="logo"></a>
            <div class="nav-links" id="navlinks">
                <ul>
                    <li><a href="<?=base_url("/pages/home")?>">Home</a></li>
                    <li><a href="<?=base_url("/pages/services")?>">Services</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
    </section>  
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="customer()">Customer</button>
            <button type="button" class="toggle-btn" onclick="seller()">Seller</button>
        </div>
        <form id="Customer" class="input-group">
            <input type="text" class="input-field" placeholder="User ID" required>
            <input type="email" class="input-field" placeholder="Email ID" required>
            <input type="text" class="input-field" placeholder="Enter Password" required>
            <input type="checkbox" class="check-box"><span>I agree to the terms & condition</span>
            <button type="submit" class="submit-btn">register</button>
        </form>
        <form id="Seller" class="input-group">
            <input type="text" class="input-field" placeholder="User ID" required>
            <input type="text" class="input-field" placeholder="Enter Password" required>
            <input type="checkbox" class="check-box"><span>Remember Password</span>
            <button type="submit" class="submit-btn">Log In</button>
        </form>
    </div>

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