<?php
include_once 'header.php';

?>

<section>
    <?php
    if (isset($_SESSION["email"])) {
        echo "<p>Hello ". $_SESSION["email"] ."</p>";
        
    } 
    ?>
</section>
<section class="background">
    <div class="img-wide container">
        <img src="https://edusogno.com/logo-black.svg" alt="">
    </div>

</section>
