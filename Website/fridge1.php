<!DOCTYPE html>
<?php
session_start();

?>
<html>
<head>
	<title>check</title>
	<link rel="stylesheet" type="text/css" href="stylelol.css">
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
        <a href="appliance1.php"><div class="bakwaas" style="font-family: myfont3;">Appliance Repair :</div></a>
        <a href="fridge1.php"><div class="bakwaas" style="font-family: myfont3;">Fridge Repair</div></a>
                         <a href="logout.php" style="font-size: 24px; margin: 5px; float: right; text-decoration: none; color: white; border: 1px solid; border-radius: 5px; background: #E2472F; width: 100px; text-align:center; height: 33px;">Logout</a>
    </nav>
    </div>
    </header>
        <div class="divider"></div>
    <p style="text-align: center; font-family: myfont4; color: white; font-size: 25px; margin: 20px;">We excel in taking away the pain of finding the right appliances expert to cater to your needs, right at the comfort of your home. With reasonable pricing you can avail our appliances services with just a few clicks of a button.</p>
    <nav class="lolol">
	<form action="f.php" method="post">
	<ul>
		<li>
			<label style="font-family: myfont4;">Single Door
				<input type="checkbox" name="single">
				<span class= "check"></span>
			</label>
		</li>
		<li>
			<label style="font-family: myfont4;">Double Door
				<input type="checkbox" name="double">
				<span class= "check"></span>
			</label>
		</li>
		<li>
			<label style="font-family: myfont4;">Triple Door
				<input type="checkbox" name="triple">
				<span class= "check"></span>
			</label>
		</li>
		<li>
			<label style="font-family: myfont4;">Side by Side Door
				<input type="checkbox" name="sbs">
				<span class= "check"></span>
			</label>
		</li>
        <li>
            <input type="submit" id="btn" name="submit" value="Add to Cart" style="margin-left: 40px; font-family: myfont4;">
        </li>
    </ul>
	</form>
    </nav>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
            
        <div class="footer-main">
        <div class="footer-inner">
        <div class="footer-left">
        <div class="footer-box">
        <h6>SERVICES</h6>
            <ul>
                <li><a href="appliance1.php" style="text-decoration: none; color: white;">Appliance Repair</a></li>
                <li><a href="cobbler1.php" style="text-decoration: none;">Cobbler</a></li>
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