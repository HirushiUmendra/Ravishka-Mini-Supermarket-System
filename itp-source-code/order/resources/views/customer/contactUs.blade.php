<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ravishka MiniSupermarket</title>
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css"> 
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- custom css file link  -->
  <link rel="stylesheet" href="/assets/css/styles.css">

 
</head>
<body>

  <section class="showcase">
    <header>
      <div class="header-1">

        <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>RavishkaMiniSupermarket</a>

        <form action="" class="search-box-container">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>

    </div>

    <div class="header-2">

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="/customer/home">Home</a>
            <a href="/customer/profile">My Profile</a>
        </nav>

        <div class="icons">
            <a href="/cart" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="/customer/profile" class="fas fa-user-circle"></a>
        </div>

    </div>

    </header>

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <form action="/Contact/store" method="post">
        @csrf
        <div class="inputBox">
            <input type="text" placeholder="name" name="name">
            <input type="email" placeholder="email" name="email">
        </div>

        <div class="inputBox">
            <input type="text" placeholder="number" name="mobile_phone">
            <input type="text" placeholder="subject" name="subject">
        </div>

        <textarea placeholder="message" name="message" cols="30" rows="10"></textarea>

        <input type="submit" value="submit" class="btn">

    </form>

</section>

<!-- contact section ends -->

<!-- newsletter section starts  -->

<section class="newsletter">

    <h3>subscribe us for latest updates</h3>

    <form action="">
        <input class="box" type="email" placeholder="enter your email">
        <input type="submit" value="subscribe" class="btn">
    </form>

</section>

<!-- newsletter section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>RavishkaMiniSupermarket</a>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam culpa sit enim nesciunt rerum laborum illum quam error ut alias!</p>
            <div class="share">
                <a href="#" class="btn fab fa-facebook-f"></a>
            </div>
        </div>
        
 

        <div class="box">
            <h3>quick links</h3>
            <div class="links">
                <a href="#">category</a>
                <a href="#">product</a>
                <a href="#">contact</a>
            </div>
        </div>

    </div>

    <h1 class="credit"> created by <span> Ravishka Mini Supermarket </span> | all rights reserved! </h1>


</section>

<script src="script.js"></script>
    
</body>
</html>