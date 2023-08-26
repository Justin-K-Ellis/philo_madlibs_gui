<?php include '/opt/lampp/htdocs/phil_madlibs/v2/includes/header.php' ?>
<div class="container">
    <h3>Rewrite Descartes' <i>Meditations</i></h3>
</div>
        <div class="container">
            <form action="meditations.php" method="post" class="form-floating">
                <div class="form-floating">
                    <input type="text" class="form-control" name="false" id="false" placeholder="Adjective">
                    <label for="floatingInputValue">Adjective</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="beliefs" id="beliefs" placeholder="Plural noun">
                    <label for="floatingInputValue">Plural noun</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="true" id="true" placeholder="Adjective">
                    <label for="floatingInputValue">Adjective</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="constructed" id="constructed" placeholder="Past participle (-ed adj)">
                    <label for="floatingInputValue">Past-tense verb</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="seriously" id="seriously" placeholder="Adverb">
                    <label for="floatingInputValue">Adverb</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="opinions" id="opinions" placeholder="Plural noun">
                    <label for="floatingInputValue">Plural noun</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="established" id="established" placeholder="Adjective">
                    <label for="floatingInputValue">Adjective</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="sciences" id="sciences" placeholder="Plural noun">
                    <label for="floatingInputValue">Plural noun</label>
                </div>
                <div class="container d-flex justify-content-center align-items-center">
                    <input class="btn btn-outline-primary" type=submit value="Philosophize">
                </div>
            </form>
        </div>
    </body>
<?php include 'footer.php' ?>
