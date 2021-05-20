<?php 
require_once __DIR__ . '/partials/database.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>
    <!--Style-->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <!--header-->
   <header>
       <div class="container-img">
         <img src="./img/logo.png" alt="Logo spotify">
       </div>
   </header>
   <!--main-->
   <main>

       <div class="albums container">
          <?php foreach ($database as $data) {
              //var_dump($data);  ?>
            <div class="album-content">
               <img src="<?php echo $data['poster']; ?>" alt="Logo album">
               <h3><?php echo $data ['title'] ?></h3>
               <h3><?php echo $data ['author']?></h3>
               <h4><?php echo $data ['year']?></h4>
               <h5><?php echo $data ['genre']?></h5>
            </div>
        
       <?php } ?>
    </div>
   </main>
    
</body>
</html>
