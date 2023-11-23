<?php
include "connection.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Books</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        .srch {
            padding-left: 1000px;
        }

        body {
            background-color: #ce9898;
            font-family: "Lato", sans-serif;
            transition: background-color .5s;
        }

        .sidenav {
            height: 100%;
            margin-top: 50px;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #222;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        .img-circle {
            margin-left: 20px;
        }

        .p:hover {
            background-color: black;
            height: 50px;
            width: auto;
        }

        .book {
            width: 400px;
            margin: 0 auto;
        }

        .form-control {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div style="color: white;margin-left: 50px;font-size:20px">

            <?php
            if (isset($_SESSION['login_user'])) {
                echo "<img class='img-circle profile_img' height= 105 width= 105  src='image/" . $_SESSION['pic'] . "'>";
                echo "</br></br>";
                echo " Welcome " . $_SESSION['login_user'];
            }
            ?>
        </div><br><br>
        <div class="p"><a href="add.php">Add Books</a></div>
        <div class="p"><a href="delete.php">Delete Books</a></div>
        <div class="p"><a href="#">Book Request</a></div>
        <div class="p"><a href="#">Issue Information</a></div>
    </div>

    <div id="main">
        <span style="font-size:30px;cursor:pointer;color:black;" onclick="openNav()">&#9776; open</span>
        <div class="container">
            <h2 style="color:black;font-family:Lucida Console; text-align:center;">
                <b>Add New Books</b>
            </h2>
            <form style="text-align: center;" class="book" action="" method="post">
                <input type="text" name="Book id" class="form-control" placeholder="Book Id....." required=""><br>
                <input type="text" name="Book name" class="form-control" placeholder="Book Name....." required=""><br>
                <input type="text" name="Authors" class="form-control" placeholder="Book Authors Name....." required=""><br>
                <input type="text" name="Edition" class="form-control" placeholder="Book Edition....." required=""><br>
                <input type="text" name="Status" class="form-control" placeholder="Book Status....." required=""><br>
                <input type="text" name="Book quantity" class="form-control" placeholder="Book quantity....." required=""><br>
                <input type="text" name="Department" class="form-control" placeholder="Deperment....." required=""><br>
                <button class="btn btn-default" style="background-color: black; color:white" type="submit" name="submit"><b>ADD</b></button>
            </form>
        </div>
        <?php
        if (isset($_POST['submit'])) {
            if (isset($_SESSION['login_user'])) {
                mysqli_query($db, "INSERT INTO books VALUES('$_POST[id]','$_POST[name]','$_POST[Authors]','$_POST[Edition]','$_POST[Status]','$_POST[quantity]','$_POST[Department]');");
        ?>
                <script type="text/javascript">
                    alert("Book Added Sucessfully.");
                </script>

                <div class="alert alert-danger" style="width: 360px;color:#fff;margin-left :450px;;background-color:#010100;">
                    <strong>Book Added Sucessfully.</strong>
                </div>
            <?php
            } else {
            ?>
                <!-- <script type="text/javascript">
                    alert("You need to login first,");
                </script> -->

                <div class="alert alert-danger" style="width: 360px;color:#fff;margin-left :450px;;background-color:#010100;">
                    <strong>You need to login first.</strong>
                </div>
            <?php
            }
        }
            ?>
                </div>
                <script>
                    function openNav() {
                        document.getElementById("mySidenav").style.width = "300px";
                        document.getElementById("main").style.marginLeft = "290px";
                        document.body.style.backgroundColor = "#ce9898";
                    }

                    function closeNav() {
                        document.getElementById("mySidenav").style.width = "0";
                        document.getElementById("main").style.marginLeft = "0";
                        document.body.style.backgroundColor = "#ce9898";
                    }
                </script>
</body>