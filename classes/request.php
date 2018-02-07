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

    //Constructor.
    public function __construct($name, $message){

        $this->setName($name);
        $this->setMessage($message);

    }

    //Setters.
    public function setName($name){
        $this->_name = $name;
    }

    public function setMessage($message){
        $this->_message = $message;
    }

    //Getters.
    public function getName(){
        return $this->_name;
    }

    public function getMessage(){
        return $this->_message;
    }

    //Method.
    public function handleRequest(){
        $connect = new PDO('mysql:host=localhost;dbname=repaircafe', 'root' /*, $password*/);
        $sql = $connect->prepare("");
        $sql->execute();
    }

}