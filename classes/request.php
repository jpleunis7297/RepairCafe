<?php
/**
 * Created by PhpStorm.
 * User: Joey
 * Date: 06/02/2018
 * Time: 21:26
 */

class request
{
    //properties.
    private $_name;
    private $_message;
    private $_category;
    private $_status;

    //Constructor.
    public function __construct($name, $message, $category, $status){

        $this->setName($name);
        $this->setMessage($message);
        $this->setCategory($category);
        $this->setStatus($status);

    }

    //Setters.
    public function setName($name){
        $this->_name = $name;
    }

    public function setMessage($message){
        $this->_message = $message;
    }

    public function setCategory($category){
        $this->_category = $category;
    }

    public function setStatus($status){
        $this->_status = $status;
    }

    //Getters.
    public function getName(){
        return $this->_name;
    }

    public function getMessage(){
        return $this->_message;
    }

    public function getCategory(){
        return $this->_category;
    }
    
    public function getStatus(){
        return $this->_status;
    }

    //Method.
    public function handleRequest(){
        $connect = new PDO('mysql:host=localhost;dbname=repaircafe', 'root' /*, $password*/);
        $sql = $connect->prepare("");
        $sql->execute();
    }

}