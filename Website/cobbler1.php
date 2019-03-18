<?php
session_start();

?>

<html>
    <head>
        <title>Cobbler</title>
        <link rel="stylesheet" href="style6.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <style>
            @font-face
            {
                font-family:myfont3;
                src: url(PatuaOne-Regular.woff);
            }
            @font-face
            {
                font-family:myfont4;
                src: url(Quicksand-Bold.woff);
            }
            
            @font-face
            {
                font-family:myfont5;
                src: url(Quicksand-Regular.woff);
            }
        </style>
    </head>
    <body>
        <header>
        <div class="wrapper">
        <nav class="lol">
            <a href="Homepage1.php"><div class="logo" style="font-family: myfont3; color: #E2472F;">YOUR HELPERS : </div></a>
            <a href="cobbler1.php"><div class="bakwaas" style="font-family: myfont3;">Cobbler</div></a>
             <a href="logout.php" style="font-size: 24px; margin: 5px; float: right; text-decoration: none; color: white; border: 1px solid; border-radius: 5px; background: #E2472F; width: 100px; text-align:center; height: 33px;">Logout</a>
            <a href="#" style="font-size: 24px; margin: 5px; float: right; text-decoration: none; color: #E2472F; font-family: myfont3;"><?php echo "Hi, ".$_SESSION['username']; ?></a>
            </nav>
            </div>
        </header>
        <div class="divider"></div>
        <h1 class="neon" data-text="Cobbler" style="font-family: myfont5;">Cobbler</h1><br><br><br><br><br><br><br>
        <h1 style="color: white; font-family: myfont3;">ABOUT OUR COBBLER SERVICES:</h1>
        <p style="text-align: center; font-family: myfont4; color: white; font-size: 22px; padding: 20px;">As the best and recognized online shoe repair shop. Our expert show cobblers can repair any style and brands of heels, dress shoes, casual shoes; even handbags and many more. Let our cobblers make your favorite pair of boots, shoes or handbags look brand new again.</p>
        <h1 style="color: white; font-family: myfont3;">SERVICES FOR YOU:</h1>
        <div class="container">
            <div class="box">
                <div class="imgBox">
                    <img src="Captureqw.JPG" style="height: 290px">
                </div>
                <div class="details">
                    <div class="content">
                    <h2 style="font-family: myfont3;">SHOES</h2>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="Capture5.JPG" style="height: 290px;">
                </div>
                <div class="details">
                    <div class="content">
                    <h2 style="font-family: myfont3;">BOOTS</h2>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="Capture8.JPG" style="height: 290px">
                </div>
                <div class="details">
                    <div class="content1">
                    <h2 style="font-family: myfont3;">ACCESSORIES</h2>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="shoecare1.jpg" style="height: 290px; width: 290px;">
                </div>
                <div class="details">
                    <div class="content">
                    <h2 style="font-family: myfont3;">SHOE-CARE</h2>
                    </div>
                </div>
            </div>
        </div>
        <h1 style="color: white; font-family: myfont3;">HOW IT WORKS:</h1>
        <div class="containerlol">
        <div class="boxlol">
            <div class="iconlol"><i class="fa fa-check" aria-hidden="true"></i></div>
            <div class="contentlol">
                
                <h3 style="font-family: myfont3;">CHOOSE PRODUCT</h3><br>
                <p style="font-family: myfont4;">Select the product that you want to get repaired. Eg: Shoes, Handbags etc..</p>
            </div>
        </div>
                <div class="boxlol">
            <div class="iconlol"><i class="fa fa-industry" aria-hidden="true"></i></div>
            <div class="contentlol1">
                <h3 style="font-family: myfont3;">CHOOSE REPAIR</h3><br>
                <p style="font-family: myfont4;">Choose your issue from our wide range of repair services & get an instant estimate. Eg: Leather Sole replacement, Strap fixing, etc..</p>
            </div>
        </div>
                <div class="boxlol">
            <div class="iconlol"><i class="fa fa-credit-card" aria-hidden="true"></i></div>
            <div class="contentlol2">
                <h3 style="font-family: myfont3; text-align: center;">PLACE YOUR ORDER</h3><br>
                <p style="font-family: myfont4;">Place your order & Proceed to payment. You are in constant track of order. Sit back and relax, while our service providers gets the job done.</p>
            </div>
        </div>
    </div>
        <footer>
            
        <div class="footer-main">
        <div class="footer-inner">
        <div class="footer-left">
        <div class="footer-box">
        <h6>SERVICES</h6>
            <ul>
                <li><a href="appliance1.php" style="text-decoration: none;">Appliance Repair</a></li>
                <li><a href="cobbler1.php" style="text-decoration: none; color: white;">Cobbler</a></li>
                <li><a href="tailor1.php" style="text-decoration: none;">Tailor</a></li>
                <li><a href="laundry1.php" style="text-decoration: none;">Laundry</a></li>
                <li><a href="About1.php" style="text-decoration: none;">About Developers</a></li>
            </ul>
        </div>
        <div class="footer-box">
        <h6>FOLLOW US:</h6>
            <ul style="display: flex">
                <li><a href="#" style="width: 50px; height: 50px; line-height: 50px; font-size: 20px; margin-right: 20px;"><i class="fa fa-facebook" aria-hidden="true"></i>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    </a>
                </li>
                
                <li><a href="#" style="width: 50px; height: 50px; line-height: 50px; font-size: 20px; margin-right: 20px;"><i class="fa fa-twitter" aria-hidden="true"></i>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    </a>
                </li>
                
                <li><a href="#" style="width: 50px; height: 50px; line-height: 50px; font-size: 20px; margin-right: 20px;"><i class="fa fa-google-plus" aria-hidden="true"></i>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    </a>
                </li>
                
                <li><a href="#" style="width: 50px; height: 50px; line-height: 50px; font-size: 20px; margin-right: 20px;"><i class="fa fa-linkedin" aria-hidden="true"></i>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    </a>
                </li>
                
                <li><a href="#" style="width: 50px; height: 50px; line-height: 50px; font-size: 20px; margin-right: 20px;"><i class="fa fa-instagram" aria-hidden="true"></i>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    </a>
                </li>
            </ul>
        </div>
            
        </div>
    <div class="footer-left">
        <div class="footer-box">
        <h6>INFORMATION</h6>
            <ul>
                <li><a href="#" style="text-decoration: none;">Terms</a></li>
                <li><a href="#" style="text-decoration: none;">Clients</a></li>
                <li><a href="#" style="text-decoration: none;">Partners</a></li>
                <li><a href="#" style="text-decoration: none;">Support</a></li>
            </ul>
        </div>
    </div>
            <div class="footer-left">
        <div class="footer-box">
        <h6>CONTACT US</h6>
            <ul>
                <li style="font-size: 14px; color: #999; font-family: myfont4;"><h3 style="color: white;">Mail Id:</h3>your.helpers1729@gmail.com</li>
                <li style="font-size: 14px; color: #999; font-family: myfont4;"><h3 style="color: white;">Contact No.:</h3>+91 821 829 0235</li>
            </ul>
        </div>
    </div>
        <div class="clr"></div>
        </div>
        </div>
        </footer>
    </body>
</html>