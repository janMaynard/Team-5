<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Form</title>
    <link rel="stylesheet" href="<?=base_url("/resources/Css/PaymentStyle.css")?>">
    <link rel="shortcut icon" type="image/jpg" href="<?php echo base_url("/resources/ToLootPics/cube.png");?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <form action="<?=base_url("/pages/payment_details")?>" method="post">
        <div class="container">
            <h1>Confirm Your Payment</h1>
            <div class="first-row">
                <div class="owner">
                    <h3>Owner</h3>
                    <div class="input-field">
                        <input type="text" name="owner">
                    </div>
                </div>
                <div class="cvv">
                    <h3>CVV</h3>
                    <div class="input-field">
                        <input type="password" name="cvv">
                    </div>
                </div>
            </div>
            <div class="second-row">
                <div class="card-number">
                    <h3>Card Number</h3>
                    <div class="input-field">
                        <input type="number" name="card_number">
                    </div>
                </div>
            </div>
            <div class="third-row">
                <h3>Card Number</h3>
                <div class="selection">
                    <div class="date">
                        <select name="months" id="months">
                            <option value="Jan">Jan</option>
                            <option value="Feb">Feb</option>
                            <option value="Mar">Mar</option>
                            <option value="Apr">Apr</option>
                            <option value="May">May</option>
                            <option value="Jun">Jun</option>
                            <option value="Jul">Jul</option>
                            <option value="Aug">Aug</option>
                            <option value="Sep">Sep</option>
                            <option value="Oct">Oct</option>
                            <option value="Nov">Nov</option>
                            <option value="Dec">Dec</option>
                          </select>
                          <select name="years" id="years">
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                          </select>
                    </div>
                    <div class="cards">
                        <img src="<?php echo base_url("/resources/ToLootPics/mc.png");?>">
                        <img src="<?php echo base_url("/resources/ToLootPics/vi.png");?>">
                        <img src="<?php echo base_url("/resources/ToLootPics/pp.png");?>">
                    </div>
                </div>    
            </div>
            <button name="confirm">Confirm</button>
            <button class="go-back">Cancel</button>
        </div>
    </form>

    <script>
        let btnBack = document.querySelector('.go-back');
        
        btnBack.addEventListener('click', () => {
            window.history.back();
        });
    </script>
</body>
</html>