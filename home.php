<?php
include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
   header('location:login.php');
}
if(isset($_POST['add_to_cart'])){
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];
   $check_cart_numbers = mysqli_query($conn,"SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   <?php include 'header.php'; ?>
<section class="home">
<div class="content">
        <h3>    MODERN AGRICULTURING</h3>
        <span>   PURE ORGANIC</span>
        <p>    If You Have  A Garden And A Library, You Have Everything You Need</p>
        <a href="shop.php" class="btn">shop now</a>
       </div>
</section>
<section class="about" id="about">
        <h1 class="the"> <span> about us</span>  </h1>
        <div class="row">
            <div class="image">
                <img src="about1.jpg" width="90%">
                <h3>Best Plant Seller</h3>
                </div>
            <div class="content">
                <h3>why choose us?</h3>
                <p>The agriculture sector is the largest source of livelihood in India. The country is one of the largest producers of agriculture and food products in the world. In 2022-23, India’s agriculture sector growth rate was estimated to be at 3.5% and it was 3.0% in 2021-22. The country produces many crops and food grains such as rice, wheat, pulses, oilseeds, coffee, jute, sugarcane, tea, tobacco, groundnuts, dairy products, fruits, etc.</p>
                <p>During 2021-22, India’s tea production stood at 1,344.40 million kg. Coffee production during the same period was 3,420 lakh tonnes, a 2.39% YoY increase. During 2021-22, oilseeds production of India crossed the estimated 37.15 million tonnes while other products such as rice, wheat, maize, pulses, mustard, and sugarcane reached a record high production.</p>
                <a href="about.php" class="btn">learn more</a>
            </div>
        </div>
    </section>
<section class="icons-container">
        <div class="icons">
         <img src="about2.jpg"  alt="">
            <div class="info">
               <h3>Free Delivery</h3>
               <span> on all orders</span>
            </div>
        </div>
         <div class="icons">

            <img src="about3.jpg"  alt="">
            <div class="info">
               <h3>10 days returns</h3>
               <span> moneyback gurantee</span>
            </div>
        </div>

        <div class="icons">

            <img src="about4.jpg"  alt="">
            <div class="info">
               <h3>Offer and Gifts</h3>
               <span> on all orders</span>
            </div>
        </div>
         <div class="icons">
         <img src="about5.png" alt="">
            <div class="info">
               <h3>Secure Payments</h3>
               <span> protected by paypal</span>
            </div>
        </div>
    </section>
<section class="home-contact">
</section>
<?php include 'footer.php'; ?>
<script src="js/script.js"></script>
</body>
</html>




