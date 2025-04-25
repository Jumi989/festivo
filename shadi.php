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
    <header class="fixed top-0 z-50 w-full border-b ">


        <div class="navbar">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </div>
                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
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
                <ul class="menu menu-horizontal px-1 text-lg ">
                    <li><a href="index.php">Home</a></li>
                    <li><a>Services</a></li>
                    <li><a>Contact</a></li>
                    <li><a>About</a></li>

                </ul>
            </div>

            <div class="navbar-end">
                <a href="login.php" class="btn btn-ghost text-lg">Login</a>
                <a href="signup.php" class="btn btn-ghost text-lg">Signup</a>


            </div>
        </div>
    </header>
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

                <a href="book.php"
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

                <a href="book.php"
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
                <a href="book.php"
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
                <a href="book.php"
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
                <a href="book.php"
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
                <a href="book.php"
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
                <a href="book.php"
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
                <a href="book.php"
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
                <a href="book.php"
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
                <a href="book.php"
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
                <a href="book.php"
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
                <a href="book.php"
                    class="bg-tranperant-600 text-black w-full py-2 mt-4 rounded-md hover:scale-[1.1] duration-400 ease-out transition btn btn-ghost w-full"
                    name="add"> <i class="fa-solid fa-cart-shopping"></i>Book Now</a>


            </div>




            <!-- Duplicate the above div 11 more times for 12 packages -->
            <!-- Example: Copy-Paste 11 more times -->

        </div>
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
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          class="fill-current">
          <path
            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
        </svg>
      </a>
      <a>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          class="fill-current">
          <path
            d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
        </svg>
      </a>
      <a>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          class="fill-current">
          <path
            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
        </svg>
      </a>
    </div>
  </nav>
</footer>


</body>

</html>