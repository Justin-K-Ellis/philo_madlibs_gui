<?php

$world = $_POST['world'];
$case = $_POST['case'];
$fact = $_POST['fact'];
$thought = $_POST['thought'];
$proposition = $_POST['proposition'];
$truth_function = $_POST['truth_function'];
$symbol = $_POST['symbol'];
$speak = $_POST['speak'];
$be_silent = $_POST['be_silent'];


?>

<?php include "includes/header.php" ?>
        <div class="container">
            <div class="final_text">
                <h2>Wittgenstein's <i>Tractatus Logico-Philosophicus</i></h2>
                <ol>
                    <li>The <?= $world ?> is everything that is the <?= $case ?>.</li>
                    <li>What is the <?= $case ?> (a <?= $fact ?>) is the existence of states of affairs.</li>
                    <li>A logical picture of <?= $fact ?>s is a <?= $thought ?>.</li>
                    <li>A <?= $thought ?> is a <?= $proposition ?> with a sense.</li>
                    <li>A <?= $proposition ?> is a <?= $truth_function ?> of elementary <?= $proposition ?>s. (An elementary <?= $proposition ?> is a  <?= $truth_function ?> of itself.)</li>
                    <li>The general form of a <?= $proposition ?> is the general form of a  <?= $truth_function ?>, which is:  [<?= $symbol ?>]. This is the general form of a <?= $proposition ?>.</li>
                    <li>Whereof one cannot <?= $speak ?>, thereof one must <?= $be_silent ?>.</li>
                </ol>
                <p><i>Tractatus</i> (top-level propositions)</p>
            </div>
        </div>
    </body>
<?php include 'includes/footer.php' ?>