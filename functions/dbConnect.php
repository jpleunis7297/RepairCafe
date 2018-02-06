<?php

try {

$username = 'root';
$password = '';
$connect = new PDO('mysql:host=localhost;dbname=repaircafe', $username /*, $password*/);

echo "gelukt!";

} catch (PDOException $e) {

print "Error!: " . $e->getMessage() . "<br/>";
die();

}

return $connect;