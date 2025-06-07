<?php

include 'config.php';

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

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

<div class="row">
            <div class="image">
                <img src="about1.jpg" width="90%">
                <h3>Best Plant Seller</h3>

            </div>
            <div class="content">
                <h3>why choose us?</h3>
                <p>The agriculture sector is the largest source of livelihood in India. The country is one of the largest producers of agriculture and food products in the world. In 2022-23, India’s agriculture sector growth rate was estimated to be at 3.5% and it was 3.0% in 2021-22. The country produces many crops and food grains such as rice, wheat, pulses, oilseeds, coffee, jute, sugarcane, tea, tobacco, groundnuts, dairy products, fruits, etc.</p>
                <p>During 2021-22, India’s tea production stood at 1,344.40 million kg. Coffee production during the same period was 3,420 lakh tonnes, a 2.39% YoY increase. During 2021-22, oilseeds production of India crossed the estimated 37.15 million tonnes while other products such as rice, wheat, maize, pulses, mustard, and sugarcane reached a record high production.</p>
               <!-- <a href="#" class="btn">learn more</a>-->
            </div>
        </div>

</section>

 <section class="reviews"> 

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/far1.jpg" alt="">
         <p> Easyplant is amazing. I love having a lot of plants, but life gets busy. This is an incredible solution to keeping plants healthy and watered properly. My plants arrived in beautiful condition and excellent quality. When I had a question, Ruby, one of their customer service reps, was beyond helpful, generous, and kind. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jenmer</h3>
      </div>

      <div class="box">
         <img src="images/far2.jpg" alt="">
         <p>Aside from making it so easy to keep my plants alive with the nifty pot, their customer service was super helpful and delightful to work with. I had a concern about one of my plants that arrived and was given guidance and more. Truly above and beyond.I love having a lot of plants, but life gets busy.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alison megs</h3>
      </div>

      <div class="box">
         <img src="images/far3.jpg" alt="">
         <p>My experience with easyplant has been fantastic. From the thoughtful custom-designed packaging, to the simple yet descriptive care instructions, to the helpful and kind customer service interactions, I don’t have enough good things to say. I look forward to building my collection and killing less plants!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Steve</h3>
      </div>
</section>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>