<?php
session_start(); // Always start session first

if (!isset($_SESSION['id'])) {
    // Not logged in, redirect to login page
    header("Location: login.php");
    exit;
}

// User is logged in, show private content
// eo "Welcome, " . $_SESSION['username'] . "!";

include 'navbar.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anniversary Packages</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gradient-to-r from-rose-400  via-red-200 to-stone-300">


    <!-- Navbar -->
    
    <!-- Filters -->
    <div class="container mx-auto px-6 pt-20">
        <div class="flex justify-between">
            <input type="text" placeholder="Search packages..." class="p-2 w-1/3 border rounded-md">
            <select class="p-2 border rounded-md">
                <option>Sort by Price</option>
                <option>Low to High</option>
                <option>High to Low</option>
            </select>
        </div>
    </div>

    <!-- Packages Grid -->
    <div class="container mx-auto px-6 py-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

            <!-- Package Card -->
            <div class=" backdrop-blur- bg-white/20 shadow-md rounded-lg p-4">
                <img src="./pics/versary3.webp" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                <h2 class="text-lg font-bold mt-2">Me n U</h2>
                <div class="rating rating-xs">
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="1 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="2 star"
                        checked="checked" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="3 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="4 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="5 star" />
                </div>
                <p class="text-gray-700 font-semibold">$2,999</p>

                <a href="book.php?anniversary=1"
                    class="bg-tranperant-600 text-black w-full py-2 mt-4 rounded-md hover:scale-[1.1] duration-400 ease-out transition btn btn-ghost w-full"
                    name="add"> <i class="fa-solid fa-cart-shopping"></i>Book Now</a>




            </div>

        <!-- Package Card -->
        <div class=" backdrop-blur- bg-white/20 shadow-md rounded-lg p-4">
                <img src="./pics/versary1.jpeg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                <h2 class="text-lg font-bold mt-2">Old Is Gold</h2>
                <div class="rating rating-xs">
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="1 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="2 star"
                        checked="checked" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="3 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="4 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="5 star" />
                </div>
                <p class="text-gray-700 font-semibold">$2,999</p>

                <a href="book.php?anniversary=2"
                    class="bg-tranperant-600 text-black w-full py-2 mt-4 rounded-md hover:scale-[1.1] duration-400 ease-out transition btn btn-ghost w-full"
                    name="add"> <i class="fa-solid fa-cart-shopping"></i>Book Now</a>


            </div>

           <!-- Package Card -->
           <div class=" backdrop-blur- bg-white/20 shadow-md rounded-lg p-4">
                <img src="./pics/versary4.jpg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                <h2 class="text-lg font-bold mt-2">Weekend Getaway</h2>
                <div class="rating rating-xs">
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="1 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="2 star"
                        checked="checked" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="3 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="4 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="5 star" />
                </div>
                <p class="text-gray-700 font-semibold">$2,999</p>

                <a href="book.php?anniversary=3"
                    class="bg-tranperant-600 text-black w-full py-2 mt-4 rounded-md hover:scale-[1.1] duration-400 ease-out transition btn btn-ghost w-full"
                    name="add"> <i class="fa-solid fa-cart-shopping"></i>Book Now</a>




            </div>

           <!-- Package Card -->
           <div class=" backdrop-blur- bg-white/20 shadow-md rounded-lg p-4">
                <img src="./pics/movie.jpg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                <h2 class="text-lg font-bold mt-2">Movie Night</h2>
                <div class="rating rating-xs">
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="1 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="2 star"
                        checked="checked" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="3 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="4 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="5 star" />
                </div>
                <p class="text-gray-700 font-semibold">$2,999</p>

                <a href="book.php?anniversary=4"
                    class="bg-tranperant-600 text-black w-full py-2 mt-4 rounded-md hover:scale-[1.1] duration-400 ease-out transition btn btn-ghost w-full"
                    name="add"> <i class="fa-solid fa-cart-shopping"></i>Book Now</a>




            </div>

      <!-- Package Card -->
          <div class=" backdrop-blur- bg-white/20 shadow-md rounded-lg p-4">
                <img src="./pics/versary6.jpg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                <h2 class="text-lg font-bold mt-2">Anniversary trip dinner</h2>
                <div class="rating rating-xs">
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="1 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="2 star"
                        checked="checked" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="3 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="4 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="5 star" />
                </div>
                <p class="text-gray-700 font-semibold">$2,999</p>

                <a href="book.php?anniversary=5"
                    class="bg-tranperant-600 text-black w-full py-2 mt-4 rounded-md hover:scale-[1.1] duration-400 ease-out transition btn btn-ghost w-full"
                    name="add"> <i class="fa-solid fa-cart-shopping"></i>Book Now</a>




            </div>

      <!-- Package Card -->
          <div class=" backdrop-blur- bg-white/20 shadow-md rounded-lg p-4">
                <img src="./pics/versary7.webp" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                <h2 class="text-lg font-bold mt-2">Sweet home anniversary</h2>
                <div class="rating rating-xs">
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="1 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="2 star"
                        checked="checked" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="3 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="4 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="5 star" />
                </div>
                <p class="text-gray-700 font-semibold">$2,999</p>

                <a href="book.php?anniversary=6"
                    class="bg-tranperant-600 text-black w-full py-2 mt-4 rounded-md hover:scale-[1.1] duration-400 ease-out transition btn btn-ghost w-full"
                    name="add"> <i class="fa-solid fa-cart-shopping"></i>Book Now</a>




            </div>

 <!-- Package Card -->
           <div class=" backdrop-blur- bg-white/20 shadow-md rounded-lg p-4">
                <img src="./pics/soiree.jpg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                <h2 class="text-lg font-bold mt-2">Anniversary Soirée</h2>
                <div class="rating rating-xs">
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="1 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="2 star"
                        checked="checked" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="3 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="4 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="5 star" />
                </div>
                <p class="text-gray-700 font-semibold">$2,999</p>

                <a href="book.php?anniversary=7"
                    class="bg-tranperant-600 text-black w-full py-2 mt-4 rounded-md hover:scale-[1.1] duration-400 ease-out transition btn btn-ghost w-full"
                    name="add"> <i class="fa-solid fa-cart-shopping"></i>Book Now</a>




            </div>

             <!-- Package Card -->
             <div class=" backdrop-blur- bg-white/20 shadow-md rounded-lg p-4">
                <img src="./pics/picnic.avif" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                <h2 class="text-lg font-bold mt-2">Backyard Picnic</h2>
                <div class="rating rating-xs">
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="1 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="2 star"
                        checked="checked" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="3 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="4 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="5 star" />
                </div>
                <p class="text-gray-700 font-semibold">$2,999</p>

               <a href="book.php?anniversary=8"
                    class="bg-tranperant-600 text-black w-full py-2 mt-4 rounded-md hover:scale-[1.1] duration-400 ease-out transition btn btn-ghost w-full"
                    name="add"> <i class="fa-solid fa-cart-shopping"></i>Book Now</a>




            </div>
           
        </div>
    </div>
    <?php
include 'footer.php';
?>

</body>

</html>