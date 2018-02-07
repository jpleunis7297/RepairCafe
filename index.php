<?php

include 'includes/header.php';


?>

    <div class="container">

      <div class="row">

        <div class="col-lg-12">

              <form class="form-group" action="http://localhost" method="post">

                <label for="name">Uw Naam: </label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Vul uw naam in."><br>

                <label for="message">Uw bericht: </label>
                <textarea class="form-control" id="message" name="message" placeholder="Uw bericht."></textarea><br>

                <input type="submit" name="submit" value="Verstuur">

              </form>

            <?php

            //$var = new request($_POST['name'], $_POST['message'], $_POST['category'], $_POST['status'] );
            //$var->handleRequest();

            ?>

        </div>

      </div>

    </div>
<?php

include 'includes/footer.php';

?>