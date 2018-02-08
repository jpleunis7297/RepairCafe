<?php
/**
 * Created by PhpStorm.
 * User: Joey
 * Date: 06/02/2018
 * Time: 02:13
 */

class register
{
    //properties.
    private $_customerTitle;
    private $_firstName;
    private $_middleName;
    private $_lastName;
    private $_street;
    private $_houseNumber;
    private $_houseNumberSuffix;
    private $_postalCode;
    private $_residence;
    private $_phonenumber;
    private $_emailAddress;
    private $_birthdate;
    private $_password;

    //Constructor.
    public function __construct($customerTitle, $firstName, $middleName, $lastName, $street, $houseNumber, $houseNumberSuffix, $postalCode, $residence, $phonenumber, $emailAddress, $birthdate, $password){

        $this->setCustomerTitle($customerTitle);
        $this->setFirstName($firstName);
        $this->setMiddleName($middleName);
        $this->setLastName($lastName);
        $this->setStreet($street);
        $this->setHouseNumber($houseNumber);
        $this->setHouseNumberSuffix($houseNumberSuffix);
        $this->setPostalCode($postalCode);
        $this->setResidence($residence);
        $this->setPhoneNumber($phonenumber);
        $this->setEmailAddress($emailAddress);
        $this->setBirthdate($birthdate);
        $this->setPassword($password);

    }

    //Setters.
    public function setFirstName($firstName){
        $this->_firstName = $firstName;
    }

    public function setMiddleName($middleName){
        $this->_middleName = $middleName;
    }

    public function setLastName($lastName){
        $this->_lastName = $lastName;
    }

    public function setStreet($street){
        $this->_street = $street;
    }

    public function setHouseNumber($houseNumber){
        $this->_houseNumber = $houseNumber;
    }

    public function setHouseNumberSuffix($houseNumberSuffix){
        $this->_houseNumberSuffix = $houseNumberSuffix;
    }

    public function setPostalCode($postalCode){
        $this->_postalCode = $postalCode;
    }

    public function setResidence($residence){
        $this->_residence = $residence;
    }

    public function setPhoneNumber($phonenumber){
        $this->_phonenumber = $phonenumber;
    }

    public function setEmailAddress($emailAddress){
        $this->_emailAddress = $emailAddress;
    }

    public function setBirthdate($birthdate){
        $this->_birthdate = $birthdate;
    }

    public function setPassword($password){
        $this->_password = $password;
    }

    public function setCustomerTitle($customerTitle){
        $this->_customerTitle = $customerTitle;
    }

    //Getters.
    public function getFirstName(){
        return $this->_firstName;
    }

    public function getMiddleName(){
        return $this->_middleName;
    }

    public function getLastName(){
        return $this->_lastName;
    }

    public function getStreet(){
        return $this->_street;
    }

    public function getHouseNumber(){
        return $this->_houseNumber;
    }

    public function getHouseNumberSuffix(){
        return $this->_houseNumberSuffix;
    }

    public function getPostalCode(){
        return $this->_postalCode;
    }

    public function getResidence(){
        return $this->_residence;
    }

    public function getPhoneNumber(){
        return $this->_phonenumber;
    }

    public function getEmailAddress(){
        return $this->_emailAddress;
    }

    public function getBirthdate(){
        return $this->_birthdate;
    }

    public function getPassword(){
        return $this->_password;
    }

    public function getCustomerTitle(){
        return $this->_customerTitle;
    }

    //Method.
    public function registerCustomer(){
        $connect = new PDO('mysql:host=localhost;dbname=repaircafe', 'root' /*, $password*/);
        $sql = $connect->prepare("INSERT INTO `customer`(
                                                              `customerId`, 
                                                              `customerTitle`, 
                                                              `customerFirstname`, 
                                                              `customerMiddlename`, 
                                                              `customerLastname`, 
                                                              `customerStreet`, 
                                                              `customerHousenumber`, 
                                                              `customerHousenumberSuffix`, 
                                                              `customerPostalCode`, 
                                                              `customerResidence`, 
                                                              `customerPhonenumber`, 
                                                              `customerEmailadress`, 
                                                              `customerBirthdate`, 
                                                              `customerPassword`) 
                                            VALUES (
                                                    NULL,
                                                    :customerTitle,
                                                    :firstName,
                                                    :middleName,
                                                    :lastName,
                                                    :street,
                                                    :houseNumber,
                                                    :houseNumberSuffix,
                                                    :postalCode,
                                                    :residence,
                                                    :phonenumber,
                                                    :emailAddress,
                                                    :birthdate,
                                                    :password)");

        $sql->bindParam(':customerTitle', $this->_customerTitle, PDO::PARAM_STR);
        $sql->bindParam(':firstName', $this->_firstName, PDO::PARAM_STR);
        $sql->bindParam(':middleName', $this->_middleName, PDO::PARAM_STR);
        $sql->bindParam(':lastName', $this->_lastName, PDO::PARAM_STR);
        $sql->bindParam(':street', $this->_street, PDO::PARAM_STR);
        $sql->bindParam(':houseNumber', $this->_houseNumber, PDO::PARAM_INT);
        $sql->bindParam(':houseNumberSuffix', $this->_houseNumberSuffix, PDO::PARAM_STR);
        $sql->bindParam(':postalCode', $this->_postalCode, PDO::PARAM_STR);
        $sql->bindParam(':residence', $this->_residence, PDO::PARAM_STR);
        $sql->bindParam(':phonenumber', $this->_phonenumber, PDO::PARAM_INT);
        $sql->bindParam(':emailAddress', $this->_emailAddress, PDO::PARAM_STR);
        $sql->bindParam(':birthdate', $this->_birthdate, PDO::PARAM_STR);
        $sql->bindParam(':password', $this->_password, PDO::PARAM_STR);
        $sql->execute();
    }

}

