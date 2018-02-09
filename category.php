<!DOCTYPE html>

<head>
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/26bbb1ea68.js"></script>
</head>

<form method="post">
    <div class="form-group">
        <label for="sel1">Selecteer wat je wilt doen</label>
        <select class="form-control" name="action">
            <option value="add">Nieuwe Toevoegen</option>
            <option value="change">Bestaande Aanpassen</option>
            <option value="delete">Bestaande Verwijderen</option>
        </select>
        <button type="submit" name="submitSelect" class="btn btn-primary">kiezen</button>
    </div>
</form>



<?php
/**
 * Created by PhpStorm.
 * User: Fabiënne
 * Date: 2/7/2018
 * Time: 12:01 PM
 */
include ('functions/dbConnect.php');

//$catName
include('classes/createCategory');
$selector = $_POST['action'];
switch ($selector){
    case "add":
    echo "<form method=\"post\">
    <div class=\"form-group\">
        <label>Categorie naam</label>
        <input type=\"text\" name=\"catName\" class=\"form-control\" placeholder=\"Categorie naam\">
    </div>
    <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">Toevoegen</button>
    </form>";
    break;
    case "change":
        echo "change";
    break;
    case "delete":
        echo "delete";
    break;
    default:
        echo "Het doet het niet";


}
;
if (isset($_POST['submit'])){
    if (($_POST['catName'])==""){
        echo "Vul categorie naam in:";
    }
    else{
        $catName= $_POST['catName'];
        $cat = new category ($catName);
        $cat->createCategory();
        echo "Categorie is toegevoegd.";



    }
}
?>