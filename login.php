<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/26bbb1ea68.js"></script>
    <title>Please log in.</title>
</head>

<body>
<link rel="stylesheet/less" type="text/css" href="style.less" />
<div class="container">

    <div class="row">

        <div class="col-lg-12">

            <form class="form-group" action="#" method="post">

                <label for="email">E-mail: </label>
                <input type="text" class="form-control" name="email" placeholder="johndoe@gmail.com" required><br>

                <label for="password">Wachtwoord: </label>
                <input type="password" class="form-control" name="password" placeholder="*******" required><br>

                <input type="submit" name="submit" value="Log in">

            </form>

            <?php

            //$var = new login( $_POST['email'], $_POST['password'] );
            //$var->loginCustomer();

            ?>

        </div>

    </div>

</div>

</body>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>

</html>
