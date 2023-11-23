<html>
<?php

require_once('connect.php');

//run queries to pull back content
$query = 'SELECT * FROM books, authors WHERE books.author_id = authors.id AND books.id ='.$_GET['id'];

//$_GET[] is a pre-built srray in PHP, that stores any value coming from a URL

$results = mysqli_query($connect,$query);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2436fc0b94.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <title>Blackbird Bookstore</title>
    <link rel="Rock Revolution icon" type="image/svg" href="images/fav_icon.png"/>
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>

<body>

<header id="main-header" class="grid-con">

<nav class="box m-col-start-6 m-col-end-8 l-col-start-6 l-col-end-8 xl-col-start- xl-col-end-8" id="main-nav">
    <ul>
        <li><a href="index.php">HOME</a></li>
    </ul>
</nav>

<div class="box col-start-1 col-end-2 m-col-start-11 m-col-end-13 l-col-start-11 l-col-end-13 xl-col-start-11 xl-col-end-13" id="logo-section">
    <a href="index.php"><img id="image-logo" src="images/logo.png" alt="Blackbird Bookstore Logo"></a>
</div>

<div class="box col-start-4 col-end-5" id="burger-nav">
    <h2 class="hidden">Main Navigation</h2>
    <button class="hamburger">
        <img src="images/burger.png" alt="Burger Menu" id="hamburger-image">
    </button>  
</div>
<nav class="burger_menu">
    <li><a href="index.php">HOME</a></li>
</nav>
</header>

<section class="grid-con" id="details-section">

<div class = "box col-span-full m-col-span-full l-col-span-full xl-col-span-full book-details">
<?php
while($row = mysqli_fetch_array($results)) {
echo '<div class="books-photo"><img src="images/'.$row['book_image'].'" alt="'.$row['title'].'"></div><div class="books-info"><h2>'.$row['title'].'</h2> <h3>'.$row['name'].'</h3><h4>('.$row['published_date'].')</h4><h5>'.$row['email'].'</h5></div>';

}
?>

</div>
</section>

</section>
</body>
</html>