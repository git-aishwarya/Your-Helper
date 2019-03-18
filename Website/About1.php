<?php
session_start();

?>

<html>
<head>
    <title>About Developers</title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="swiper.min.css">
    <link rel="stylesheet" type="text/css" href="style4.css">
    <style>
            @font-face
            {
                font-family:myfont3;
                src: url(PatuaOne-Regular.woff);
            }
    </style>
</head>
    <body>
        <header>
        <div class="wrapper">
        <nav class="lol">
            <a href="Homepage1.php"><div class="logo" style="font-family: myfont3; color: #E2472F;">YOUR HELPERS : </div></a>
            <a href="About1.php"><div class="bakwaas">About Developers</div></a>
            <a href="logout.php" style="line-height: 20px; margin:0px;padding: 8px 25px;text-decoration: none;transition: .3s;border-style: solid;background: #E2472F;color: #fff;border-radius: 6px; float:right; ">LOGOUT</a>
            <a href="#" style="font-size: 24px; margin: 5px; float: right; text-decoration: none; color: #E2472F;"><?php echo "Hi, ".$_SESSION['username']; ?></a>
            </nav>
            </div>
        </header>
        <div class="divider"></div>
        <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" >
          <div class="imgBx">
          <img src="Pic7.jpeg"></div>
          <div class="details">
          <h3><p class="buttons">
        <a href="#a">RITWICK BHARGAV</a><br><br><span>Front End and Back End Developer</span></h3></div>
        </div>
        <div class="swiper-slide">
          <div class="imgBx">
          <img src="Pic8.jpeg"></div>
          <div class="details">
          <h3><p class="buttons">
        <a href="#a">SAUMYA RASTOGI</a><br><br><span>Web Designer</span></h3></div>
        </div>
        <div class="swiper-slide" >
          <div class="imgBx">
          <img src="Pic9.jpeg"></div>
          <div class="details">
          <h3><p class="buttons">
        <a href="#a">AISHWARYA AGARWAL</a><br><br><span>Front End and Back End Developer</span></h3></div>
        </div>
        <div class="swiper-slide" >
          <div class="imgBx">
          <img src="Pic10.jpeg"></div>
          <div class="details">
          <h3><p class="buttons">
        <a href="#a">SHIVANGI KASHYAP</a><br><br><span>Web Designer</span></h3></div>
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
        <script type="text/javascript" src="swiper.min.js"></script>
        <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 60,
        stretch: 0,
        depth: 500,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
    </body>
</html>