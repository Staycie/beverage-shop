<?php
    function getDatafromDB() {
        return [
            ['name'=>'Melon', 'img'=>'']
        ];
    }
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
        <!-- <link rel="stylesheet" href="css/style.css"> -->

        <style>
            /* front-text top font style*/
            @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap');
            /* front-text center font style */
            @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Sanchez:ital@0;1&display=swap');
            /* front-text bottom font style */
            @import url('https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=League+Spartan:wght@800&family=Sanchez:ital@0;1&display=swap');


            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            html {
                scroll-behavior: smooth;
                overflow-x: hidden;
            }

            body {
                /* background-color: linear-gradient(90deg, rgba(#0097b2), rgba(#7ed957)); */
                
                font-family: 'Courier New', Courier, monospace;
                height: 100vh;
                overflow: auto;
                background-color: #0097b2; /* For browsers that do not support gradients */
                background-image: linear-gradient(to right, #0097b2 , #7ed957);

            }


            /* NAVBAR */
            nav {
                position: sticky;
                top: 0;
                
                background-color: #0097b2; /* For browsers that do not support gradients */
                background-image: linear-gradient(to right, #0097b2 , #7ed957);
                padding: 30px 30px ;
                margin: 0;
                height: 75px;
                color: #ffffff;

                display: flex;
                justify-content: space-between;
                align-items: center;

                border: 1px solid white;

                i {
                    cursor: pointer;
                }
                img {
                    cursor: pointer;
                }
            }

            nav ul {
                list-style: none;
                display: flex;
                justify-content: space-around;
                gap: 20px;
                cursor: pointer;

                /* text style */
                font-family: "Arimo", sans-serif;
                font-optical-sizing: auto;
                font-weight: 400;
                font-style: normal;
            }

            nav img i {
                cursor: pointer;
            }


            /* HOME */
            .main-container img {
                float: right;

                /* display: flex;
                justify-content: space-between;
                align-items: center; */
            }

            .main-container .front-text {
                float: left;
                color: #ffffff;
                padding: 100px 190px ;

                .top {
                    font-family: "League Spartan", sans-serif;
                    /* font-optical-sizing: auto; */
                    font-weight: 800;
                    font-style: normal;
                    font-size: 90px;
                    /* line-height: -50px; */
                }
                .center {
                    font-family: "Sanchez", serif;
                    font-weight: 400;
                    font-style: normal;
                }
                .bottom {
                    margin-top: 90px;
                    
                    font-family: "Arimo", sans-serif;
                    font-optical-sizing: auto;
                    font-weight: 400;
                    font-style: normal;
                }
            }


            /* PRODUCT */
            .menu-container {
                margin-top: 570px;
                background-color: #ffffff;
                height: 600px;
                width: 100%;

                display: grid;
                grid-template-columns: auto auto auto;
                /* background-color: #2196F3; */
                padding: 10px;

                .menu-item {
                    background-color: greenyellow;
                    border: 1px solid red;
                    padding: 20px;
                    font-size: 30px;
                    text-align: center;

                    margin-top: 20px;
                }
            }

        </style>

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
                <li class="menu" data-target="#Home">Home</li>
                <li class="menu">About</li>
                <li class="menu">Product</li>
                <li class="menu">Contact</li>
            </ul>
            <i class="fa-solid fa-magnifying-glass"></i>

        </nav>


        <!-- ======= HOME ======= -->
        <div id="Home" class="main-container">
            <div class="front-text">
                <div class="top">
                    <p>Fresh <br> Smooth <br> & Tasty. </p>
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
            <img src="assets/img/fruits/not clear/front-page-fruits.png" alt="fruits" width="600" height="560">

        </div>


        <!-- ======= PRODUCT ======= -->
        <div class="menu-container">
            <p>Free Shipping if you order 5 and above Stensy drinks.</p>
            <div class="menu-item">
                <img src="assets/img/fruits/not clear/melon.png" alt="melon">
                <p>₱ 80</p>
            </div>
            <div class="menu-item">
                <img src="assets/img/fruits/not clear/banana.png" alt="banana">
                <p>₱ 80</p>
            </div>
            <div class="menu-item">
                <img src="assets/img/fruits/not clear/orange.png" alt="orange">
                <p>₱ 80</p>
            </div>
        </div>


        <!-- ======= MAIN JS LINK ======= -->        


    </body>
</html>