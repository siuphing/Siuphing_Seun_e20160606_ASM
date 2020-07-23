<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>



</head>

<body>
    <!-- Navigation Bar -->

    <div class="q-row jutify-betweeen">
        <h1 class="tawesome item-center">Awesome<span class="tshop">Shop</span></h1>
        <div class="item-center"><span><i class="fa fa-question-circle" style="margin-right:30px">Need Helps <br></i></span>
            <span><input type="button" value="JOIN" class="chart"></span></div>
    </div>

    <!-- feature section -->

    <div class="feature">

        <?php

            $conn = new mysqli("db4free.net","phing_root","phing12345","phing_dbphp");
            if($conn->connect_error){
                die("Connection failed: ". $conn->connect_error);
            }

            $sql = "SELECT image FROM features where id='1'";
            $result = $conn->query($sql);

            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                    echo " <img class='ifeature' src='".$row[image]."' alt='cloth' value='test'>";
                }

            }

            $conn->close();
        ?>
        <div class="fsearch">
            <p style="font-size:1.3cm;margin: 1pc;margin-top: 2pc;"><b>Shop your designer dresses</b></p>
            <p style="font-size:0.5cm;color: grey;margin-top: 1pc;">Ready to get new Hand Bag for you from online. Hurry up while stock last</p>
            <input type="text" class="search" placeholder="&#xf002   Search your products from here">
        </div>
    </div>


    <!-- Promotion Section -->

    <div>
        <div class="floatl">
            <div class="promote" style="background-color: rgb(236, 161, 193);">
                <div class="floatl">
                    <p id="t_pro" style="font-size: 18pt;padding-top: 0.3px;"><b> Coupon Savings</b></p>
                    <p id="t_pro" style="font-size: 12pt;">Up to 60% off everyday essentials</p>
                    <input type="button" value="Shop Coupons" class="btn" style=" border: 0.5px solid palevioletred; box-shadow: 2px 5px palevioletred;">
                </div>
                <div class="floatl">
                    <i class="fa fa-tag fa-lg" aria-hidden="true" style="color: white;font-size: 2cm;margin-top: 1.5cm;"></i>
                </div>
            </div>
        </div>
        <div class="floatl">
            <div class="promote" style="background-color: rgb(138, 214, 233);">
                <div class="floatl">
                    <p id="t_pro" style="font-size: 18pt;padding-top: 0.3px;"><b> Free Delivery</b></p>
                    <p id="t_pro" style="font-size: 12pt;">With selected iteme</p>
                    <input type="button" value="Deliver Now" class="btn" style=" border: 0.5px solid rgb(82, 181, 211); box-shadow: 2px 5px rgb(82, 181, 211);">
                </div>
                <div class="floatl">
                    <i class="fa fa-truck" aria-hidden="true" style="color: white;font-size: 2cm;margin-top: 1.1cm;"></i>
                </div>
            </div>
        </div>
        <div class="floatl">
            <div class="promote" style="background-color: rgb(160, 233, 138);">
                <div class="floatl">
                    <p id="t_pro" style="font-size: 18pt;padding-top: 0.3px;"><b> Gift Voucher</b></p>
                    <p id="t_pro" style="font-size: 12pt;">With personal core items</p>
                    <input type="button" value="Gift Now" class="btn" style=" border: 0.5px solid rgb(114, 224, 81); box-shadow: 2px 5px rgb(114, 224, 81);">
                </div>
                <div class="floatl">
                    <i class="fa fa-gift" aria-hidden="true" style="color: white;font-size: 2cm;margin-top: 1.1cm;"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Category Section -->

    <div class="floatl">
        <div>
            <div class="floatl"><img src="https://lh3.googleusercontent.com/proxy/FoiVlsEkwCUw-33ZK9UFFTTtCVP1cMFLdWpPJD9VWd-SqrzyBE0UWLY9MZua-JtIc4TRsrVIrsBQCUcjEelX6zj5UE-WWOp0aqtaSg" alt="elec" class="img"></div>
            <div class="floatl">
                <p class="op">Electronic</p>
            </div>
        </div>
        <div>
            <div class="floatl"><img src="https://sc02.alicdn.com/kf/HTB1LYzrn7CWBuNjy0Fa760UlXXak/222407573/HTB1LYzrn7CWBuNjy0Fa760UlXXak.png" alt="hb" class="img"></div>
            <div class="floatl">
                <p class="op">Hand Bag</p>
            </div>
        </div>
        <div>
            <div class="floatl"><img src="https://echtstudios.in/122-medium_default/mens-tan-leather-wallet.jpg" alt="wallet" class="img"></div>
            <div class="floatl">
                <p class="op">Wallet</p>
            </div>
        </div>
        <div>
            <div class="floatl"><img src="https://www.straitstimes.com/sites/default/files/styles/article_pictrure_780x520_/public/articles/2017/11/22/st_20171123_msask23_8_3577434.jpg?itok=K40gJ7GB&timestamp=1511364540" alt="cl" class="img"></div>
            <div class="floatl">
                <p class="op">Clothes</p>
            </div>
        </div>
    </div>


    <div class="floatl" style="float: right; margin-right: 60px;">
        <div class="grid-container">


        <?php
            $count=0;
        
            $conn = new mysqli("db4free.net","phing_root","phing12345","phing_dbphp");
            if($conn->connect_error) {
                die("Connection failed: ". $conn->connect_error);
            }

            $sql = "SELECT resource_path FROM assets ";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    if($count == 0){
                        echo "<div class='div_coulum'>";
                        
                    }
                    $count++;

                    echo '<div class="item">';
                    echo "<p id='dis'>20%</p><img src='".$row[resource_path]."' alt='c1' class='clo'>";
                    echo '<p id="tx">Nike Women Pink Half Zip Lightweight Hooded Shirt Top Athlethic Stretch Size M</p>
                    <div class="floatl">
                        <p id="p_n"><b>15$</b></p>
                        <p id="p_dis"><b>12$</b></p>
                    </div>
                    <div class="floatr"><button class="chart"><i class="fas fa-shopping-cart">Chart</i></button></div>
                    </div>';

                    if($count == 2){
                        echo "</div>";
                        $count = 0;
                    }
                }
            }
            else{
                echo "0 result.";
            }

            $conn->close();

        ?>
            <button style="background-color: rgb(228, 243, 92);width: 5cm;height: 0.8cm;border-color: yellow;margin-bottom: 2cm;">Loding more</button>
        </div>
    </div>





</body>

</html>