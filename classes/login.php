<?php
/**
 * Created by PhpStorm.
 * User: Joey
 * Date: 06/02/2018
 * Time: 15:08
 */

class login
{
    //properties.
    private $_email;
    private $_password;

    //Constructor.
    public function __construct($email, $password){

        $this->setUsername($email);
        $this->setPassword($password);

    }

    //Setters.
    public function setUsername($email){

        $this->_email = $email;

    }

    public function setPassword($password){

        $this->_password = $password;

    }

    //Getters.
    public function getUsername(){

        return $this->_email;

    }

    public function getPassword(){

        return $this->_password;

    }

    //Method.
    public function loginCustomer(){

        $connect = new PDO('mysql:host=localhost;dbname=repaircafe', 'root' /*, $password*/);
        $sql = $connect->prepare("SELECT `customerEmailadress`, `customerPassword` FROM `customer` WHERE `customerEmailadress` = :email");
        $sql->bindParam(':email',$this->_email, PDO::PARAM_STR);
        $sql->execute();

        $row = $sql->fetchAll();

        if ($this->_password == $row['customerPassword']){

            $_SESSION['loggedIn'] = 5;
            $_SESSION['username'] = 'joeypleunis@live.nl'; //$this->_email;

        }

    }

}
