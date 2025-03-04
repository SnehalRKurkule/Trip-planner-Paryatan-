<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking</title>
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- header Section Starts -->
  <section class="header">
    <a href="home.php" class="logo">Paryatan.</a>
    <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
  </section>
  <!-- header Section ends -->

  <div class="heading" style="background:url(images/background_img.jpg) no-repeat">
    <h1>Booking</h1>
  </div>

  <!-- Booking section starts -->
  <section class="booking">

    <h1 class="heading-title">book your trip</h1>

    <form action="book_form.php" method="post" class="book-form">
      <div class="flex">
        <div class="inputBox">
          <span>Name :</span>
          <input type="text" placeholder="Enter your name" name="name">
        </div>
        <div class="inputBox">
          <span>Email :</span>
          <input type="email" placeholder="Enter your email" name="email">
        </div>
        <div class="inputBox">
          <span>Phone No. :</span>
          <input type="number" placeholder="Enter your number" name="phone">
        </div>
        <div class="inputBox">
          <span>Address :</span>
          <input type="text" placeholder="Enter your address" name="address">
        </div>
        <div class="inputBox">
          <span>Place to visit :</span>
          <input type="text" placeholder="place you want to visit" name="location">
        </div>
        <div class="inputBox">
          <span>No. of People :</span>
          <input type="number" placeholder="number of guests" name="guests">
        </div>
        <div class="inputBox">
          <span>Arrivals :</span>
          <input type="date" name="arrivals">
        </div>
        <div class="inputBox">
          <span>Leaving :</span>
          <input type="date" name="leaving">
        </div>
      </div>
      <input type="submit" value="submit" class="btn" name="send">
    </form>
  </section>
  <!-- Booking section ends -->
  <!-- footer section starts -->
  <section class="footer">
    <div class="box-container">
      <div class="footer_box">
        <h3>quick links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>packages</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
      </div>

      <div class="footer_box">
        <h3>extra links</h3>
        <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>about us</a>
        <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
      </div>

      <div class="footer_box">
        <h3>contact info</h3>
        <a href="#"><i class="fas fa-phone"></i>+123-456-789</a>
        <a href="#"><i class="fas fa-phone"></i>+111-222-333</a>
        <a href="#"><i class="fas fa-envelope"></i>abc@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i>mumbai, india - 400104</a>
      </div>

      <div class="footer_box">
        <h3>follow use</h3>
        <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
        <a href="#"><i class="fab fa-twitter"></i>twitter</a>
        <a href="#"><i class="fab fa-instagram"></i>instagram</a>
        <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
      </div>

    </div>

    <div class="credit">created by<span>wad grp</span> | all rights reserved</div>
  </section>
  <!-- footer section ends -->

  <!-- Swiper JS link -->
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="script.js"></script>
</body>

</html>