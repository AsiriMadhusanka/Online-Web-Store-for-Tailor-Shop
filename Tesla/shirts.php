<?php
    $title = 'Tesla - Shirts';
?>

<?php 
  include './components/header.php';
  include './database/connection.php';  
?>

<?php
  $query = "SELECT * FROM `tbl_products` WHERE `category` = 'shirt'";
  $result = $connection->query($query);
?>

<section class="new-arrival">
            
            <!--heading-------->
            <div class="arrival-heading">
                <strong>New Arrival</strong>
                <p>We Provide You New Fasion Design Clothes</p>
            </div>
              <!--products----------------------->
              <div class="product-container">
                <?php
                    while ($row = $result->fetch_assoc()) {
                  ?>
                  <div class="product-box">
                      <!--product-img------------>
                      <div class="product-img">
                          <!--add-cart---->
                          <a href="#" class="add-cart">
                              <i class="fa fa-shopping-cart"></i>
                            </a>
                          <!--img------>
                        <img src="images/<?php echo $row['image'] ?>">
                      </div>
                      <!--product-details-------->
                      <div class="product-details">
                          <a href="shirt-measurements.php?style_code=<?php echo $row['styleCode'] ?>" class="p-name"><?php echo $row['name'] ?></a>
                          <span class="p-price">Rs. <?php echo $row['price'] ?></span>
                      </div>
                  </div>
                  <?php
                  }
                  ?>
                
              </div>
          </section>

<?php
    mysqli_close($connection);
?>

<?php include './components/footer.php' ?>