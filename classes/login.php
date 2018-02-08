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
    private $_userPassword;

    //Constructor.
    public function __construct($email, $password, $userPassword){

        $this->setUsername($email);
        $this->setPassword($password);
        $this->setUserPassword($userPassword);

    }

    //Setters.
    public function setUsername($email){
        $this->_email = $email;
    }

    public function setPassword($password){
        $this->_password = $password;
    }

    public function setUserPassword($userPassword){
        $this->_userPassword = $userPassword;
    }

    //Getters.
    public function getUsername(){
        return $this->_email;
    }

    public function getPassword(){
        return $this->_password;
    }

    public function getUserPassword(){
        return $this->_userPassword;
    }

    //Method.
    public function loginCustomer(){
//        $connect = new PDO('mysql:host=localhost;dbname=repaircafe', 'root' /*, $password*/);
//        $sql = $connect->prepare("SELECT `customerEmailadress`, `customerPassword` FROM `customer` WHERE `customerEmailadress` = :email");
//        $sql->bindParam(':email',$this->_email, PDO::PARAM_STR);
//        $sql->execute();
//
//        $row = $sql->fetchAll();

        if ($this->_password === $userPassword){
            $_SESSION['loggedIn'] = 1;
            $_SESSION['username'] = $this->_email;
        }
    }

}
