<?php
include_once 'header.php';
?>

<section class="signup-form">

    <h2>Login</h2>

    <form action="includes/login.inc.php" method="post">


        <input type="text" name="email" placeholder="inserisci la tua email...">
        <input type="password" name="pwd" placeholder="inserisci la tua password..">
        <button type="submit" name="submit">Log In</button>

    </form>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Riempi tutti i campi</p>";
        } else if ($_GET["error"] == "wronglogin") {
            echo "<p>email o password non validi</p>";
        }
    }
    ?>
</section>