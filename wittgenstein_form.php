<?php include '/opt/lampp/htdocs/phil_madlibs/v2/includes/header.php'; ?>
        <div class="container">
            <h3>Rewrite Wittgenstein's <i>Tractatus</i></h3>
        </div>
        <div class="container">
            <form action="tractatus.php" method="post" class="form-floating">
                <div class="form-floating">
                    <input type="text" class="form-control" name="world" id="world" placeholder="Noun">
                    <label for="floatingInputValue">Noun</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="case" id="case" placeholder="Noun">
                    <label for="floatingInputValue">Noun</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="fact" id="fact" placeholder="Noun">
                    <label for="floatingInputValue">Noun</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="thought" id="thought" placeholder="Noun">
                    <label for="floatingInputValue">Noun</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="proposition" id="proposition" placeholder="Noun">
                    <label for="floatingInputValue">Noun</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="truth_function" id="truth_function" placeholder="Noun">
                    <label for="floatingInputValue">Noun</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="symbol" id="symbol" placeholder="Any symbol">
                    <label for="floatingInputValue">Any symbol</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="speak" id="speak" placeholder="Present-tense verb">
                    <label for="floatingInputValue">Present-tense verb</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="be_silent" id="be_silent" placeholder="Present-tense verb">
                    <label for="floatingInputValue">Present-tense verb</label>
                </div>
                <div class="container d-flex justify-content-center align-items-center">
                    <input class="btn btn-outline-primary" type=submit value="Philosophize">
                </div>
            </form>
        </div>
    </body>
    <?php include 'includes/footer.php' ?>