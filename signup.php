<?php
include_once 'header.php';
?>

<section class="signup-form">

    <h2>Sign Up</h2>

    <form action="includes/signup.inc.php" method="post">

        <input type="text" name="name" placeholder="inserisci il tuo nome...">
        <input type="text" name="surname" placeholder="inserisci il tuo cognome...">
        <input type="text" name="email" placeholder="inserisci la tua email...">
        <input type="password" name="pwd" placeholder="inserisci la tua password..">
        <button type="submit" name="submit">Sign Up</button>

    </form>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Riempi tutti i campi</p>";
        } else if ($_GET["error"] == "invalidEmail") {
            echo "<p>Email non valida</p>";
        } else if ($_GET["error"] == "invalidpassword") {
            echo "<p>Password non valida</p>";
        } else if ($_GET["error"] == "emailtaken") {
            echo "<p>Questa email esiste già</p>";
        } else if ($_GET["error"] == "none") {
            echo "<p>Registrazione avvenuta con successo!</p>";
        }
    }
    ?>
</section>