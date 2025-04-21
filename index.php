<!DOCTYPE html>
<html lang="en" data-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@5"
      rel="stylesheet"
      type="text/css"
    />
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
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h8m-8 6h16"
              />
            </svg>
          </div>
          <ul
            tabindex="0"
            class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow"
          >
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
        <a href="login.php" class="btn btn-ghost text-lg">Login</a>
        <a href="register.php" class="btn btn-ghost text-lg">Signup</a>

        
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
      <h3 class="text-center text-xl font-bold mt-6 mb-10">
        Come and select your events with us
      </h3>
      <!-- <p class= "text-center mt-5">2</p> -->
    </div>

    <!-- Event Categories -->
    <div class="container mx-auto grid grid-cols-3 gap-4">
      <a href="./shadi.php" class="card bg-base-100 w-96 shadow-sm hover:scale-[1.1] duration-400 ease-out transition"> 
        <figure>
          <img
            src="./pics/wedding.webp"
            alt="Shoes" />
        </figure>
        <div class="card-body items-center">
          <h2 class="card-title">Wedding</h2>
        </div>
      </a>
      <div class="card bg-base-100  w-96 shadow-sm hover:scale-[1.1] duration-400 ease-out transition">
        <figure>
          <img
            src="./pics/anniversary.jpg"
            alt="Shoes" />
        </figure>
        <div class="card-body items-center">
          <h2 class="card-title">Anniversary</h2>
         
        </div>
      </div>
      <div class="card bg-base-100  w-96 shadow-sm hover:scale-[1.1] duration-400 ease-out transition">
        <figure>
          <img
            src="./pics/birthday.jpg"
            alt="Shoes" />
        </figure>
        <div class="card-body items-center">
          <h2 class="card-title">Birthday</h2>
         
        </div>
      </div>
      <div class="card bg-base-100  w-96 shadow-sm hover:scale-[1.1] duration-400 ease-out transition">
        <figure>
          <img
            src="./pics/other.jpg"
            alt="Shoes" />
        </figure>
        <div class="card-body items-center">
          <h2 class="card-title">Other Events</h2>
         
        </div>
      </div>
      <div class="card bg-base-100 w-96 shadow-sm hover:scale-[1.1] duration-400 ease-out transition">
        <figure class="h-[256px]">
          <img
            src="./pics/custom.jpg"
            alt="Shoes" />
        </figure>
        <div class="card-body items-center">
          <h2 class="card-title">Customize</h2>
        </div>
      </div>
      <div class="card bg-base-100 w-96 shadow-sm hover:scale-[1.1] duration-400 ease-out transition">
        <figure class="h-[256px]">
          <img
            src="./pics/custom.jpg"
            alt="Shoes" />
        </figure>
        <div class="card-body items-center">
          <h2 class="card-title">Customize</h2>
        </div>
      </div>
    </div>

   
   <script src="script.js"></script>
    
  </body>
</html>
