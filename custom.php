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
<html data-theme="light" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Event Booking</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@latest/dist/full.css" rel="stylesheet" />
</head>

<body
  class="bg-gradient-to-r from-indigo-300 from-10% via-sky-300 via-30% to-emerald-200 to-90% text-black min-h-screen">


  <div class=" pt-20 flex items-start container mx-auto">
    <!-- Sidebar -->
    <div class="w-64 bg-white/15 shadow-lg p-5 text-black rounded-box mt-4">
      <h2 class="text-2xl font-bold mb-8 ">Categories</h2>
      <ul class="space-y-4">
        <li>
          <button onclick="showCategory('food')" class="btn btn-outline btn-block">
            Food
          </button>
        </li>
        <li>
          <button onclick="showCategory('decoration')" class="btn btn-outline btn-block">
            Decoration
          </button>
        </li>
        <li>
          <button onclick="showCategory('stage')" class="btn btn-outline btn-block">
            Stage
          </button>
        </li>
        <li>
          <button onclick="showCategory('entertainment')" class="btn btn-outline btn-block">
            Entertainment
          </button>
        </li>
        <li>
          <button onclick="showCategory('venue')" class="btn btn-outline btn-block">
            Venue
          </button>
        </li>
      </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-10">
      <h1 class="text-4xl font-bold mb-8" id="category-title">
        Select a Category
      </h1>

      <div id="items" class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Items will load here -->
      </div>
    </div>
  </div>

  <button onclick="openCart()" class="btn btn-primary fixed bottom-6 right-6 shadow-lg">
    🛒 Selected Items (<span id="cart-count">0</span>)
  </button>

  <!-- Cart Modal -->
  <dialog id="cartModal" class="modal text-black">
    <div class="modal-box">
      <h3 class="font-bold text-lg mb-4 ">Your Selected Items</h3>
      <div class="overflow-x-auto">
        <table class="table text-black">

          <tbody id="cart-items">

            <!-- <tr>
                <th>1</th>
                <td>Cy Ganderton</td>
                <td>Quality Control Specialist</td>
                <td>Blue</td>
              </tr>
               -->
          </tbody>
        </table>
      </div>
      <p class="totalprice text-right mr-28"></p>
      <div class="modal-action">

        <a href="./book.php" class="btn">Book</a>

      </div>
    </div>
  </dialog>

  <script>
    const data = {
      food: [
        {
          name: "Buffet Dinner",
          description: "Wide variety of dishes",
          img: "./pics/buffet.jpg",
          price: 1200,
        },
        {
          name: "3-Course Meal",
          description: "Starter, Main & Dessert",
          img: "./pics/meal.jpg",
          price: 1200,
        },
        {
          name: "Eternal Feast",
          description:
            "Bruschetta Trio,Mini Crab Cakes, Herb-Crusted Chicken,Grilled Salmon,Vegetable Risotto,Wedding Cake",
          img: "./pics/feast.jpg",
          price: 1200,
        },
        {
          name: "Corporate Evening",
          description: "Snacks and Drinks",
          img: "./pics/corporate.jpg",
          price: 1200,
        },
        {
          name: "Birthday Meal",
          description: "Snacks and Cake",
          img: "./pics/birthdaymeal.webp",
          price: 1200,
        },
        {
          name: "BBQ Party",
          description: "Grilled Meat, Fish, Veggies & Drinks",
          img: "./pics/bbq.webp",
          price: 1200,
        },
      ],
      decoration: [
        {
          name: "Classic Theme",
          description: "Elegant white & gold setup",
          img: "./pics/classic.webp",
          price: 1200,
        },
        {
          name: "Rustic Theme",
          description: "Wood and vintage style",
          img: "./pics/rustic.jpg",
          price: 1200,
        },
        {
          name: "Floral Fantasy",
          description: "Flower Bliss",
          img: "./pics/floral.jpg",
          price: 1200,
        },
        {
          name: "Rainbow Party",
          description: "Unicorns and bubbles",
          img: "./pics/rainbow.jpg",
          price: 1200,
        },
        {
          name: "Prefessional Event",
          description: "Sound and Lights",
          img: "./pics/office.jpg",
          price: 1200,
        },
        {
          name: "Minimalistic Themed Party",
          description: "Cozy space setup ",
          img: "./pics/min.jpg",
          price: 1200,
        },
      ],
      stage: [
        {
          name: "Floral Stage",
          description: "Fresh flowers setup",
          img: "./pics/stage.jpg",
          price: 200,
        },
        {
          name: "LED Stage",
          description: "Modern lighting effects",
          img: "./pics/led.jpg",
          price: 300,
        },
        {
          name: "Fashion Show Stage",
          description: "Dramatic Lighting",
          img: "./pics/show.png",
          price: 400,
        },
        {
          name: "Reception Stage",
          description: "For receptions, social functions, after-parties",
          img: "./pics/recep.jpg",
          price: 1000,
        },
        {
          name: "Themed Stage",
          description: "Decorated stage for birthdays",
          img: "./pics/bd.jpg",
          price: 600,
        },
        {
          name: "Open Mic Stage",
          description: "Small casual performances",
          img: "./pics/mic.jpg",
          price: 800,
        },
      ],
      entertainment: [
        {
          name: "Live Band",
          description: "Music from professionals",
          img: "./pics/band.jpg",
          price: 400,

        },
        {
          name: "DJ Night",
          description: "Dance till you drop!",
          img: "./pics/dj.jpeg",
          price: 300,
        },
        {
          name: "Dance Performance",
          description: "Dance till you drop!",
          img: "./pics/dance.jpeg",
          price: 200,
        },
        {
          name: "Magic Show",
          description: "Magicians for kids' parties and adult events",
          img: "./pics/magic.jpeg",
          price: 200,
        },
        {
          name: "Fireworks Show",
          description: "Dance till you drop!",
          img: "./pics/firewoks.jpg",
          price: 700,
        },
        {
          name: "Puppet Show",
          description: "Dance till you drop!",
          img: "./pics/p.png",
          price: 100,
        },
      ],
      venue: [
        {
          name: "Banquet Hall",
          description: "Spacious event space",
          img: "./pics/hall.jpg",
          price: 1000,
        },
        {
          name: "Outdoor Garden",
          description: "Nature-themed venue",
          img: "./pics/garden.jpg",
          price: 1200,
        },
        {
          name: "Rooftop Venue",
          description: "Nature-themed venue",
          img: "./pics/roof.jpg",
          price: 800,
        },
        {
          name: "Boat Venue",
          description: "Nature-themed venue",
          img: "./pics/yacht.jpg",
          price: 2000,
        },
        {
          name: "Community Centre",
          description: "Nature-themed venue",
          img: "./pics/center.jpg",
          price: 700,
        },
          {

          name: "Vineyard Venue",
          description: "Nature-themed venue",
          img: "./pics/vineyard.avif",
          price: 1500,
        },
      ],
    };

    let cart = [];

    function showCategory(category) {
      const itemsDiv = document.getElementById("items");
      const title = document.getElementById("category-title");
      title.textContent =
        category.charAt(0).toUpperCase() + category.slice(1);

      itemsDiv.innerHTML = "";

      data[category].forEach((item, index) => {
        const card = `
          <div class="card white/15 shadow-xl">
            <figure><img src="${item.img}" alt="${item.name}" class="w-full h-60 object-cover"/></figure>
            <div class="card-body">
              <h2 class="card-title">${item.name}</h2>
              <p>${item.description}</p>
               <p class="font-bold text-lg">$ ${item.price}</p>
              <div class="card-actions justify-end">
                <button class="btn btn-primary" onclick="addToCart('${category}', ${index})">Select</button>
              </div>
            </div>
          </div>
        `;
        itemsDiv.innerHTML += card;
      });
    }
    function addToCart(category, index) {
      const selectedItem = data[category][index];
      cart.push(selectedItem);
      updateCartCount();
    }

    function updateCartCount() {
      document.getElementById("cart-count").textContent = cart.length;
    }

    function openCart() {
      const cartList = document.getElementById("cart-items");
      const totalprice = document.querySelector(".totalprice");
      cartList.innerHTML = "";

      let total = 0;

      cart.forEach((item, index) => {
        const tablerow = document.createElement("tr");
        const namecell = document.createElement("td");
        const pricecell = document.createElement("td");
        pricecell.innerText = item.price;
        namecell.innerText = item.name;
        tablerow.appendChild(namecell);
        tablerow.appendChild(pricecell);



        total += item.price;
        cartList.appendChild(tablerow);
      });

      totalprice.innerText = "Total " + total;

      document.getElementById("cartModal").showModal();
    }

  </script>

  <?php
  include 'footer.php';
  ?>
</body>

</html>