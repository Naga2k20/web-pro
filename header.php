<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" >
<header class="header">

   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo"></a>
         
         <nav class="navbar">
         
           <a href="home.php"><i class="fa fa-fw fa-home"></i>HOME</a>
            <a href="about.php"><i style='font-size:24px' class='fas'>&#xf4d8;</i>ABOUT</a>
            <a href="shop.php"><i class='fas fa-cart-plus' style='font-size:24px'></i>SHOP</a>
            

            <a href="contact.php"><i class="fa fa-fw fa-envelope"></i>FEEDBACK</a>
            <!-- <a href="weather.php"><i class='fas fa-cloud-moon-rain' style='font-size:24px'></i>WEATHER</a> -->
           
         </nav>
         

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user" ></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
         </div>
      </div>
   </div>
   <section class="lang" id="lang">
<h1 class="the"> <span> Choose language</span>  </h1>
<centre>
<div id="google_translate_element" ></div>


<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</centre>
</section>
</header>



