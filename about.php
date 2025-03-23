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
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    
</section>

<!-- <section class="about">

    <div class="flex">

        <div class="image">
            
            <img src="images/bookabout.jpeg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>At Book store, we believe in the transformative power of books. With a passion for storytelling and a commitment to knowledge, we curate a diverse range of titles for every reader. Whether you're searching for inspiration, adventure, or learning, we’re here to help you find the perfect book. With a focus on quality, customer satisfaction, and fast delivery, we aim to bring the joy of reading right to your doorstep, one book at a time.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p> What We Provide?
                Our team of book enthusiasts carefully curates a wide selection of titles across genres to ensure there's something for every reader. From bestsellers and literary classics to educational materials and niche interests, we offer a diverse collection that caters to all ages and tastes. We also provide personalized recommendations, easy online ordering, and fast, reliable delivery to bring the world of books right to your doorstep.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
        <img src="images/wwp.png" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/whowe.jpeg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>At BookDepo, we’re a community of readers offering a wide range of books from classics to bestsellers. Our mission is to inspire and ignite a love for reading in everyone.</p>
            <a href="review.php" class="btn">clients reviews</a>
        </div>

    </div>

</section> -->
<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/footwear_about.jpg" alt="Quality Footwear">
        </div>

        <div class="content">
            <h3>Why Choose Us?</h3>
            <p>At Footwear Haven, we believe that the right pair of shoes can elevate your style and comfort. With a passion for quality and fashion, we bring you a handpicked collection of footwear for every occasion. Whether you're looking for casual sneakers, elegant formal shoes, or sporty kicks, we ensure top-tier craftsmanship and trendy designs. With a focus on durability, customer satisfaction, and hassle-free shopping, we’re here to keep you walking in style with ease.</p>
            <a href="shop.php" class="btn">Shop Now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>What We Provide?</h3>
            <p>We offer a diverse range of footwear that blends fashion with function. From high-performance sports shoes and everyday essentials to luxurious designer styles, our collection is curated to meet every need. Enjoy personalized recommendations, easy online shopping, and fast, reliable delivery—ensuring that your perfect pair reaches your doorstep effortlessly.</p>
            <a href="contact.php" class="btn">Contact Us</a>
        </div>

        <div class="image">
            <img src="images/footwear_services.jpg" alt="Our Services">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/footwear_story.jpg" alt="Our Story">
        </div>

        <div class="content">
            <h3>Who We Are?</h3>
            <p>At Footwear Haven, we are more than just a shoe store—we are a community of footwear enthusiasts dedicated to bringing you comfort, style, and confidence. With a commitment to excellence, we partner with trusted brands and skilled designers to ensure every step you take is a step in the right direction.</p>
            <a href="review.php" class="btn">Client Reviews</a>
        </div>

    </div>

</section>

<!-- <section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

    </div>

</section> -->











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>