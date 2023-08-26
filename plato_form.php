<?php include '/opt/lampp/htdocs/phil_madlibs/v2/includes/header.php'; ?>
        <div class="container">
            <h3>Rewrite Plato's <i>Republic</i></h2>
        </div>
        <div class="container">
            <form action="republic.php" method="post" class="form-floating">
                <div class="form-floating">
                    <input type="text" class="form-control" name="education" id="education" placeholder="Noun">
                    <label for="floatingInputValue">Noun</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="dwelling" id="dwelling" placeholder="Noun (place)">
                    <label for="floatingInputValue">Noun (place)</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="childhood" id="childhood" placeholder="Noun (time period)">
                    <label for="floatingInputValue">Noun (time period)</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="fire" id="fire" placeholder="Noun (object)">
                    <label for="floatingInputValue">Noun (object)</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="wall" id="wall" placeholder="Noun (object)">
                    <label for="floatingInputValue">Noun (object)</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="carrying" id="carrying" placeholder="-ing verb">
                    <label for="floatingInputValue">-ing verb</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="talking" id="talking" placeholder="-ing verb">
                    <label for="floatingInputValue">-ing verb</label>
                </div>
                <div class="container d-flex justify-content-center align-items-center">
                    <input class="btn btn-outline-primary" type=submit value="Philosophize">
                </div>
            </form>
        </div>
    </body>
<?php include '/opt/lampp/htdocs/phil_madlibs/v2/includes/footer.php' ?>
