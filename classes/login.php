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

        $this->setCustomerTitleId($email);
        $this->setFirstName($password);

    }

    //Setters.
    public function setCustomerTitleId($email){
        $this->_email = $email;
    }

    public function setFirstName($password){
        $this->_password = $password;
    }

    //Getters.
    public function getCustomerTitleId(){
        return $this->_email;
    }

    public function getFirstName(){
        return $this->_password;
    }

    //Method.
    public function registerCustomer(){
        $connect = new PDO('mysql:host=localhost;dbname=repaircafe', 'root' /*, $password*/);
        $sql = $connect->prepare("");
        $sql->bindParam(':customerTitleId', $this->_customerTitleId, PDO::PARAM_INT);
        $sql->bindParam(':firstName', $this->_firstName, PDO::PARAM_STR);
        $sql->execute();
    }

}