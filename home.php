<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="includes/bootstrap-5.2.1-dist/css/style.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<body>
    

<div >
  <img src="./image/1.jpg" alt="Snow" style="width:100%; height:500px;">
  
  <h1 id="toplft"class="top-lft" >Best Books <br> delivered at your  </br>doorsteps <br/> <button class= "btn btn-light" style="width:150px ; height:45px;"> Shop Now</button>
</h1>
<br/> <br/> 
</div>
<br/>
<!-- <div class="container">
        <h2>Our  Partners/ Our Clients</h2>
        <hr>
         <section class="customer-logos slider">
            <div class="slide"><img src="./image/imageedit_7_4955298552.png"></div>
            <div class="slide"><img src="./image/imageedit_4_8801715882.png"></div>
            <div class="slide"><img src="./image/imageedit_2_3303768801.png"></div>
            <div class="slide"><img src="./image/rsz_1mountain.png"></div>
            <div class="slide"><img src="./image/rsz_blackjacket.png"></div>
            <div class="slide"><img src="./image/rsz_walker_books.png"></div>
            <div class="slide"><img src="./image/imageedit_7_4955298552.png"></div>
            <div class="slide"><img src="./image/imageedit_4_8801715882.png"></div>
            <div class="slide"><img src="./image/imageedit_2_3303768801.png"></div>
         </section>

      </div> -->
      <br/><br/>
 
  <!-- Content here -->

  <div class="container text-center">
  <div class="row">
    <div class="col">
    <img src="./image/first-book.jpg" alt="adult"  style="width:250px; height:250px;opacity: 0.9;">
  
  <p class="centered">20% Off on Adults <br> Books  </br>Use adult 20 to get discount on your book <br><button class= "btn btn-light"> Shop Now</button>
</p>
    </div>
    
    <div class="col">
    <img src="./image/child-books.jpg" alt="child" style="width:250px; height:250px;opacity: 0.9;">
  
  <p class="centered">Latest Books <br> for your Children ,go see and get your children the best book </br> <button class= "btn btn-light"> Shop Now</button>
</p>
    </div>

    <div class="col">
    <img src="./image/thirdbook.jpeg" alt="Snow" style="width:250px; height:250px;opacity: 0.8;">
  
  <p class="centered">Check and Getyou Books <br> in hand ,checkout and pay with best prices for most popular </br> <button class= "btn btn-light"> Shop Now</button>
</p>
    </div>
  </div>
</div>






































  
<script>
 $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
    </script>

