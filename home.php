<!DOCTYPE html>
<html class="h-full bg-gray-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="images/favicon.png" type="image/gif" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
  <title>Healet</title>
  </head>
  <body class="h-full">
<div class="min-h-full">
<?php include 'component/navbar_home.php'?>
<?php include 'component/header_home.php'?>
 
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
     
    
<!-- table product -->
<?php include 'component/section_product.php'?>



    </div>
  </main>
</div>


<?php include 'component/header_home.php'?>
 
  <!-- end header section -->

  <!-- about section -->

 

  <!-- end about section -->

  <!-- info section -->


  <?php include 'component/info_section_home.php'?>


<?php include 'component/footer_home.php'?>
  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>
</html>