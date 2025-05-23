<?php
session_start();

$authenticated = false;
if (isset($_SESSION["email"])) {
  $authenticated = true;
}

?>

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
          <li><a href="adminIndex.php">Home</a></li>
          <li><a>Contact</a></li>
          <li><a href="aboutus.php">About</a></li>

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