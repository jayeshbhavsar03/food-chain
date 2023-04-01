<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>The aim of developing Online Food Ordering system project is to replace the traditional way
of taking orders with computerized system. Another important reason for developing this project is to
prepare order summary reports quickly and in correct format at any point of time when required.</p>
         <p>Online Food Ordering System has a very lot of scope. This PHP project can be used by any
restaurants or fast foods for customers for keeping their order records. This project is easy, fast and
accurate. It requires less disk space. Online Food Ordering System uses MYSQL Server as backend
so there is not any chance of data loss or data security.</p>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>