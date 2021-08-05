<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Card/Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styleProductDetails.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  </head>
  <body>
    
    <?php
      if (isset($_GET['id'])){
        $pid = $_GET['id'];
      }
      $sql = "SELECT * FROM products WHERE id = '$pid'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
      }
      while($row = $result->fetch_assoc()) {
    ?>

    <div class = "card-main">
      <div class = "card">
 
        <div class = "product-imgs">
          <div class = "img-display">
            <?php $imageURL = 'uploads/'.$row["path"];?>
            <img src = "<?php echo $imageURL; ?>" alt = "product image">
          </div>
        </div>

         
        <div class = "product-content">
          <h3 class = "product-title"><?php echo  $row["name"] ?></h3>
          <div class = "product-price">
            <p class = "new-price">Price: Rs.<span><?php echo  $row["price"] ?></span></p>
          </div>

          <div class = "product-detail">
            <h2>About this item: </h2>
            <p><?php echo  $row["info"] ?></p>
            <ul>
              <li>Category: <span><?php echo  $row["cat"] ?></span></li>
              <li>Quality: <span>Freshly Cooked/Baked</span></li>
            </ul>
          </div>
 
          <div class = "purchase-info">

            <form action="index.php?page=cart" method="post">
              <input type="number" name="quantity" min = "1" max = "<?php echo  $row["stock"] ?>" value = "1">
              <input type="hidden" name="product_id" value="<?=$row['id']?>">
              <input type="submit" value="Add To Cart"  class ="btn" >
              
            </form>

              <!-- <input type ="number" min = "0" max = "<?php echo  $row["stock"] ?>" value = "1">
              <button type = "button" class = "btn">
                Add to Cart <i class = "fas fa-shopping-cart"></i>
              </button> -->
          </div>


          <div class = "social-links">
            <p>Share At: </p>
            <a href = "https://www.facebook.com/">
              <i class = "fab fa-facebook-f"></i>
            </a>
            <a href = "https://www.twitter.com/">
              <i class = "fab fa-twitter"></i>
            </a>
            <a href = "https://www.instagram.com/">
              <i class = "fab fa-instagram"></i>
            </a>
            <a href = "https://www.pinterest.com/">
              <i class = "fab fa-pinterest"></i>
            </a>
          </div>

        </div>
      </div>
    </div>
    <?php }  ?>
  </body>
</html>