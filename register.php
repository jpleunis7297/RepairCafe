<?php

include 'classes/register.php';

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/26bbb1ea68.js"></script>
    <title>Please register.</title>
</head>

<body>
<link rel="stylesheet/less" type="text/css" href="style.less" />
<div class="container">

    <form class="form-group" action="#" method="post">

        <!-- registratie formulier -->
        <div class="row">

            <label for="firstName">Naam: </label>
            <input type="text" class="form-control" name="firstName" placeholder="Bijv. 'Peter'" required>

            <label for="middleName">Tussenvoegsel: </label><br>
            <input type="text" class="form-control" name="middleName" placeholder="Bijv. 'van den'">

            <label for="lastName">Achternaam: </label><br>
            <input type="text" class="form-control" name="lastName" placeholder="Bijv. 'Petersen'" required>

            <label for="phone">Telefoon: </label>
            <input type="number" class="form-control" name="phone" placeholder="Bijv. '0612345678'" required><br>

            <label for="email">E-mail: </label>
            <input type="email" class="form-control" name="email" placeholder="Bijv. 'johndoe@gmail.com'" required><br>

            <label for="password">Wachtwoord: </label>
            <input type="password" class="form-control" name="password" placeholder="*******" required><br>

            <label for="password">Vul uw wachtwoord nogmaals in </label>
            <input type="password" class="form-control" name="password-verify" placeholder="*******" required><br>

            <label for="birthDate">Geboorte datum: </label>
            <input type="text" class="form-control" name="birthDate" placeholder="(mm-dd-jjjj)"><br>

            <label for="street">Straat: </label>
            <input type="text" class="form-control" name="street" placeholder="Bijv. 'hoogstraat'" required>

            <label for="houseNumber">Huisnummer: </label>
            <input type="text" class="form-control" name="houseNumber" placeholder="Bijv. '22'" required>

            <label for="houseNumberSuffix">Toevoeging: </label>
            <input type="text" class="form-control" name="houseNumberSuffix" placeholder="Bijv. 'A, B'">

            <label for="postalCode">Postcode: </label>
            <input type="text" class="form-control" name="postalCode" placeholder="Bijv. '1234 AB'" required>

            <label for="residence">Plaats: </label>
            <input type="text" class="form-control" name="residence" placeholder="Bijv. 'Amsterdam'" required>

        </div>

        <br>

        <input type="submit" name="submit" value="Registreer!">

    </form>

    <?php

    if (isset($_POST['submit']) && $_POST['password'] === $_POST['password-verify']){

        $test = new register('1233',
                                $_POST['firstName'],
                                $_POST['middleName'],
                                $_POST['lastName'],
                                $_POST['street'],
                                $_POST['houseNumber'],
                                $_POST['houseNumberSuffix'],
                                $_POST['postalCode'],
                                $_POST['residence'],
                                $_POST['phone'],
                                $_POST['email'],
                                $_POST['birthDate'],
                                $_POST['password']);

        $test->registerCustomer();

        if(isset($_POST['password']) != isset($_POST['password-verify'])){

            echo "<script> alert('Uw wachtwoorden kwamen niet overeen!'); </script>";

        };

    };





    ?>

</div>

</body>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>

</html>
