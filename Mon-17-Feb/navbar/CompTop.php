<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="app.css">
  <title>Document</title>
</head>
<body>
  
  <?= $sInjectActiveLink ?? 'home' ?>

  <nav>
    <div class="<?= $sInjectActiveLink =='home'?'active':''?>">
      <a href="index.php">Home</a>
    </div>
    <div class="<?= $sInjectActiveLink =='about-us'?'active':''?>">
      <a href="about-us.php">about-us</a>
    </div>
    <div  class="">
      <a href="signup.php">signup</a>
    </div>    

  </nav>

