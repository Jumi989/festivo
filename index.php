<?php
session_start();

$authenticated = false;
if (isset($_SESSION["email"])) {
  $authenticated = true;
}

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
  <!-- Navbar -->
  <header class="fixed top-0 z-50 w-full border-b">


    <div class="navbar text-white">
      <div class="navbar-start">
        <div class="dropdown">
          <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
            </svg>
          </div>
          <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
            <li><a>Item 1</a></li>
            <li>
              <a>Parent</a>
              <ul class="p-2">
                <li><a>Submenu 1</a></li>
                <li><a>Submenu 2</a></li>
              </ul>
            </li>
            <li><a>Item 3</a></li>
          </ul>
        </div>
        <a class="btn btn-ghost text-xl">daisyUI</a>
      </div>
      <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1 text-lg">
          <li><a href="index.php">Home</a></li>
          <li><a>Services</a></li>
          <li><a>Contact</a></li>
          <li><a>About</a></li>

        </ul>
      </div>



      <div class="navbar-end">
       <?php
       if ($authenticated) {
       ?>
       
        <div class="flex-none">
          <ul class="menu menu-horizontal px-1">
            <li class="mr-4">
              <details>
                <summary>User</summary>
                <ul class="bg-base-100 rounded-t-none p-2">
                  <li><a href="./profile.php">History</a></li>
                  <li><a href=" ./logout.php">Logout</a></li>

                </ul>
              </details>
            </li>
          </ul>
        </div>
        <?php
       }else {
       ?>
        <a href="login.php" class="btn btn-ghost text-lg">Login</a>
        <a href="register.php" class="btn btn-ghost text-lg">Signup</a>
        <?php
       } 
       ?>

      </div>


    </div>
  </header>
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
    <a href="./shadi.php" class="card bg-base-100 w-96 shadow-sm hover:scale-[1.1] duration-400 ease-out transition">
      <figure>
        <img src="./pics/wedding.webp" alt="Shoes" />
      </figure>
      <div class="card-body items-center">
        <h2 class="card-title">Wedding</h2>
      </div>
    </a>
    <a href="./anniversary.php" class="card bg-base-100 w-96 shadow-sm hover:scale-[1.1] duration-400 ease-out transition">
      <img src="./pics/anniversary.jpg" alt="Shoes" />
      </figure>
      <div class="card-body items-center">
        <h2 class="card-title">Anniversary</h2>

      </div>
    </a>

    <div class="card bg-base-100  w-96 shadow-sm hover:scale-[1.1] duration-400 ease-out transition">
      <figure>
        <img src="./pics/birthday.jpg" alt="Shoes" />
      </figure>
      <div class="card-body items-center">
        <h2 class="card-title">Birthday</h2>

      </div>
    </div>
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

  <footer class=" pl-80 footer sm:footer-horizontal bg-base-300 text-base-content p-10">
    <nav>
      <h6 class="footer-title">Services</h6>
      <a class="link link-hover">Branding</a>
      <a class="link link-hover">Design</a>
      <a class="link link-hover">Marketing</a>
      <a class="link link-hover">Advertisement</a>
    </nav>
    <nav>
      <h6 class="footer-title">Company</h6>
      <a class="link link-hover">About us</a>
      <a class="link link-hover">Contact</a>
      <a class="link link-hover">Jobs</a>
      <a class="link link-hover">Press kit</a>
    </nav>
    <nav>
      <h6 class="footer-title">Social</h6>
      <div class="grid grid-flow-col gap-4">
        <a>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
            <path
              d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
            </path>
          </svg>
        </a>
        <a>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
            <path
              d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
            </path>
          </svg>
        </a>
        <a>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
            <path
              d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
            </path>
          </svg>
        </a>
      </div>
    </nav>
  </footer>
  <script src="script.js"></script>


</body>

</html>