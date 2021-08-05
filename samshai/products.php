<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="css/product.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="products">
            <div class = "container">
                <h1 class = "lg-title">Special Pasta With SamShai</h1>
                <p class = "text-light">Specialized in Italian pasta</p>
                <div class="button-nav">
                    <a href="#banner1"><button type="button" class="page-section1">Starter</button></a>
                    <a href="#banner2"><button type="button" class="page-section2">Main Course</button></a>
                    <a href="#banner3"><button type="button" class="page-section3">Desert</button></a>
                    <a href="#banner4"><button type="button" class="page-section4">Drinks</button></a>
                </div>
                <br>

                <section class="banner1" id="banner1">
                    <p class="text-title">Starter</p>

                    <?php

                        $sql = "SELECT * FROM products WHERE cat = 'Starter' ORDER BY id ASC";
                        $result = $conn->query($sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                        while($row = $result->fetch_assoc()) {                            
                    ?>

                    <div class="product-items">
                        <div class="product">
                        
                            <div class="product-content">
                                <div class="product-img">
                                    <?php $imageURL = 'uploads/'.$row["path"];?>
                                    <img src="<?php echo $imageURL; ?>" alt="product image">
                                </div>
                            </div>

                            <div class="product-info">
                                
                                <a href = "index.php?page=productDetails&id=<?=$row['id']?>" class="product-name"><?php echo  $row["name"] ?></a>
                                <p class="product-price"> Rs.<?php echo  $row["price"] ?></p>

                                <div class="product-bts">

                                    <form action="index.php?page=cart" method="post">
                                        <input type="number" name="quantity" min = "1" max = "<?php echo  $row["stock"] ?>" value = "1" class="btn-quantity">
                                        <input type="hidden" name="product_id" value="<?=$row['id']?>">
                                        <input type="submit" value="Add To Cart"  class ="btn-order" >
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php } } ?>
                    </div>  
                            
                </section>
                
                <section class="banner2" id="banner2">
                        <p class="text-title">Main Course</p>

                        <?php
                            $sql = "SELECT * FROM products WHERE cat = 'Main Course' ORDER BY id ASC";
                            $result = $conn->query($sql);
                            if(mysqli_num_rows($result) > 0)
                            {
                            while($row = $result->fetch_assoc()) {                            
                        ?>
                        
                        <div class="product-items">
                            <div class="product">
                            
                                <div class="product-content">
                                    <div class="product-img">
                                        <?php $imageURL = 'uploads/'.$row["path"];?>
                                        <img src="<?php echo $imageURL; ?>" alt="product image">
                                    </div>
                                </div>

                                <div class="product-info">
                                    
                                    <a href = "index.php?page=productDetails&id=<?=$row['id']?>" class="product-name"><?php echo  $row["name"] ?></a>
                                    <p class="product-price"> Rs.<?php echo  $row["price"] ?></p>

                                    <div class="product-bts">

                                        <form action="index.php?page=cart" method="post">
                                            <input type="number" name="quantity" min = "1" max = "<?php echo  $row["stock"] ?>" value = "1" class="btn-quantity">
                                            <input type="hidden" name="product_id" value="<?=$row['id']?>">
                                            <input type="submit" value="Add To Cart"  class ="btn-order" >
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php } } ?>
                        </div>  

                </section>

                <section class="banner3" id="banner3">
                    <p class="text-title">Desert</p>
                     
                    <?php
                        $sql = "SELECT * FROM products WHERE cat = 'Dessert' ORDER BY id ASC";
                        $result = $conn->query($sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                        while($row = $result->fetch_assoc()) {                            
                    ?>
                    
                    <div class="product-items">
                        <div class="product">
                        
                            <div class="product-content">
                                <div class="product-img">
                                    <?php $imageURL = 'uploads/'.$row["path"];?>
                                    <img src="<?php echo $imageURL; ?>" alt="product image">
                                </div>
                            </div>

                            <div class="product-info">
                                
                                <a href = "index.php?page=productDetails&id=<?=$row['id']?>" class="product-name"><?php echo  $row["name"] ?></a>
                                <p class="product-price"> Rs.<?php echo  $row["price"] ?></p>

                                <div class="product-bts">

                                    <form action="index.php?page=cart" method="post">
                                        <input type="number" name="quantity" min = "1" max = "<?php echo  $row["stock"] ?>" value = "1" class="btn-quantity">
                                        <input type="hidden" name="product_id" value="<?=$row['id']?>">
                                        <input type="submit" value="Add To Cart"  class ="btn-order" >
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php } } ?>
                    </div>  

                </section>

                <section class="banner4" id="banner4">
                    <p class="text-title">Drinks</p>
                    
                    <?php
                        $sql = "SELECT * FROM products WHERE cat = 'Drinks' ORDER BY id ASC";
                        $result = $conn->query($sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                        while($row = $result->fetch_assoc()) {                            
                    ?>
                    
                    <div class="product-items">
                        <div class="product">
                        
                            <div class="product-content">
                                <div class="product-img">
                                    <?php $imageURL = 'uploads/'.$row["path"];?>
                                    <img src="<?php echo $imageURL; ?>" alt="product image">
                                </div>
                            </div>

                            <div class="product-info">
                                
                                <a href = "index.php?page=productDetails&id=<?=$row['id']?>" class="product-name"><?php echo  $row["name"] ?></a>
                                <p class="product-price"> Rs.<?php echo  $row["price"] ?></p>

                                <div class="product-bts">

                                    <form action="index.php?page=cart" method="post">
                                        <input type="number" name="quantity" min = "1" max = "<?php echo  $row["stock"] ?>" value = "1" class="btn-quantity">
                                        <input type="hidden" name="product_id" value="<?=$row['id']?>">
                                        <input type="submit" value="Add To Cart"  class ="btn-order" >
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php } } ?>
                    </div>  
                     
                </section>
            </div>
        </div>
        <a class="btn-top" href="#"><i class="far fa-arrow-alt-circle-up"></i></a>
    </body>
</html>