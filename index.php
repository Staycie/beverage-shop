<?php
    function getDatafromDB() {
        return [
            ['name'=>'Orange', 'img'=>'orange.png', 'price'=>'₱ 70', 'desc'=>'Orange'],
            ['name'=>'Grapes', 'img'=>'grapes.png', 'price'=>'₱ 90', 'desc'=>'Grapes'],
            ['name'=>'Apple', 'img'=>'apple.png', 'price'=>'₱ 80', 'desc'=>'Apple'],
            ['name'=>'Banana', 'img'=>'banana.png', 'price'=>'₱ 70', 'desc'=>'Banana'],
            ['name'=>'Melon', 'img'=>'melon.png', 'price'=>'₱ 90', 'desc'=>'Melon'],
            ['name'=>'Strawberry', 'img'=>'strawberry.png', 'price'=>'₱ 90', 'desc'=>'Strawberry'],
            ['name'=>'Blueberry', 'img'=>'blueberry.png', 'price'=>'₱ 100', 'desc'=>'Blueberry'],
            ['name'=>'Avocado', 'img'=>'avocado.png', 'price'=>'₱ 100', 'desc'=>'Avocado'],
            ['name'=>'Papaya', 'img'=>'papaya.png', 'price'=>'₱ 90', 'desc'=>'Papaya']
        ];
    }

    $fruits = getDatafromDB();
?>


<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>STENSY</title>
        <link rel="shortcut icon" href="assets/img/logo/stensy-black-with-background.png" type="image/x-icon">

        <!-- BOOTSTRAP CSS LINK-->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"> -->

        <!-- FONTAWESOME LINK -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

        <!-- MAIN CSS LINK -->
        <link rel="stylesheet" href="css/main.css">

    </head>

    <!-- <body data-bs-spy="scroll" data-bs-target=".navbar"> -->
    <body>


        <!-- ======= NAVBAR ======= -->
        <nav class="navbar">
            <!-- Logo -->
            <a href="assets/img/logo/stensy-white-transparent.png" target="_blank">
                <img src="assets/img/logo/stensy-white-transparent.png" alt="Stensy" width="50" height="30">
            </a>
            <ul>
                <li class="menu">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="menu">
                    <a class="nav-link" href="#product">Product</a>
                </li>
                <li class="menu">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="menu">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
            <i class="fa-solid fa-magnifying-glass"></i>
        </nav>


        <!-- ======= HOME ======= -->
        <section id="home">
            <div class="home-container">
                <div class="front-text">
                    <div class="top">
                        <p>Fresh, <br> Smooth <br> & Tasty. </p>
                        <!-- <p>fresh</p>
                        <p>smooth</p>
                        <p>& tasty.</p> -->
                    </div>
                    <div class="center">
                        <p>
                            WE FRESHLY HARVESTED OUR <br>
                            FRUITS FOR YOU TO ENJOY <br>
                            FRESHLY MADE DRINKS <br>
                        </p>
                    </div>
                    <div class="bottom">
                        <p>
                            10% off first purchase
                        </p>
                    </div>
                </div>
                <img src="assets/img/fruits/removed-bg/front-page-fruits-f.png" alt="fruits" width="600" height="560">
            </div>
        </section>


        <!-- ======= PRODUCT ======= -->
        <section id="product">
            <div class="menu-container">
                <div class="menu-header">
                    <p>Free Shipping if you order 5 and above Stensy drinks.</p>
                </div>
                <div class="menu-list">
                    <?php
                        foreach($fruits as $fruit):
                    ?>
                    <div class="menu-item">
                        <p class="price"><?=$fruit['price']?></p>
                        <div class="menu-content">
                            <img class="img" src="assets/img/fruits/removed-bg/<?=$fruit['img']?>" alt="melon">
                            <p class="name"><?=$fruit['name']?></p>
                        </div>
                        <button>Add</button>
                    </div>

                    <!-- <div class="menu-item">
                        <p class="price">₱ 80</p>
                        <img src="assets/img/fruits/removed-bg/banana.png" alt="banana">
                        <p class="name">Banana</p>
                    </div>
                    <div class="menu-item">
                        <p class="price">₱ 80</p>
                        <img src="assets/img/fruits/removed-bg/orange.png" alt="orange">
                        <p class="name">Orange</p>
                    </div> -->
                   
                    <?php
                        endforeach;
                    ?>
                </div>
            </div>
        </section>


        <!-- ======= CONTACT ======= -->
        <section id="contact">
            <div class="contact-container">
                <p class="contact-header">MESSAGE US!</p>
                <p class="contact-body">We wanna hear your feedback to our products.</p>
                <div class="contact-name">
                    <input type="text" class="name" placeholder="Name">
                </div>
                <div class="contact-email">
                    <input type="text" class="email" placeholder="Email">
                </div>
                <div class="contact-message">
                    <input type="text" class="message" placeholder="Your Message..">
                </div>
            </div>
        </section>


        <!-- ======= MAIN JS LINK ======= -->        


    </body>
</html>