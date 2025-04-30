<?php
require_once 'connect.php';
session_start();

if (isset($_SESSION["email"])) {
  if ($_SESSION["role"] === 'admin') {
    header("location: /adminIndex.php");
  } else {
    header("location: /index.php");
  }
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
    $statement = $conn->prepare("SELECT id, name, email, password, role FROM users WHERE email = ?");
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

      if($role === 'admin'){
        header("location: ./adminIndex.php");
      } else{
        header("location: ./index.php");
      }
      exit;
    }
  }
    $statement->close();

    $error = "Email or Password invalid";
  }
}
include 'navbar.php';
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
            <div><a href="forgot-password.php" class="link link-hover text-base">Forgot password?</a></div>
            <button class="btn btn-neutral mt-4" name="login">Login</button>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <script src="script.js"></script>

  <?php
include 'footer.php';
?>
</body>

</html>