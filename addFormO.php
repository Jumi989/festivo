<?include 'navbarAd.php';?>
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
    <div class="hero min-h-screen" style="background-image: url(./pics/form.jpg)">
      <div class="hero-overlay"></div>
      <div class="hero-content text-neutral-content text-center">
        <div class="card backdrop-blur- bg-white/15 w-[900px] h-122 rounded-md">
        
        <form action="addO.php" method="post" enctype="multipart/form-data" class="card-body flex flex-col items-center">
  <h2 class="text-2xl mb-4 text-center">Add a Package</h2>

  <fieldset class="space-y-4 w-72">
    <div class="flex flex-col">
      <label class="text-base text-center">Name</label>
      <input type="text" class="input w-full" name="name" placeholder="Package name" required/>
    </div>

    <div class="flex flex-col">
      <label class="text-base text-center">Description</label>
      <input type="text" class="input w-full" name="description" placeholder="Description" required/>
    </div>

    <div class="flex flex-col">
      <label class="text-base text-center">Photo</label>
      <input type="file" id="picture" class="input w-full" name="photo" accept="image/*" required/>
    </div>
  </fieldset>
  <button type="submit" class="btn btn-neutral mt-6 w-32" name="Add">Add</button>
</form>
          </div>
      </div>
    </div>
<?
include 'footer.php';?>
    </body>
</html>
