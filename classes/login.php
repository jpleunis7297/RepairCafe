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
        $sql = $connect->prepare("");
        $sql->execute();
    }

}