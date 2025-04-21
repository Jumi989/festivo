<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Packages</title>
    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@5"
      rel="stylesheet"
      type="text/css"
    />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100">

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
            <ul class="menu menu-horizontal px-1 text-lg text-primary-content">
              <li><a href="index.html">Home</a></li>
              <li><a>Services</a></li>
              <li><a>Contact</a></li>
              <li><a>About</a></li>
    
            </ul>
          </div>
          
          <div class="navbar-end">
            <a href="login.html" class="btn btn-ghost text-lg">Login</a>
            <a href="signup.html" class="btn btn-ghost text-lg">Signup</a>
    
            
          </div>
        </div>
      </header>
    <!-- Filters -->
    <div class="container mx-auto px-6 py-4">
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
            <div class="bg-white shadow-md rounded-lg p-4">
                <img src="./pics/pack2.jpeg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                <h2 class="text-lg font-bold mt-2">Elegant Wedding</h2>
                <div class="flex items-center my-2">
                    ⭐⭐⭐⭐⭐
                    <span class="text-gray-500 ml-2">(120 Reviews)</span>
                </div> 
                <p class="text-gray-700 font-semibold">$2,999</p>
                <button class="bg-tranperant-600 text-black w-full py-2 mt-2 rounded-md hover:scale-[1.1] duration-400 ease-out transition">
                    <div class="btn btn-ghost"></div>
                    Add to Cart
                </button>
                <!-- <div>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-half-fill"></i>
                    <i class="ri-star-line"></i>
                    <i class="ri-star-line"></i>

                </div>
                <div>
                    <button>
                        <i class="ri-shopping-cart-fill"></i>
                    </button>
                </div> -->
           
               
            </div>

            <div class="bg-white shadow-md rounded-lg p-4">
                <img src="./pics/destination.jpg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                <h2 class="text-lg font-bold mt-2">Destination Wedding</h2>
                <div class="flex items-center my-2">
                    ⭐⭐⭐⭐⭐
                    <span class="text-gray-500 ml-2">(1 Reviews)</span>
                </div> 
                <p class="text-gray-700 font-semibold">$2,000</p>
                <button class="bg-tranperant-600 text-black w-full py-2 mt-2 rounded-md hover:scale-[1.1] duration-400 ease-out transition">
                    <div class="btn btn-ghost"></div>
                    Add to Cart
                </button>

                </div>

                <div class="bg-white shadow-md rounded-lg p-4">
                    <img src="./pics/home wed.jpg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                    <h2 class="text-lg font-bold mt-2">Home Wedding</h2>
                    <div class="flex items-center my-2">
                        ⭐⭐⭐⭐⭐
                        <span class="text-gray-500 ml-2">(1 Reviews)</span>
                    </div> 
                    <p class="text-gray-700 font-semibold">$2,000</p>
                    <button class="bg-tranperant-600 text-black w-full py-2 mt-2 rounded-md hover:scale-[1.1] duration-400 ease-out transition">
                        <div class="btn btn-ghost"></div>
                        Add to Cart
                    </button>
    
                    </div>

                    <div class="bg-white shadow-md rounded-lg p-4">
                        <img src="./pics/simple.jpeg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                        <h2 class="text-lg font-bold mt-2">Simple Wedding</h2>
                        <div class="flex items-center my-2">
                            ⭐⭐⭐⭐⭐
                            <span class="text-gray-500 ml-2">(1 Reviews)</span>
                        </div> 
                        <p class="text-gray-700 font-semibold">$2,000</p>
                        <button class="bg-tranperant-600 text-black w-full py-2 mt-2 rounded-md hover:scale-[1.1] duration-400 ease-out transition">
                            <div class="btn btn-ghost"></div>
                            Add to Cart
                        </button>
        
                        </div>

                        <div class="bg-white shadow-md rounded-lg p-4">
                            <img src="./pics/pack3.jpg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                            <h2 class="text-lg font-bold mt-2">Holud Ceremony</h2>
                            <div class="flex items-center my-2">
                                ⭐⭐⭐⭐⭐
                                <span class="text-gray-500 ml-2">(1 Reviews)</span>
                            </div> 
                            <p class="text-gray-700 font-semibold">$2,000</p>
                            <button class="bg-tranperant-600 text-black w-full py-2 mt-2 rounded-md hover:scale-[1.1] duration-400 ease-out transition">
                                <div class="btn btn-ghost"></div>
                                Add to Cart
                            </button>
            
                            </div>

                            <div class="bg-white shadow-md rounded-lg p-4">
                                <img src="./pics/sangeet.jpeg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                                <h2 class="text-lg font-bold mt-2">Sangeet</h2>
                                <div class="flex items-center my-2">
                                    ⭐⭐⭐⭐⭐
                                    <span class="text-gray-500 ml-2">(1 Reviews)</span>
                                </div> 
                                <p class="text-gray-700 font-semibold">$2,000</p>
                                <button class="bg-tranperant-600 text-black w-full py-2 mt-2 rounded-md hover:scale-[1.1] duration-400 ease-out transition">
                                    <div class="btn btn-ghost"></div>
                                    Add to Cart
                                </button>
                
                                </div>

                                <div class="bg-white shadow-md rounded-lg p-4">
                                    <img src="./pics/pack4.jpg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                                    <h2 class="text-lg font-bold mt-2">Simple Holud</h2>
                                    <div class="flex items-center my-2">
                                        ⭐⭐⭐⭐⭐
                                        <span class="text-gray-500 ml-2">(1 Reviews)</span>
                                    </div> 
                                    <p class="text-gray-700 font-semibold">$2,000</p>
                                    <button class="bg-tranperant-600 text-black w-full py-2 mt-2 rounded-md hover:scale-[1.1] duration-400 ease-out transition">
                                        <div class="btn btn-ghost"></div>
                                        Add to Cart
                                    </button>
                    
                                    </div>

                                    <div class="bg-white shadow-md rounded-lg p-4">
                                        <img src="./pics/pack7.jpg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                                        <h2 class="text-lg font-bold mt-2">Engagement party</h2>
                                        <div class="flex items-center my-2">
                                            ⭐⭐⭐⭐⭐
                                            <span class="text-gray-500 ml-2">(1 Reviews)</span>
                                        </div> 
                                        <p class="text-gray-700 font-semibold">$2,000</p>
                                        <button class="bg-tranperant-600 text-black w-full py-2 mt-2 rounded-md hover:scale-[1.1] duration-400 ease-out transition">
                                            <div class="btn btn-ghost"></div>
                                            Add to Cart
                                        </button>
                        
                                    </div>

                                    <div class="bg-white shadow-md rounded-lg p-4">
                                            <img src="./pics/mehedi.jpg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                                            <h2 class="text-lg font-bold mt-2">Mehedi Night</h2>
                                            <div class="flex items-center my-2">
                                                ⭐⭐⭐⭐⭐
                                                <span class="text-gray-500 ml-2">(1 Reviews)</span>
                                            </div> 
                                            <p class="text-gray-700 font-semibold">$2,000</p>
                                            <button class="bg-tranperant-600 text-black w-full py-2 mt-2 rounded-md hover:scale-[1.1] duration-400 ease-out transition">
                                                <div class="btn btn-ghost"></div>
                                                Add to Cart
                                            </button>
                            
                                    </div>

                                            <div class="bg-white shadow-md rounded-lg p-4">
                                                <img src="./pics/walima.jpeg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                                                <h2 class="text-lg font-bold mt-2">Walima</h2>
                                                <div class="flex items-center my-2">
                                                    ⭐⭐⭐⭐⭐
                                                    <span class="text-gray-500 ml-2">(1 Reviews)</span>
                                                </div> 
                                                <p class="text-gray-700 font-semibold">$2,000</p>
                                                <button class="bg-tranperant-600 text-black w-full py-2 mt-2 rounded-md hover:scale-[1.1] duration-400 ease-out transition">
                                                    <div class="btn btn-ghost"></div>
                                                    Add to Cart
                                                </button>
                                
                                                </div>

                                                <div class="bg-white shadow-md rounded-lg p-4">
                                                    <img src="./pics/simple_wali.jpeg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                                                    <h2 class="text-lg font-bold mt-2">Simple Walima</h2>
                                                    <div class="flex items-center my-2">
                                                        ⭐⭐⭐⭐⭐
                                                        <span class="text-gray-500 ml-2">(1 Reviews)</span>
                                                    </div> 
                                                    <p class="text-gray-700 font-semibold">$2,000</p>
                                                    <button class="bg-tranperant-600 text-black w-full py-2 mt-2 rounded-md hover:scale-[1.1] duration-400 ease-out transition">
                                                        <div class="btn btn-ghost"></div>
                                                        Add to Cart
                                                    </button>
                                    
                                                    </div>

                                                    <div class="bg-white shadow-md rounded-lg p-4">
                                                        <img src="./pics/reception.jpg" alt="Wedding Package" class="w-full h-40 object-cover rounded-md">
                                                        <h2 class="text-lg font-bold mt-2">Reception</h2>
                                                        <div class="flex items-center my-2">
                                                            ⭐⭐⭐⭐⭐
                                                            <span class="text-gray-500 ml-2">(1 Reviews)</span>
                                                        </div> 
                                                        <p class="text-gray-700 font-semibold">$2,000</p>
                                                        <button class="bg-tranperant-600 text-black w-full py-2 mt-2 rounded-md hover:scale-[1.1] duration-400 ease-out transition">
                                                            <div class="btn btn-ghost"></div>
                                                            Add to Cart
                                                        </button>
                                        
                                                        </div>

                


            <!-- Duplicate the above div 11 more times for 12 packages -->
            <!-- Example: Copy-Paste 11 more times -->

        </div>
    </div>

</body>
</html>
