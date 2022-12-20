<?php
include_once 'header.php';

?>

<section class="container">
    <?php
    if (isset($_SESSION["email"])) {
        echo "<p class='login_welcome'>Ciao ". $_SESSION["email"] ." ecco i tuoi eventi</p>";
        
    } 
    ?>
</section>
<section class="container card_wrapper">
    <div class="row">
        <div class="col">
            <div class="card">
                <h2>Nome evento</h2>
                <p>15-10-2022 15:00</p>
                <button class="button">Join</button>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <h2>Nome evento</h2>
                <p>15-10-2022 15:00</p>
                <button class="button">Join</button>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <h2>Nome evento</h2>
                <p>15-10-2022 15:00</p>
                <button class="button">Join</button>
            </div>
        </div>
    </div>
    
</section>