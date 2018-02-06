<?php

function registerRequest($name, $email, $message)
{

        $connect = new PDO('mysql:host=localhost;dbname=repaircafe', 'root' /*, $password*/);
        $sql = $connect->prepare("INSERT INTO `repairrequest`(`RequestID`, `client_name`, `client_email`, `request_message`, `request_time`) VALUES (NULL, :name, :email, :message, NOW())");
        $sql->bindParam(':name', $name, PDO::PARAM_STR);
        $sql->bindParam(':email', $email, PDO::PARAM_STR);
        $sql->bindParam(':message', $message, PDO::PARAM_STR);
        $sql->execute();


}