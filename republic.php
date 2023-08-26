<?php

$education = $_POST['education'];
$dwelling = $_POST['dwelling'];
$childhood = $_POST['childhood'];
$fire = $_POST['fire'];
$wall = $_POST['wall'];
$carrying = $_POST['carrying'];
$talking = $_POST['talking'];


?>

<?php include "includes/header.php" ?>
        <div class="container">
            <div class="final_text">
                <h2>Plato's <i>Republic</i></h2>
                <p>Next, I said, compare the effect of <?= $education ?> and the lack of it on 
                    our nature to an experience like this: Imagine human beings living in 
                    an underground, cavelike <?= $dwelling ?>, with an enterance a long way up, which 
                    is both open to the light and as wide as the <?= $dwelling ?> itself. They've been 
                    there since <?= $childhood ?>, fixed in the same place, with their necks and legs 
                    fettered, able to see only in front of them, because their bonds prevent 
                    them from turning their heads around. Light is provided by a <?= $fire ?> burning 
                    far above and behind them. Also, behind them, but on higher ground, there 
                    is a path stretching between them and the <?= $fire ?>. Imagine that along this path 
                    a low <?= $wall ?> has been built, like the screen in front of puppeteers above 
                    which they show their puppets. Then also imagine that there are people along 
                    the <?= $wall ?>, <?= $carrying ?> all kinds of artifacts that project above it--statues 
                    of people and other animals, made out of stone, wood, and every material. 
                    And as you'd expect, some of the carriers are <?= $talking ?>, and others are silent.
                </p>
                <p><i>Republic</i>, 514a-c</p>
            </div>
        </div>
    </body>
<?php include 'includes/footer.php' ?>