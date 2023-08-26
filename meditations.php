<?php

$false = $_POST['false'];
$beliefs = $_POST['beliefs'];
$true = $_POST['true'];
$constructed = $_POST['constructed'];
$seriously = $_POST['seriously'];
$opinions = $_POST['opinions'];
$established = $_POST['established'];
$sciences = $_POST['sciences'];


?>

<?php include "includes/header.php" ?>
        <div class="container">
            <div class="final_text">
                <h2>Descartes' <i>Meditations on First Philosophy</i></h2>
                <p>It is now some years since I detected how many were the <?= $false ?>
                <?= $beliefs ?> that I had from my earliest youth admitted as <?= $true ?>, and how
                doubtful was everything I had since <?= $constructed ?> on this basis; and from
                that time I was convinced that I must once for all <?= $seriously ?> undertake to
                rid myself of all the <?= $opinions ?> which I had formerly accepted, and
                commence to build anew from the foundation, if I wanted to <?= $establish ?>
                any firm and permanent structure in the <?= $sciences ?>.
                </p>
                <p><i>Meditations</i></p>
            </div>
        </div>
    </body>
<?php include 'includes/footer.php' ?>
