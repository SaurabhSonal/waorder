<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Wao Solutions</title>
</head>
<body>
<header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <img src = "img/wao1.jpg" alt="wao.img"width="50"
      </svg>
      <span class="ml-3 text-xl">WAO-Solutions</span>
    </a>
    <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
      <?php echo '<a href="/index.php" class="mr-5 hover:text-gray-900">Home</a>';?>
      <?php echo '<a href="/Services.php" class="mr-5 hover:text-gray-900">Services</a>';?>
      <?php echo '<a href="/about.php" class="mr-5 hover:text-gray-900">About</a>';?>
      <?php echo '<a href="/customers.php" class="mr-5 hover:text-gray-900">Customer</a>';?>
      <?php echo '<a href="/contact.php" class="mr-5 hover:text-gray-900">Contact</a>';?>
    </nav>
  </div>
</header>
<section class="text-gray-400 bg-gray-900 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">
          <br class="hidden lg:inline-block">Welcome To War_And_Order Solution
        </h1>
        <p class="mb-8 leading-relaxed">Greetings, we are group of Experienced peoples managing, building farms making your life easier and worrying free about the resources. Give a chance and get suprised by our Services. Explore a variety range of services at the affordable prices.</p>
       </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img class="object-cover object-center rounded" alt="warandorder.img" src="img/wao2.jpg">
      </div>
    </div>
  </section>
  
</body>
</html>