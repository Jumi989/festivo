<?php
include 'navbarAd.php';
?>

<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>Festivo</title>
</head>

<body>
  <!-- Hero Section -->
  <div class="hero min-h-screen" style="background-image: url(./pics/3.jpg)">
    <div class="hero-overlay"></div>
    <div class="hero-content text-neutral-content text-center">
      <div class="max-w-md">
        <h1 class="mt-30  text-3xl font-serif">Plan Your Perfect Event</h1>
        <p class="mt-4">Weddings, Anniversaries, Birthdays & More</p>
        <button class="btn btn-primary mt-2">Get Started</button>
      </div>
    </div>
  </div>


  <div class="overview">
    <h1 class="text-center text-3xl font-serif mt-20 mb-10">
      Come and select your events with us
    </h1>
    <!-- <p class= "text-center mt-5">2</p> -->
  </div>

  <!-- Event Categories -->
  <div class="container mx-auto grid grid-cols-3 gap-4">
    <a href="./shadiAd.php" class="card bg-base-100 w-96 shadow-sm hover:scale-[1.1] duration-400 ease-out transition">
      <figure>
        <img src="./pics/wedding.webp" alt="Shoes" />
      </figure>
      <div class="card-body items-center">
        <h2 class="card-title">Wedding</h2>
      </div>
    </a>
    <a href="./anniversaryAd.php" class="card bg-base-100 w-96 shadow-sm hover:scale-[1.1] duration-400 ease-out transition">
      <img src="./pics/anniversary.jpg" alt="Shoes" />
      </figure>
      <div class="card-body items-center">
        <h2 class="card-title">Anniversary</h2>

      </div>
    </a>
    <a href="./birthAd.php" class="card bg-base-100 w-96 shadow-sm hover:scale-[1.1] duration-400 ease-out transition">
    <div class="card bg-base-100  w-96 shadow-sm hover:scale-[1.1] duration-400 ease-out transition">
      <figure>
        <img src="./pics/birthday.jpg" alt="Shoes" />
      </figure>
      <div class="card-body items-center">
        <h2 class="card-title">Birthday</h2>
      </div>
    </div>
    </a>
    <div class="card bg-base-100  w-96 shadow-sm hover:scale-[1.1] duration-400 ease-out transition">
      <figure>
        <img src="./pics/other.jpg" alt="Shoes" />
      </figure>
      <div class="card-body items-center">
        <h2 class="card-title">Other Events</h2>

      </div>
    </div>
   <a href="custom.php" class="card bg-base-100 w-96 shadow-sm hover:scale-[1.1] duration-400 ease-out transition">
      <figure class="h-[256px]">
        <img src="./pics/custom.jpg" alt="Shoes" />
      </figure>
      <div class="card-body items-center">
        <h2 class="card-title">Customize</h2>
      </div>
    </a>
  </div>
  <script src="script.js"></script>
  <?php
include 'footer.php';
?>
</body>

</html>