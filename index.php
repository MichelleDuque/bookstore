<html>
<?php

require_once('connect.php');

//run queries to pull back content
$query = 'SELECT books.id, authors.id, title,published_date,email,book_image FROM books,authors WHERE books.author_id=authors.id';
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
<style>
.movie_list {
background-color:#ccc;
padding:20px;
margin-bottom:50px;
}

</style>
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

<main>
        <section class="grid-con" id="home-section">
            <h2 class="hidden">Hero Section - Blackbird Bookstore</h2>
            <div class="box col-span-full m-col-start-3 m-col-end-11 l-col-span-full xl-col-span-full" id="hero-box">
                <div id="heading-text">
                    <h2><span>FIND THE BEST</span>
                        <br>
                        BOOKS
                    </h2>
                </div>
                <div id="earbuds-image-hero">
                    <img src="images/bookstore.jpg" alt="Book Store photo">
                </div>
            </div>
        </section>

        <section class="grid-con" id="book-section">

            <div class = "box col-span-full m-col-span-full l-col-span-full xl-col-span-full" id="book-list">
            <?php
            while($row = mysqli_fetch_array($results)) {

                echo '<div class="book_list"><h2>'.$row['title'].'</h2><img src="images/'.$row['book_image'].'" alt="'.$row['title'].'"> <br><br> <button><a href="http://localhost/bookstore/details.php?id='.$row['id'].'">DETAILS</a></button></div>';
            }
            ?>

            </div>

        </section>
     </main> 
        <script src="js/main.js"></script> 
</body>
</html>