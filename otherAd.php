<?php
include 'navbarAd.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Other Events</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@latest/dist/full.css" rel="stylesheet" />
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-300 via-purple-400 to-pink-200">
<div class="container mx-auto px-6 pt-20">
    <div class="flex justify-between">
  <input type="text" placeholder="Search packages..." class="p-2 w-1/3 border rounded-md" />
  
  <div class="flex space-x-4">
  <div class="p-2 px-4">  
  <a href="addFormO.php" class="p-2 border rounded-md px-4">ADD</a></div>
    <select class="p-2 border rounded-md">
      <option>Sort by Price</option>
      <option>Low to High</option>
      <option>High to Low</option>
    </select>
  </div>
</div>
</div>
<?php
include 'connect.php';

// Prevent caching to ensure fresh data
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

$result = mysqli_query($conn, "SELECT * FROM other");
?>

<div class="container mx-auto px-6 py-4">
  <!-- Define a single grid container for all cards -->
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    <?php while ($record = mysqli_fetch_assoc($result)) { ?>
      <div class="backdrop-blur- bg-white/20 shadow-md rounded-lg p-4">
        <img src="data:image/jpeg;base64,<?php echo base64_encode($record['photo']); ?>" 
             alt="<?php echo htmlspecialchars($record['name']); ?>" 
             class="w-full h-40 object-cover rounded-md">
        <h2 class="text-lg font-bold mt-2"><?php echo htmlspecialchars($record['name']); ?></h2>
        <p class="text-gray-700 font-semibold"><?php echo htmlspecialchars($record['description']); ?></p>
        <a href="deleteO.php?other_id=<?php echo $record['o_id']; ?>" 
           class="delete-btn bg-transparent-600 text-black w-full py-2 mt-4 rounded-md hover:scale-[1.1] duration-400 ease-out transition btn btn-ghost" 
           onclick="return confirm('Are you sure you want to delete this wedding package?');">
           <i class="fa-solid fa-trash"></i> Delete
        </a>
      </div>
    <?php } ?>
  </div>
</div>


  <?php
  include 'footer.php';
  ?>

</body>

</html>