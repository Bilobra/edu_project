<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>Edusogno</title>
</head>

<body>
    <nav>
        <div class="wrapper container">
            <div class="logo">
                <img src="https://edusogno.com/logo-black.svg" alt="">
            </div>
            <ul>

                <li><a href='index.php'>Home</a></li>
                <?php
                if (isset($_SESSION["email"])) {
                    echo "<li><a href='profile.php'>Profilo</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                } else {
                    echo "<li><a href='login.php'>Accedi</a></li>";
                    echo "<li><a href='signup.php'>Registrati</a></li>";
                }
                ?>



            </ul>
        </div>
    </nav>


</body>

</html>