
<!DOCTYPE html>
<html>

  <head>
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/26bbb1ea68.js"></script>
  </head>

  <title>Home</title>
  <body>

  <link rel="stylesheet/less" type="text/css" href="style.less" />

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

  </body>

  <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>

</html>
