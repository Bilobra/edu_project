<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Edusogno</title>
</head>

<body>
    <nav>
        <div class="wrapper container">
            <ul>
                <li><a href='index.php'>Home</a></li>
                <?php
                if (isset($_SESSION["email"])) {
                    echo "<li><a href='#'>Profilo</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                } else {
                    echo "<li><a href='login.php'>Login</a></li>";
                    echo "<li><a href='signup.php'>Register</a></li>";
                }
                ?>



            </ul>
        </div>
    </nav>


</body>

</html>