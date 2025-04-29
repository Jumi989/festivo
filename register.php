<?php
require_once 'connect.php';
session_start();

if (isset($_SESSION["email"])) {
 header("location: /index.php");
 exit;
}

$name = "";
$email = "";
$password = "";
$confirmpassword = "";
$role = "";

$name_error = "";
$email_error = "";
$password_error = "";
$confirmpassword_error = "";
$role_error = "";

$error = false;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password= $_POST['password'];
  $confirmpassword = $_POST['confirmpassword'];
  $role=$_POST['role'];

  if (empty($name)) {
    $name_error = "Name is required";
    $error = true;
   
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_error = "email format is not valid";
    $error = true;
   
  }

  $statement = $conn->prepare("SELECT id FROM users WHERE email = ?");
  $statement->bind_param("s",  $email);
  $statement->execute();

  $statement ->store_result();
  if ($statement->num_rows > 0) {
    $email_error = "Email is already used";
    $error = true;
  }

  $statement->close();



  if (strlen($password ) < 6) {
    $password_error = "Password must have atleast 6 characters";
   $error = true;
  }

  if ($confirmpassword != $password) {
    $confirmpassword_error = "Password and Confirm password  do not match";
    $error = true;
  }

if(!$error){
  $password = password_hash($password, PASSWORD_DEFAULT);
  $statement = $conn->prepare("INSERT INTO users (name, email, password, role) " . "VALUES (?, ?, ?, ?)");
  $statement->bind_param("ssss", $name,$email, $password, $role);

  $statement->execute();

  $insert_id = $statement->insert_id;
  $statement->close();

  $_SESSION["id"] = $insert_id;
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
?>

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
        <div class="card backdrop-blur-sm bg-purple-950/30 w-95 h-145 rounded-md">
        
            <form action="register.php" method="post" class="card-body justify-center items-center">
                <h3 class="text-xl ">Register</h3>
              <fieldset class="fieldset w-80">
              
                <label class="fieldset-label text-base ">Name</label>
                <input type="Name" class="input" name="name" placeholder="Name" value="<?= $name ?>" />
                <span> <?= $name_error?> </span>
                <label class="fieldset-label text-base" >Email</label>
                <input type="email" class="input" name="email"  placeholder="Email" value="<?= $email ?>"/>
                <span> <?= $email_error?> </span>
                <label class="fieldset-label text-base ">Password</label>
                <input type="password" class="input " name="password" placeholder="Password" value="<?= $password ?>"/>
                <span> <?= $password_error?> </span>
                <label class="fieldset-label text-base ">Confirm Password</label>
                <input type="Confirm Password" class="input" name="confirmpassword" placeholder="Confirm Password" value="<?= $confirmpassword ?>" />
                <span> <?= $confirmpassword_error?> </span>
                <label class="fieldset-label text-base ">Role</label>
                <select name="role" class="select" required>
                        <option disabled selected value="" >Select Role</option>
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                        
                </select>
                
                <button class="btn btn-neutral mt-4" name="register" >Register</button>
                <a href="./index.php" class="btn btn-ghost" name="register" >Cancel</a>
                 
              </fieldset>
            </form>
           
          </div>
            
           
      </div>
    </div>

    
    

 
    

   
   <script src="script.js"></script>
    
  </body>
</html>
