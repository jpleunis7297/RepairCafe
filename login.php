<?php

include 'includes/header.php';

include 'classes/login.php';

?>

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

<?php

include 'includes/footer.php';

?>
