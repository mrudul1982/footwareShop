<?php

@include 'database.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>discover collections</h3>
      <p>Step into style and comfort with our premium footwear collection! From casual sneakers to elegant formal shoes, we offer the perfect pair for every occasion. Explore top brands, latest trends, and unbeatable quality—all at your fingertips. Shop online today and walk with confidence, with doorstep delivery made easy! 👟✨</p>
      <a href="about.php" class="btn">discover more</a>
   </div>

</section>

<section class="products">
   <h1 class="title">Latest Products</h1>
   <div class="box-container">

      <?php
         $select_categories = mysqli_query($conn, "SELECT * FROM `category`") or die('Query failed');

         if(mysqli_num_rows($select_categories) > 0){
            $count = 0; // Initialize counter

            while($fetch_category = mysqli_fetch_assoc($select_categories)){
               $category_id = $fetch_category['id'];
               $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE cate_id = '$category_id' LIMIT 1") or die('Query failed');
               $fetch_products = mysqli_fetch_assoc($select_products);
      ?>

      <div class="box">
         <div class="name"><strong><?php echo htmlspecialchars($fetch_category['catname']); ?></strong></div>
         
         <?php if ($fetch_products) { ?>
            <img src="uploaded_img/<?php echo htmlspecialchars($fetch_products['image']); ?>" alt="Product Image" class="image">
            <div class="name"><?php echo htmlspecialchars($fetch_products['name']); ?></div>
            <a href="view_category_products.php?category_id=<?php echo $category_id; ?>" class="option-btn">View More</a>
         <?php } else { ?>
            <p class="empty">No products added yet!</p>
         <?php } ?>

      </div>

      <?php
               $count++; // Increment counter
               if ($count % 4 == 0) { // Start a new row after 4 items
                  echo '</div><div class="box-container">';
               }
            }
         } else {
            echo '<p class="empty">No categories added yet!</p>';
         }
      ?>

   </div>

   <div class="more-btn">
      <a href="shop.php" class="option-btn">Load More</a>
   </div>
</section>



<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p>We're here to help! Whether you need recommendations, have inquiries about our collection, or need assistance with your order, our team is ready to assist you. Reach out to us anytime for support and guidance!</p>
      <a href="contact.php" class="btn">contact us</a>
   </div>

</section>




<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>