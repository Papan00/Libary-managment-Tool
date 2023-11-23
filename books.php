<?php
include "connection.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <style type="text/css">
        .srch {
            padding-left: 1000px;
        }
    </style>
</head>

<body style="background-color: black; color:white;">

    <div class="srch">
        <form class="navbar-form" method="post" name="formal">
            <input class="form-control" type="text" name="search" placeholder="search books .." required="">
            <button style="background-color: #6db6b9eb; color:white;" type="submit" name="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </form>
    </div>

    <h2>List of Books</h2>
    <?php

    if (isset($_POST['submit'])) {
        $q = mysqli_query($db, "SELECT * FROM `books` WHERE `Book name` like'%$_POST[search]%'");

        if (mysqli_num_rows($q) == 0) {
            echo "Sorry! No book found. Try serching again.";
        } else {
            echo "<table style='background-color:black; color:white' class='table table-bordered table-hover'>";
            echo "<tr style='background-color:#6db6b9eb; color:white'>";

            echo "<th>";
            echo "ID";
            echo "</th>";

            echo "<th>";
            echo "Book-Name";
            echo "</th>";

            echo "<th>";
            echo "Authors Name";
            echo "</th>";

            echo "<th>";
            echo "Edition";
            echo "</th>";

            echo "<th>";
            echo "Status";
            echo "</th>";

            echo "<th>";
            echo "Quantity";
            echo "</th>";

            echo "<th>";
            echo "Department";
            echo "</th>";

            echo "</tr>";

            while ($row = mysqli_fetch_assoc($q)) {
                echo "<tr style='background-color:black;color:white'>";

                echo "<td>";
                echo $row['id'];
                echo "</td>";

                echo "<td>";
                echo $row['name'];
                echo "</td>";

                echo "<td>";
                echo $row['Authors'];
                echo "</td>";

                echo "<td>";
                echo $row['Edition'];
                echo "</td>";

                echo "<td>";
                echo $row['Status'];
                echo "</td>";

                echo "<td>";
                echo $row['quantity'];
                echo "</td>";

                echo "<td>";
                echo $row['Department'];
                echo "</td>";

                echo "</tr>";
            }
            echo "</table>";
        }
    } else {
        $res = mysqli_query($db, "SELECT * FROM `books` ORDER BY `books`.`name` ASC;");

        echo "<table style='background-color:black; color:white' class='table table-bordered table-hover'>";
        echo "<tr style='background-color:#6db6b9eb; color:white'>";

        echo "<th>";
        echo "ID";
        echo "</th>";

        echo "<th>";
        echo "Book-Name";
        echo "</th>";

        echo "<th>";
        echo "Authors Name";
        echo "</th>";

        echo "<th>";
        echo "Edition";
        echo "</th>";

        echo "<th>";
        echo "Status";
        echo "</th>";

        echo "<th>";
        echo "Quantity";
        echo "</th>";

        echo "<th>";
        echo "Department";
        echo "</th>";

        echo "</tr>";

        while ($row = mysqli_fetch_assoc($res)) {
            echo "<tr style='background-color:black;color:white'>";

            echo "<td>";
            echo $row['id'];
            echo "</td>";

            echo "<td>";
            echo $row['name'];
            echo "</td>";

            echo "<td>";
            echo $row['Authors'];
            echo "</td>";

            echo "<td>";
            echo $row['Edition'];
            echo "</td>";

            echo "<td>";
            echo $row['Status'];
            echo "</td>";

            echo "<td>";
            echo $row['quantity'];
            echo "</td>";

            echo "<td>";
            echo $row['Department'];
            echo "</td>";

            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>