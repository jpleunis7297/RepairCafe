<?php

    include 'includes/header.php';

    include 'classes/register.php';

?>
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

<?php

    include 'includes/footer.php';

?>
