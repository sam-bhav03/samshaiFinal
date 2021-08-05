<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="css/styleNavigation.css"> 
  <nav>             
      <a href="homepage.html"><img src="images/logos/mainlogo2.png"></a>
      <div class="nav-links" id="navLinks">
          <i class="fa fa-times" onclick="hideMenu()"></i>
          <ul>
              <li><a href="index.php?page=home">Home</a></li>
              <li><a href="index.php?page=products">Products</a></li>
              <li><a href="contact-us.html">Contact</a></li> 
              <li><a href="index.php?page=cart">Cart </a></li> 

            <div class="dropdown">
                  <button class="dropbtn"> More
                    <i class="fa fa-sort-desc"></i>
                    </button>    
                    <div class="dropdown-content">
                      <a href="about.html">About Us</a>
                      <a href="faq.html">FAQ</a>
                      <a href="index.php?page=review">Review</a>
                    </div>
              </div>

              <div class="dropdown">
                <button class="dropbtn"> Accounts
                  <i class="fa fa-sort-desc"></i>
                  </button>    
                  <div class="dropdown-content">
                    <a href="signup.php">Sign Up </a>
                    <a href="login.php">Log in</a>
                    <a href="logout.php">Log Out</a>
                    <a href="change-password.php">Change Password</a>
                  </div>
              </div>
              
          </ul>
          
      </div>   
      
      <i class="fa fa-bars" onclick="showMenu()"></i>
  </nav>
</head>
<body>
 
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


