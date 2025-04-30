<?php
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About Us - Event Planners</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@latest/dist/full.css" rel="stylesheet" />
</head>
<body class="bg-gradient-to-r from-indigo-200 via-purple-200 to-pink-200 min-h-screen flex flex-col">

  <!-- Navbar -->
 

  <!-- Hero Section -->
  <section class="text-center py-20">
    <h1 class="text-5xl font-bold text-gray-800 mb-4">About Us</h1>
    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
      We create unforgettable events with style, creativity, and flawless execution. Your dream event starts here!
    </p>
  </section>

  <!-- About Content -->
  <section class="flex flex-col md:flex-row items-center justify-center gap-10 px-10 pb-16">
    <div class="md:w-1/2">
      <img src="./pics/event.webp" alt="Event Planning" class="rounded-2xl shadow-lg" />
    </div>
    <div class="md:w-1/2 space-y-6">
      <h2 class="text-4xl font-bold text-indigo-800">Who We Are</h2>
      <p class="text-gray-700">
        EventPlanners is a premier event management company specializing in corporate functions, weddings, private parties, and more.
        Our team brings passion, creativity, and expertise to ensure that every event is a memorable success.
      </p>
      <p class="text-gray-700">
        From small gatherings to large festivals, we handle every detail with precision and care. Our clients trust us to turn their vision into reality.
      </p>
      <button class="btn btn-primary">Learn More</button>
    </div>
  </section>

  <!-- Team Section -->
  <section class="bg-white py-16">
    <h2 class="text-4xl font-bold text-center mb-12 text-indigo-800">Meet Our Team</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-10">
      
      <div class="card bg-base-100 shadow-xl object-fit">
        <figure><img src="./pics/ritee.jpg" alt="Team Member" class="h-60 w-full object-cover"/></figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title">Tasneem Ahmed</h2>
          <p>Lead Event Designer</p>
        </div>
      </div>

      <div class="card bg-base-100 shadow-xl">
        <figure><img src="./pics/jumana.jpeg" alt="Team Member" class="h-60 w-full object-cover"/></figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title">Jumana Muntaha</h2>
          <p>Operations Manager</p>
        </div>
      </div>

      <div class="card bg-base-100 shadow-xl">
        <figure><img src="./pics/abida.jpg" alt="Team Member" class="h-60 w-full object-cover"/></figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title">Abida Binte Asif</h2>
          <p>Client Relations</p>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <?php
include 'footer.php';
?>
</body>
</html>
