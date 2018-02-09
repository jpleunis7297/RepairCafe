<?php

include 'includes/header.php';

include 'classes/request.php';

?>
<?php

if($_SESSION['loggedIn'] = 5){

    echo '<div class="container">

      <div class="row">

        <div class="col-lg-12">

              <form class="form-group" action="http://localhost" method="post">

                <label for="name">Uw Naam: </label>
                <input type="text" class="form-control" id="name" name="name" value="joeypleunis@live.nl"><br>

                <label for="message">Uw bericht: </label>
                <textarea class="form-control" id="message" name="message" placeholder="Uw bericht."></textarea><br>

                <input type="submit" name="submit" value="Verstuur">

              </form>

        </div>

      </div>

    </div>';
}


if (isset($_POST['submit'])){

    $var = new request($_POST['name'], $_POST['message']);

    $var->handleRequest();

}

?>

<?php

include 'includes/footer.php';

?>