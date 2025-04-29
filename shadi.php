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
    <title>Wedding Packages</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gradient-to-r from-amber-200 via-red-300 to-green-300">


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
                <img src="./pics/pack2.jpeg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                <h2 class="text-lg font-bold mt-2">Elegant Wedding</h2>
                <div class="rating rating-xs">
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="1 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="2 star"
                        checked="checked" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="3 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="4 star" />
                    <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" aria-label="5 star" />
                </div>
                <p class="text-gray-700 font-semibold">$2,999</p>

                <a href="book.php?wedding_id=1"
                    class="bg-tranperant-600 text-black w-full py-2 mt-4 rounded-md hover:scale-[1.1] duration-400 ease-out transition btn btn-ghost w-full"
                    name="add"> <i class="fa-solid fa-cart-shopping"></i>Book Now</a>

            </div>

            <div class=" backdrop-blur- bg-white/20 shadow-md rounded-lg p-4">
                <img src="./pics/destination.jpg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                <h2 class="text-lg font-bold mt-2">Destination Wedding</h2>
                <div class="rating rating-xs">
                    <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" aria-label="1 star" />
                    <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" aria-label="2 star"
                        checked="checked" />
                    <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" aria-label="3 star" />
                    <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" aria-label="4 star" />
                    <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" aria-label="5 star" />
                </div>
                <p class="text-gray-700 font-semibold">$2,000</p>

                <a href="book.php?wedding_id=2"
                    class="bg-tranperant-600 text-black w-full py-2 mt-4 rounded-md hover:scale-[1.1] duration-400 ease-out transition btn btn-ghost w-full"
                    name="add"> <i class="fa-solid fa-cart-shopping"></i>Book Now</a>


            </div>

            <div class=" backdrop-blur- bg-white/20 shadow-md rounded-lg p-4">
                <img src="./pics/home wed.jpg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                <h2 class="text-lg font-bold mt-2">Home Wedding</h2>
                <div class="rating rating-xs">
                    <input type="radio" name="rating-3" class="mask mask-star-2 bg-orange-400" aria-label="1 star" />
                    <input type="radio" name="rating-3" class="mask mask-star-2 bg-orange-400" aria-label="2 star"
                        checked="checked" />
                    <input type="radio" name="rating-3" class="mask mask-star-2 bg-orange-400" aria-label="3 star" />
                    <input type="radio" name="rating-3" class="mask mask-star-2 bg-orange-400" aria-label="4 star" />
                    <input type="radio" name="rating-3" class="mask mask-star-2 bg-orange-400" aria-label="5 star" />
                </div>
                <p class="text-gray-700 font-semibold">$2,000</p>
                <a href="book.php?wedding_id=3"
                    class="bg-tranperant-600 text-black w-full py-2 mt-4 rounded-md hover:scale-[1.1] duration-400 ease-out transition btn btn-ghost w-full"
                    name="add"> <i class="fa-solid fa-cart-shopping"></i>Book Now</a>


            </div>

            <div class=" backdrop-blur- bg-white/20 shadow-md rounded-lg p-4">
                <img src="./pics/simple.jpeg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                <h2 class="text-lg font-bold mt-2">Simple Wedding</h2>
                <div class="rating rating-xs">
                    <input type="radio" name="rating-4" class="mask mask-star-2 bg-orange-400" aria-label="1 star" />
                    <input type="radio" name="rating-4" class="mask mask-star-2 bg-orange-400" aria-label="2 star"
                        checked="checked" />
                    <input type="radio" name="rating-4" class="mask mask-star-2 bg-orange-400" aria-label="3 star" />
                    <input type="radio" name="rating-4" class="mask mask-star-2 bg-orange-400" aria-label="4 star" />
                    <input type="radio" name="rating-4" class="mask mask-star-2 bg-orange-400" aria-label="5 star" />
                </div>
                <p class="text-gray-700 font-semibold">$2,000</p>
                <a href="book.php?wedding_id=4"
                    class="bg-tranperant-600 text-black w-full py-2 mt-4 rounded-md hover:scale-[1.1] duration-400 ease-out transition btn btn-ghost w-full"
                    name="add"> <i class="fa-solid fa-cart-shopping"></i>Book Now</a>


            </div>

            <div class=" backdrop-blur- bg-white/20 shadow-md rounded-lg p-4">
                <img src="./pics/pack3.jpg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                <h2 class="text-lg font-bold mt-2">Holud Ceremony</h2>
                <div class="rating rating-xs">
                    <input type="radio" name="rating-5" class="mask mask-star-2 bg-orange-400" aria-label="1 star" />
                    <input type="radio" name="rating-5" class="mask mask-star-2 bg-orange-400" aria-label="2 star"
                        checked="checked" />
                    <input type="radio" name="rating-5" class="mask mask-star-2 bg-orange-400" aria-label="3 star" />
                    <input type="radio" name="rating-5" class="mask mask-star-2 bg-orange-400" aria-label="4 star" />
                    <input type="radio" name="rating-5" class="mask mask-star-2 bg-orange-400" aria-label="5 star" />
                </div>
                <p class="text-gray-700 font-semibold">$2,000</p>
                <a href="book.php?wedding_id=5"
                    class="bg-tranperant-600 text-black w-full py-2 mt-4 rounded-md hover:scale-[1.1] duration-400 ease-out transition btn btn-ghost w-full"
                    name="add"> <i class="fa-solid fa-cart-shopping"></i>Book Now</a>


            </div>

            <div class=" backdrop-blur- bg-white/20 shadow-md rounded-lg p-4">
                <img src="./pics/sangeet.jpeg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                <h2 class="text-lg font-bold mt-2">Sangeet</h2>
                <div class="rating rating-xs">
                    <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" aria-label="1 star" />
                    <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" aria-label="2 star"
                        checked="checked" />
                    <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" aria-label="3 star" />
                    <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" aria-label="4 star" />
                    <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" aria-label="5 star" />
                </div>
                <p class="text-gray-700 font-semibold">$2,000</p>
                <a href="book.php?wedding_id=6"
                    class="bg-tranperant-600 text-black w-full py-2 mt-4 rounded-md hover:scale-[1.1] duration-400 ease-out transition btn btn-ghost w-full"
                    name="add"> <i class="fa-solid fa-cart-shopping"></i>Book Now</a>


            </div>

            <div class=" backdrop-blur- bg-white/20 shadow-md rounded-lg p-4">
                <img src="./pics/pack4.jpg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                <h2 class="text-lg font-bold mt-2">Simple Holud</h2>
                <div class="rating rating-xs">
                    <input type="radio" name="rating-7" class="mask mask-star-2 bg-orange-400" aria-label="1 star" />
                    <input type="radio" name="rating-7" class="mask mask-star-2 bg-orange-400" aria-label="2 star"
                        checked="checked" />
                    <input type="radio" name="rating-7" class="mask mask-star-2 bg-orange-400" aria-label="3 star" />
                    <input type="radio" name="rating-7" class="mask mask-star-2 bg-orange-400" aria-label="4 star" />
                    <input type="radio" name="rating-7" class="mask mask-star-2 bg-orange-400" aria-label="5 star" />
                </div>
                <p class="text-gray-700 font-semibold">$2,000</p>
                <a href="book.php?wedding_id=7"
                    class="bg-tranperant-600 text-black w-full py-2 mt-4 rounded-md hover:scale-[1.1] duration-400 ease-out transition btn btn-ghost w-full"
                    name="add"> <i class="fa-solid fa-cart-shopping"></i>Book Now</a>


            </div>

            <div class=" backdrop-blur- bg-white/20 shadow-md rounded-lg p-4">
                <img src="./pics/pack7.jpg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                <h2 class="text-lg font-bold mt-2">Engagement party</h2>
                <div class="rating rating-xs">
                    <input type="radio" name="rating-8" class="mask mask-star-2 bg-orange-400" aria-label="1 star" />
                    <input type="radio" name="rating-8" class="mask mask-star-2 bg-orange-400" aria-label="2 star"
                        checked="checked" />
                    <input type="radio" name="rating-8" class="mask mask-star-2 bg-orange-400" aria-label="3 star" />
                    <input type="radio" name="rating-8" class="mask mask-star-2 bg-orange-400" aria-label="4 star" />
                    <input type="radio" name="rating-8" class="mask mask-star-2 bg-orange-400" aria-label="5 star" />
                </div>
                <p class="text-gray-700 font-semibold">$2,000</p>
                <a href="book.php?wedding_id=8"
                    class="bg-tranperant-600 text-black w-full py-2 mt-4 rounded-md hover:scale-[1.1] duration-400 ease-out transition btn btn-ghost w-full"
                    name="add"> <i class="fa-solid fa-cart-shopping"></i>Book Now</a>

            </div>

            <div class=" backdrop-blur- bg-white/20 shadow-md rounded-lg p-4">
                <img src="./pics/mehedi.jpg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                <h2 class="text-lg font-bold mt-2">Mehedi Night</h2>
                <div class="rating rating-xs">
                    <input type="radio" name="rating-9" class="mask mask-star-2 bg-orange-400" aria-label="1 star" />
                    <input type="radio" name="rating-9" class="mask mask-star-2 bg-orange-400" aria-label="2 star"
                        checked="checked" />
                    <input type="radio" name="rating-9" class="mask mask-star-2 bg-orange-400" aria-label="3 star" />
                    <input type="radio" name="rating-9" class="mask mask-star-2 bg-orange-400" aria-label="4 star" />
                    <input type="radio" name="rating-9" class="mask mask-star-2 bg-orange-400" aria-label="5 star" />
                </div>
                <p class="text-gray-700 font-semibold">$2,000</p>
                <a href="book.php?wedding_id=9"
                    class="bg-tranperant-600 text-black w-full py-2 mt-4 rounded-md hover:scale-[1.1] duration-400 ease-out transition btn btn-ghost w-full"
                    name="add"> <i class="fa-solid fa-cart-shopping"></i>Book Now</a>


            </div>

            <div class=" backdrop-blur- bg-white/20 shadow-md rounded-lg p-4">
                <img src="./pics/walima.jpeg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                <h2 class="text-lg font-bold mt-2">Walima</h2>
                <div class="rating rating-xs">
                    <input type="radio" name="rating-10" class="mask mask-star-2 bg-orange-400" aria-label="1 star" />
                    <input type="radio" name="rating-10" class="mask mask-star-2 bg-orange-400" aria-label="2 star"
                        checked="checked" />
                    <input type="radio" name="rating-10" class="mask mask-star-2 bg-orange-400" aria-label="3 star" />
                    <input type="radio" name="rating-10" class="mask mask-star-2 bg-orange-400" aria-label="4 star" />
                    <input type="radio" name="rating-10" class="mask mask-star-2 bg-orange-400" aria-label="5 star" />
                </div>
                <p class="text-gray-700 font-semibold">$2,000</p>
                <a href="book.php?wedding_id=10"
                    class="bg-tranperant-600 text-black w-full py-2 mt-4 rounded-md hover:scale-[1.1] duration-400 ease-out transition btn btn-ghost w-full"
                    name="add"> <i class="fa-solid fa-cart-shopping"></i>Book Now</a>


            </div>

            <div class=" backdrop-blur- bg-white/20 shadow-md rounded-lg p-4">
                <img src="./pics/simple_wali.jpeg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                <h2 class="text-lg font-bold mt-2">Simple Walima</h2>
                <div class="rating rating-xs">
                    <input type="radio" name="rating-11" class="mask mask-star-2 bg-orange-400" aria-label="1 star" />
                    <input type="radio" name="rating-11" class="mask mask-star-2 bg-orange-400" aria-label="2 star"
                        checked="checked" />
                    <input type="radio" name="rating-11" class="mask mask-star-2 bg-orange-400" aria-label="3 star" />
                    <input type="radio" name="rating-11" class="mask mask-star-2 bg-orange-400" aria-label="4 star" />
                    <input type="radio" name="rating-11" class="mask mask-star-2 bg-orange-400" aria-label="5 star" />
                </div>
                <p class="text-gray-700 font-semibold">$2,000</p>
                <a href="book.php?wedding_id=11"
                    class="bg-tranperant-600 text-black w-full py-2 mt-4 rounded-md hover:scale-[1.1] duration-400 ease-out transition btn btn-ghost w-full"
                    name="add"> <i class="fa-solid fa-cart-shopping"></i>Book Now</a>


            </div>

            <div class=" backdrop-blur- bg-white/20 shadow-md rounded-lg p-4">
                <img src="./pics/reception.jpg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                <h2 class="text-lg font-bold mt-2">Reception</h2>
                <div class="rating rating-xs">
                    <input type="radio" name="rating-12" class="mask mask-star-2 bg-orange-400" aria-label="1 star" />
                    <input type="radio" name="rating-12" class="mask mask-star-2 bg-orange-400" aria-label="2 star"
                        checked="checked" />
                    <input type="radio" name="rating-12" class="mask mask-star-2 bg-orange-400" aria-label="3 star" />
                    <input type="radio" name="rating-12" class="mask mask-star-2 bg-orange-400" aria-label="4 star" />
                    <input type="radio" name="rating-12" class="mask mask-star-2 bg-orange-400" aria-label="5 star" />
                </div>
                <p class="text-gray-700 font-semibold">$2,000</p>
                <a href="book.php?wedding_id=12"
                    class="bg-tranperant-600 text-black w-full py-2 mt-4 rounded-md hover:scale-[1.1] duration-400 ease-out transition btn btn-ghost w-full"
                    name="add"> <i class="fa-solid fa-cart-shopping"></i>Book Now</a>


            </div>




            <!-- Duplicate the above div 11 more times for 12 packages -->
            <!-- Example: Copy-Paste 11 more times -->

        </div>
    </div>
    <?php
    include 'footer.php';
    ?>


</body>

</html>