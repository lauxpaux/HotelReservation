<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS stylesheet-->
    <link rel="stylesheet" type="text/css" href="bootstrap.css" alt="css styles">
    <link rel="stylesheet" type="text/css" href="custom.css" alt="css styles">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   

    <title>Hotel Reservation</title>
</head>
<body>
<div class="container-fluid">

<header class="header">
    <h1>Well Hotel</h1>
</header>

<!--Nav-->
<div class=".nav">
    <ul class="nav"> 
        <li class="nav-item">
          <a class="nav-link active navCol" href="#">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navCol" href="#">Reserve</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navCol" href="#">Explore</a>
        </li>
        <li class="nav-item">
            <a class="nav-link navCol" href="#">Eat</a>
        </li>
        <li class="nav-item">
            <a class="nav-link navCol" href="#">Shop</a>
        </li>
      </ul>
</div>

<!--carousel-->
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="images/hotel.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="images/goodHotel.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/goodHotelDouble.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--About-->
<div class="container-fluid about">
    <h2>About</h2>
    <p>At Well Hotel, we believe that your experience should be elevated with an element of luxury, simplicity and serenity. 
    We were founded on the principles of simplifying life for our guests, providing an escape from daily hectic and demanding 
    lives. We are a fitty-room family operated business and were established in 2020, at your service for many years to come.
    </p>

</div>

<!--Reserve-->
<div class="container-fluid reserve">
    <h2>Reserve</h2>
    <table class="table table-borderless">
        <thead>
            <tr>
                <th scope="col">Check-In</th>
                <th scope="col">Check-Out</th>
                <th scope="col">Guests</th>
                <th scope="col">Adults</th>
                <th scope="col">Children</th>
            </tr>
        </thead>
    </table>

</div>

<!--Cards-->
<div class="card-deck">
  <div class="card">
      <img src="images/ForestActivity.jpg" class="card-img-top" alt="northern lights">
      <div class="card-body">
        <button class="cardButton"><h5 class="card-title">EXPLORE</h5></button>
        <p class="card-text">Come see the wonders of nature on this after hours overnight tour to see the magical nothern lights.
          The tour includes a shared glass dome that fits a total of 16 occupants, plenty of blankets and hot cocoa. Dinner reservations and additional 
          sleep accomodations can be made upon your request at an additional charge.
        </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Aurora Borielis</small>
      </div>
    </div>
    <div class="card">
      <img src="images/ItalianFood.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <button class="cardButton"><h5 class="card-title">EAT</h5></button>
        <p class="card-text">Explore our many breakfast, lunch and dinner options. There is something for everyone within walking distance, from coffee shops
          to upscale restaurants with a wide variety of cuisine to chose from! We are big fans of L'Roxanna Italiana, Mediterranean Cafe and Lounge, and 
          the famouse Mooch Coffee Roasters. 
        </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">L'Roxanna Italiana</small>
      </div>
    </div>
    <div class="card">
      <img src="images/ImgShop.jpeg" class="card-img-top" id="imgSize" alt="...">
      <div class="card-body">
        <button class="cardButton"><h5 class="card-title">SHOP</h5></button>
        <p class="card-text">We are huge supporters of Detroit engineering, and have a local shinola store just two blocks away! In addition to beautiful
          watches, you are welcome to visit Minimal Boutigue, which specializes in fair trade, high quality clothing essentials at a reasonably cost, as well
        the Fine Art Shop, where you can buy pieces from both local and international artists. </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Minimal Essentials</small>
      </div>
    </div>
  </div>

  

<?php
// reading variables values
$res = $_GET['Res'];
$name = $_GET['name'];
$mail = $_GET['email'];
$phone = $_GET['phone'];
$rating = $_GET['rating'];
$comment = $_GET['comments'];
echo "Thank you, ".$res." ".$name.", for your comments<br>";
echo "Your email address is ".$mail." and your phone number is ".$phone."<br>";
echo "You stated that you found this example to be '".$rating."'and added:<br>";
echo $comment;
?>


<footer>
  <div class="container-fluid footer">
    <address class="info">
      Well Hotel</br>
      1234 Staywell Lane</br>
      Washyourhands, NJ 02343</br>
      P: (727)412-7245
    </address>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 

</body>

<html>