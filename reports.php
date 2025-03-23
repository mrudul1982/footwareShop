<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .icons {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }
        .icon {
            margin: 0 20px;
            text-align: center;
        }
        .icon i {
            font-size: 50px;
            margin-bottom: 10px;
            display: block;
        }
    </style>
    
   
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">


</head>
<body>

<?php @include 'admin_header.php'; ?>
<div class="icons">
    <div class="icon">
        <a href="customer_report.php"><i class="fas fa-users"></i>Customer Report</a>
    </div>
    <div class="icon">
        <a href="order_report.php"><i class="fas fa-shopping-cart"></i>Order Report</a>
    </div>
    <div class="icon">
        <a href="contact_us_report.php"><i class="fas fa-envelope"></i>Contact Us Report</a>
    </div>
    <div class="icon">
        <a href="review_report.php"><i class="fas fa-star"></i>Review Report</a>
    </div>
    <div class="icon">
        <a href="payment_report.php"><i class="fas fa-money-bill"></i>Payment Report</a>
    </div>
    <!-- Add more icons for other reports if needed -->
</div>

</body>
</html>
