<?php
include "connection.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change password</title>
    <style type="text/css">
        body {
            /* width: 1265px; */
            height: 600px;
            background-image: url(image/s.jpg);
            background-repeat: no-repeat;
        }

        .wrapper {
            width: 400px;
            height: 450px;
            margin: 100px auto;
            margin-top: 15px;
            background-color: black;
            opacity: .6;
            color: white;
            padding: 25px 15px;
        }

        .form-control {
            width: 300px;
            background-color: black;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div style="text-align:center;">
            <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Change Your Password
            </h1>
        </div>
        <div style="padding-left: 30px;">
            <form action="" method="post">
                <input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
                <input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
                <input type="text" name="password" class="form-control" placeholder="New Password" required=""><br>
                <button class="btn btn-default" type="submit" name="submit">Update</button><br>
            </form>
        </div>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        if (mysqli_query($db, "UPDATE student SET password ='$_POST[password]' WHERE username = '$_POST[username]' AND email='$_POST[email]';")) {
    ?>
            <script type="text/javascript">
                alert("The Password Update Succesfully.");
            </script>
    <?php
        }
    }
    ?>
</body>

</html>