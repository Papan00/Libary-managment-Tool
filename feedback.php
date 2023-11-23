<?php
include "connection.php";
include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
            background-image: url(a.jpg);
        }

        .wrapper {
            padding: 10px;
            margin: -20px auto;
            width: 900px;
            height: 600px;
            background-color: #736148;
            opacity: .7;
            color: white;
            font-weight: bold;
        }

        .form-control {
            height: 100px;
            width: 550px;
        }
        .scroll{
            width: 100%;
            height: 300px;
            overflow: auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h4 style="font-weight: bold;">If you have any suggesions or questions please comment below.</h4>
        <form style="font-weight: bold;" action="" method="post">
            <input class="form-control" type="text" name="comment" placeholder="Write something ...">
            <br>
            <input class="btn btn-default" style="height: 40px;width: 115px;font-weight: bold;" type="submit" name="submit" value="Comment">
        </form>

        <br><br>
        <div class="scroll">
            <?php
            if (isset($_POST['submit'])) {
                $sql = "INSERT INTO `comments` VALUES('','$_POST[comment]');";
                if (mysqli_query($db, $sql)) {
                    $q = "SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
                    $res = mysqli_query($db, $q);

                    echo "<table class='table table-bordered'>";
                    while ($row = mysqli_fetch_assoc($res)) {
                        echo "<tr>";
                        echo "<td>";
                        echo $row['comment'];
                        echo "</td>";
                        echo "</tr>";
                    }
                }
            } else {
                $q = "SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
                $res = mysqli_query($db, $q);

                echo "<table class='table table-bordered'>";
                while ($row = mysqli_fetch_assoc($res)) {
                    echo "<tr>";
                    echo "<td>";
                    echo $row['comment'];
                    echo "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>