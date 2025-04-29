<?php
require_once 'connect.php';
session_start();

if (isset($_SESSION["email"])) {
  header("location: /index.php");
  exit;
}
$email = "";
$error = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (empty($email) || empty($password)) {
    $error = 'Email and Password are required';
  } else {
    $statement = $conn->prepare("SELECT id, name,email, password, role FROM users WHERE email = ?");
    $statement->bind_param("s", $email);
    $statement->execute();

    $statement->bind_result($id, $name, $email, $stored_password, $role);

    if ($statement->fetch()) {
      if (password_verify($password, $stored_password)) {

        $_SESSION["id"] = $id;
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
        $_SESSION["role"] = $role;

        header("location: ./index.php");
        exit;
      }
    }

    $statement->close();

    $error = "Email or Password invalid";
  }
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
        <a href="login.php" class="btn btn-ghost text-lg">Login</a>
        <a href="register.php" class="btn btn-ghost text-lg">Signup</a>


      </div>
    </div>
  </header>
  <!-- Hero Section -->
  <div class="hero min-h-screen" style="background-image: url(./pics/3.jpg)">
    <div class="hero-overlay"></div>
    <div class="hero-content text-neutral-content text-center">
      <div class="card backdrop-blur-sm bg-purple-950/30 w-95 h-110 rounded-md">


        <?php if (!empty($error)) { ?>
          <div role="alert" class="alert alert-info alert-outline">
            <strong><?= $error ?></strong>

          </div>

        <?php } ?>

        <form action="login.php" method="post" class="card-body justify-center items-center">
          <h3 class="text-xl mb-5">Login</h3>
          <fieldset class="fieldset w-80">

            <label class="fieldset-label text-lg mb-1">Email</label>
            <input type="email" class="input mb-5" name="email" placeholder="Email" value="<?= $email ?>" />
            <label class="fieldset-label text-lg mb-1">Password</label>
            <input type="password" class="input mb-5" name="password" placeholder="Password" />
            <div><a class="link link-hover text-base">Forgot password?</a></div>
            <button class="btn btn-neutral mt-4" name="login">Login</button>
          </fieldset>
        </form>

      </div>
    </div>
  </div>








  <script src="script.js"></script>

</body>

</html>