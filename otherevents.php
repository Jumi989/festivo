<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Other Events</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@latest/dist/full.css" rel="stylesheet" />
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-300 via-purple-400 to-pink-200">



  <!-- Main Content -->
  <div class="container mx-auto px-4 pt-20">
    <h1 class="text-4xl font-bold text-center mb-10 text-gray-700">Other Events</h1>

    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

      <!-- Event Card -->
      <div class="card bg-white/70 shadow-xl">
        <figure><img src="./pics/corporate.jpeg" alt="Corporate Event" class="h-60 w-full object-cover"></figure>
        <div class="card-body">
          <h2 class="card-title">Corporate Events</h2>
          <p>Professional setup for meetings, seminars, and conferences.</p>
          <div class="card-actions justify-end">
            <button class="btn btn-primary">View Details</button>
          </div>
        </div>


        <button class="btn" onclick="my_modal_1.showModal()">open modal</button>
        <dialog id="corporate-modal" class="modal">
          <div class="modal-box">
            <h3 class="text-lg font-bold">Corporate Events</h3>
            <p class="py-4">
              We organize seamless corporate events including conferences, product launches, and business meetings.
              Full venue setup, catering, audio-visuals, and event staffing are included.</p>
            <div class="modal-action">
              <form method="dialog">
                <!-- if there is a button in form, it will close the modal -->
                <button class="btn">Close</button>
              </form>
            </div>
          </div>
        </dialog>
      </div>



      <!-- Event Card -->
      <div class="card bg-white/70 shadow-xl">
        <figure><img src="./pics/funeral.jpg" alt="Funeral" class="h-60 w-full object-cover"></figure>
        <div class="card-body">
          <h2 class="card-title">Funeral Services</h2>
          <p>Respectful arrangements to honor your loved ones.</p>
          <div class="card-actions justify-end">
            <button class="btn btn-primary">View Details</button>
          </div>
        </div>
      </div>

      <!-- Event Card -->
      <div class="card bg-white/70 shadow-xl">
        <figure><img src="./pics/house.jpg" alt="House Party" class="h-60 w-full object-cover"></figure>
        <div class="card-body">
          <h2 class="card-title">House Parties</h2>
          <p>Private gatherings with customized setups and entertainment.</p>
          <div class="card-actions justify-end">
            <button class="btn btn-primary">View Details</button>
          </div>
        </div>
      </div>

      <!-- Add More Cards if needed -->
      <div class="card bg-white/70 shadow-xl">
        <figure><img src="./pics/retirement.jpg" alt="Retirement Party" class="h-60 w-full object-cover"></figure>
        <div class="card-body">
          <h2 class="card-title">Retirement Parties</h2>
          <p>Honor a lifetime of achievements with style and grace.</p>
          <div class="card-actions justify-end">
            <button class="btn btn-primary">View Details</button>
          </div>
        </div>
      </div>

      <div class="card bg-white/70 shadow-xl">
        <figure><img src="./pics/award.jpg" alt="Award Ceremony" class="h-60 w-full object-cover"></figure>
        <div class="card-body">
          <h2 class="card-title">Award Ceremonies</h2>
          <p>Recognize and celebrate success with a grand event.</p>
          <div class="card-actions justify-end">
            <button class="btn btn-primary">View Details</button>
          </div>
        </div>
      </div>

      <div class="card bg-white/70 shadow-xl">
        <figure><img src="./pics/festivals.jpg" alt="Festival" class="h-60 w-full object-cover"></figure>
        <div class="card-body">
          <h2 class="card-title">Festivals</h2>
          <p>Colorful setups for cultural, music, and food festivals.</p>
          <div class="card-actions justify-end">
            <button class="btn btn-primary">View Details</button>
          </div>
        </div>
      </div>

      <div class="card bg-white/70 shadow-xl">
        <figure><img src="./pics/baby.webp" alt="Baby Shower" class="h-60 w-full object-cover"></figure>
        <div class="card-body">
          <h2 class="card-title">Baby Showers</h2>
          <p>Celebrate the upcoming arrival of your little one in style.</p>
          <div class="card-actions justify-end">
            <button class="btn btn-primary">View Details</button>
          </div>
        </div>
      </div>

    </div>
  </div>

  <?php
  include 'footer.php';
  ?>

</body>

</html>