<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Online Libary Mangement System</title>
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        section {
            margin-top: -20px;
        }

        nav {
            float: right;
            word-spacing: 20px;
            padding: 20px;
        }

        nav li {
            display: inline-block;
            line-height: 60px;
        }

        li a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <header>
            <div class="logo">
                <img src="3.jpg">
                <h1 style="color: white;">ONLINE LIBARY MANAGMENT SYSTEM</h1>
            </div>

            <?php
            if (isset($_SESSION['login_user'])) {
            ?>
                <nav>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="books.php">BOOKS</a></li>
                        <li><a href="logout.php">LOGOUT</a></li>
                        <li><a href="feedback.php">FEEDBACK</a></li>
                    </ul>
                </nav>
            <?php
            } else {
            ?>
                <nav>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="books.php">BOOKS</a></li>
                        <li><a href="student_login.php">STUDENT_LOGIN</a></li>
                        <li><a href="feedback.php">FEEDBACK</a></li>
                    </ul>
                </nav>
            <?php
            }
            ?>


        </header>
        <section>
            <div class="sec_img">
                <div class="w3-content w3-section" style="width: 1265; height: 550px; margin-left: 0px;">
                    <!-- <img class="mySlides w3-animate-left" src="5.jpg" style="width: 1265px; height: 550px;">
                    <img class="mySlides w3-animate-left" src="6.jpg" style="width: 1265px; height: 550px;">
                    <img class="mySlides w3-animate-fading" src="7.jpg" style="width: 1265px; height: 550px;">
                    <img class="mySlides w3-animate-fading" src="8.jpg" style="width: 1265px; height: 550px;"> -->
                </div>

                <script type="text/javascript">
                    var a = 0;
                    carousel();

                    function carousel() {
                        var i;
                        var x = document.getElementsByClassName("mySlides");

                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";
                        }

                        a++;
                        if (a > x.length) {
                            a = 1
                        }
                        x[a - 1].style.display = "block";
                        setTimeout(carousel, 5000);
                    }
                </script>
                <br><br><br>

                <div class="box" style="margin-top: -470px;">
                    <br><br><br>
                    <h1 style="text-align: center; font-size: 30px;">Welcome to Libary</h1><br><br>
                    <h1 style="text-align: center; font-size: 25px;">Opens at: 09:00</h1><br>
                    <h1 style="text-align: center; font-size: 25px;">Closes at: 15:00</h1><br>
                </div>
            </div>
        </section>
        <!-- <footer>
            <p style="color: white; text-align: center;">
                <br>
                Email:&nbsp papandebnath116@gmail.com <br><br>
                Mobile:&nbsp +91 9748333245
            </p>
        </footer> -->
    </div>
    <?php
    include "footer.php";
    ?>
</body>

</html>