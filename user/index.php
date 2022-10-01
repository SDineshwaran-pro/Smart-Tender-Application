<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    include 'links.php'
    ?>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <title>Home</title>

    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

<script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $("html,body").animate({
                        scrollTop: $(this.hash).offset().top
                    },
                    1000
                );
            });
        });
    </script>

    <style>
        .bgvideo {
            position: absolute;
            z-index: -1;
        }

        .contentTop {
            position: absolute;
        }

        .heading h1 {}

        .options .navbar li a {
            color: #fff;
            text-decoration: none;
            border: 1px solid #fff;
            padding: 10px;
            border-radius: 10px;

        }

        .options .navbar li {
            list-style-type: none;
        }

        .options .navbar {
            justify-content: space-evenly;
            margin: 400px 170px;
        }

        .options .bord {
            position: absolute;
            border: 1px solid #fff;
            border-radius: 30px;
            padding: 35px;
            width: 850px;
            margin: -15px 330px;
        }

        body {
            overflow: hidden;
        }

        /* animation */
        .options .navbar li a,
        .heading h1{
            background-image: linear-gradient(-225deg,
                    #ffffff 0%,
                    #b7c1cf 29%,
                    #aea8a8 67%,
                    #c4a6a6 0%,
                    #bda7bdbc 29%,
                    #c8c8b3 67%,
                    #cab3b3 100%);
            background-size: auto auto;
            background-clip: border-box;
            background-size: 200% auto;
            background-clip: text;
            text-fill-color: transparent;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textclip 2s linear infinite;
        }

        .heading h1{
            text-transform: uppercase;
            display: inline-block;
            margin: 50px 500px;

        }

        @keyframes textclip {
            to {
                background-position: 200% center;
            }
        }
    </style>
</head>

<body>
    <video class="w-100 bgvideo" autoplay loop muted>
        <source src="./images/Skyscrapers - 91744.mp4" type="video/mp4">
    </video>
    <div class="container-fluid contentTop">
        <div class="heading">
            <h1 class="animated bounce infinite">Tender Management</h1>
        </div>
        <div class="options">
            <div class="bord"></div>
            <?php
            if (isset($_SESSION['userId'])) {
            echo '<ul class="res">
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="tenders.php">Tenders</a></li>
                    <li><a href="myBiddings.php">My Biddings</a></li>
                    <li><a href="viewConfirmedBiddings.php">Confirm Biddings</a></li>
                    <li><a href="includes/logout.inc.php">Logout</a></li>
                    </ul>';
            } else {
            echo'<ul class="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="tenders.php">Tenders</a></li>
                <li><a href="signup.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>';
            }
            ?>
        </div>
    </div>

</body>

</html>