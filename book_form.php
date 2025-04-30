<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn = mysqli_connect("localhost","root","","planner");

if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $location=$_POST['location'];
    $guests=$_POST['guests'];
    $arrivals=$_POST['arrivals'];
    $leaving=$_POST['leaving']; 
    $wedding_id = intval($_GET['wedding_id']);
    $anniversary_id = intval($_GET['anniversary_id']);

    $request ="INSERT INTO book_form(name, email, phone, address, location, guests, arrivals, leaving, wedding_id, anniversary_id) VALUES('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving','$wedding_id','$anniversary_id')";

    mysqli_query($conn, $request);

    header("location:book.php");
}else{
   echo "something went wrong again";

}


?>