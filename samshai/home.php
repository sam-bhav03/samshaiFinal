<!DOCTYPE html>
<html>
<head>
	<title>SamShai | Homepage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="icon" href="images/logos/titlebarlogo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/stylehomepage.css">
    <link rel="stylesheet" href="css/styleslideshow.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     
</head>

<body>

  <section class="header">
    <div class="main-stuff">
        <h1> Pasta is love, Pasta is life !</h1>
        <p> What started as a simple joke between two friends, became one of best italient restaurant
            of the local community. We can't for you and your friends to taste our foods !
        </p>
        <a href="index.php?page=products" class="hero-btn">Click here to know more</a>
    </div>
  
  </section>

  <section class="slider">
    <div class="img-slider">
      
        <div class="slide active">
          <img src="images/slider/slide1.png" alt="">
          <div class="info">
            <h2>Our best starter !</h2>
            <p>This has been the customer favorite ! Some customer come to our shop just for this special garlic bread.</p>
          </div>
        </div>
        
        <div class="slide">
          <img src="images/slider/slide3.jpg" alt="">
          <div class="info">
            <h2>Donut </h2>
            <p>A great round donut only at Rs.25 ! Yes only at Rs. 25.</p>
          </div>
        </div>
        <div class="slide">
          <img src="images/slider/slide4.jpg" alt="">
          <div class="info">
            <h2>The best dessert</h2>
            <p>Only a piece of red velvet can satisfy your belly in this warm summer. </p>
          </div>
        </div>
        <div class="slide">
          <img src="images/slider/slide5.jpg" alt="">
          <div class="info">
            <h2>Enjoy a great time with your friends !</h2>
            <p>With great deals, you will always find a good time with your friends. .</p>
          </div>
        </div>
        <div class="navigation">
          <div class="btn active"></div>
          <div class="btn"></div>
          <div class="btn"></div>
          <div class="btn"></div>
        </div>
      </div>

    <script type="text/javascript">
      var slides = document.querySelectorAll('.slide'); //fetch the variables
      var btns = document.querySelectorAll('.btn');
      let currentSlide = 1; //initialise it at the first slide
  
      // manual navigation by pressing button
      var manualNav = function(manual){
        slides.forEach((slide) => {
          slide.classList.remove('active');
  
          btns.forEach((btn) => {
            btn.classList.remove('active');
          });
        });
  
        slides[manual].classList.add('active');
        btns[manual].classList.add('active');
      }
  
      btns.forEach((btn, i) => {
        btn.addEventListener("click", () => {
          manualNav(i);
          currentSlide = i; //changes to the next slide
        });
      });
  
      // Javascript for image slider autoplay navigation
      var repeat = function(activeClass){
        let active = document.getElementsByClassName('active');
        let i = 1;
  
        var repeater = () => {
          setTimeout(function(){
            [...active].forEach((activeSlide) => {
              activeSlide.classList.remove('active');
            });
  
          slides[i].classList.add('active');
          btns[i].classList.add('active');
          i++;
  
          if(slides.length == i){
            i = 0;
          }
          if(i >= slides.length){
            return;
          }
          repeater();
        }, 10000);
        }
        repeater();
      }
      repeat();
      </script>
  </section>

  <section class="services-img">
      <section class="services">
          <h1>Why chose us ?</h1>

          <div class="row">
  
              <div class="col">
                  <img src="images/homepage/food1.jpg">
                  <h3>Great taste</h3>
                  <p> A great dish should be one that feels great while eating it and is healhty for our body as well. That is why here, at SamShai, we produce our ingredients in a well preserved greenhouse. Only then, we are able to give you the best food. <br> With special deals available, you will surely have a great time with your friends and families.
                  </p>
              </div>
          
              <div class="col">
                  <img src="images/homepage/sanitary1.jpg">
                  <!-- <img src="Images/Homepage/sanitary2.jpg"> -->
                  <h3>Sanitary measures</h3>
                  <p> The COVID-19 has affected all of us and rendered our daily life very difficult. However, eating a pasta in this pandemic makes one less stressed ! Our shops are well sanitised and our workers wear their masks accordingly. Customers are also expected to wear their masks and avoid group gathering. 
                  </p>
              </div>
          
              <div class="col">
                  <img src="images/homepage/chefs1.jpg">
                  <h3>Cooking with care</h3>
                  <p> Our chefs always ensure that your food is well prepared. From having a good hygiene to a good discipline, the chefs will always give the best in cooking. Furthermore, they are always here to listen to the customers needs. <br> Want more cheese ? We got you ! <br> Want a special veg dish ? We got you !
                  </p>
              </div>
          </div>
  
      </section>

      
  </section>
    
  <script>
      var navLinks = document.getElementById("navLinks");
      function showMenu(){
          navLinks.style.right = "0";
      }

      function hideMenu(){
          navLinks.style.right = "-200px";
      }
  </script>
</body>

</html>
<?php
include 'footer.php';
?>