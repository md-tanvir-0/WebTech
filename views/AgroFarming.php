<!DOCTYPE html>
<html>
     <head>
     <title>Agro-Farming</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
     
     <style type="text/css">

* {
     margin: 0;
     padding: 0;
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #48682B;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 16px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.container{
     width: 100%;
     height: 100%;
     display: flex;
     align-items: center;
     justify-content: center;
}
/* The dots/bullets/indicators */
.swiper{
      width: 1400px;
  height: 500px;
}
img {
     width: 100%;
     height: 100%;
}
.text {
  color: #fff;
  font-size: 85px;
  padding: 8px 12px;
  position: absolute;
  bottom: 180px;
  width: 100%;
  text-align: center;
}


.swiper .swiper-pagination-bullet-active{
     background-color: #48682B;
}
.swiper-button-prev{
  color: #48682B;
}
.swiper-button-next{
  color: #48682B;
}


/* Style the footer */
.footer {
     font-size: 85%;
  background-color: #f1f1f1;
  padding: 30px;
}
a, a:hover {
     text-decoration: none;
}

.socialbtns, .socialbtns ul, .socialbtns li{
     margin: 0;
     padding: 5px;
}

.socialbtns li {
    list-style: none outside none;
    display: inline-block;
}

.socialbtns .fa {
     width: 40px;
    height: 28px;
     color: #FFF;
     background-color: #000;
     padding-top: 12px;
     border-radius: 20px;
     -moz-border-radius: 20px;
     -webkit-border-radius: 20px;
     -o-border-radius: 20px;
     transition: all ease 0.5s;
     -moz-transition: all ease 0.5s;
     -webkit-transition: all ease 0.5s;
     -o-transition: all ease 0.5s;
}

.socialbtns .fa:hover {
     transform: scale(1.2,1.2);
     -moz-transform: scale(1.2,1.2);
     -webkit-transform: scale(1.2,1.2);
     -o-transform: scale(1.2,1.2);
     transition: all ease 0.5s;
     -moz-transition: all ease 0.5s;
     -webkit-transition: all ease 0.5s;
     -o-transition: all ease 0.5s;
}



     </style>
     </head>
     <body >
          <div class="topnav">
    <a style="background-color:#ddd;color:black;" href="../controllers/Home.php">Home</a> 
     <a href="../controllers/Ccontacts.php">Contacts</a>
     <a href="../controllers/Caboutus.php">Abot us </a>
     <a style="float: right;" href="Login.php">Sign up / Log in </a>
     </div>
     <div class="container">
     <!-- Slider main container -->
 <div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide"><img src="https://media.istockphoto.com/id/1301956707/photo/tractor-spraying-pesticides-on-soy-field-with-sprayer-at-spring.jpg?b=1&s=170667a&w=0&k=20&c=1v7xkv7yvTc2FHplJV6jBwuaNHI_Uu1B_vl1lv-bdJI=">
     <div class="text">Welcome To Agro-Famring Companies</div>
    </div>
    <div class="swiper-slide"><img src="https://media.istockphoto.com/id/1439785182/photo/harvesting-of-soybean-field-with-combine.jpg?b=1&s=170667a&w=0&k=20&c=LXmwF8b8oYbgCrdu2HYh3M5UzLSlmsQ04wU2FMK6NsE=">
     <div class="text">New Projects are<p> on way</p></div></div>

    <div class="swiper-slide"><img src="https://media.istockphoto.com/id/1363571533/photo/open-soybean-field-at-sunset.jpg?b=1&s=170667a&w=0&k=20&c=uQwtwjofyG0roqr_xouOPGbIjUVg1AVOzkypPJTAXVc="><div class="text">Concern to Develop<p> Agro-Farming</p>
    </div></div>

    <div class="swiper-slide"><img src="https://media.istockphoto.com/id/1440595587/photo/tractor-in-a-soybean-field-cultivation-of-soybean-rows-in-the-field.jpg?s=612x612&w=0&k=20&c=Mjmt15Wv4n5P_RfRpFA42mVdavrH_icaJm8QzkOTLqo="><div class="text">Helpfull to Others</div></div>

     <div class="swiper-slide"><img src="https://media.istockphoto.com/id/1092110072/photo/tractor-spraying-a-field-of-soybean.jpg?s=612x612&w=0&k=20&c=oKVro40pIC-dH6dbrTKYWdLBEsqzNuaygrqb6sATXD8="><div class="text">Be With Us</div></div>
 
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
     const swiper = new Swiper('.swiper', {
  // Optional parameters
          autoplay:{
               delay: 3000,
               disableOnInteraction: false,
          },
  loop: true,
  speed:1000,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable:true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});
</script>
<div class="footer">
  <div align="center" class="socialbtns">
<ul>
<li><a href="#" class="fa fa-lg fa-facebook"></a></li>
<li><a href="#" class="fa fa-lg fa-twitter"></a></li>
<li><a href="#" class="fa fa-lg fa-google-plus"></a></li>
<li><a href="#" class="fa fa-lg fa-github"></a></li>
<li><a href="#" class="fa fa-lg fa-linkedin"></a></li>
<li><a href="#" class="fa fa-lg fa-instagram"></a></li>
<p style="margin-top: 15px;">Copyright © 2023 Agro Farming of Companies</p>
</ul>
</div>
</div>
</body>
</html>

