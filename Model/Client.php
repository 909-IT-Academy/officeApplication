<?php
namespace officeApp\Model;

use officeApp\Database\DbHandler;
include('Database/DbHandler.php');

class Client {

    private $clientName, $clientContact, $clientAddress;
    public $dbHandler;
    public $results;

    public function __construct($clientName = "", $clientContact="", $clientAddress="" )
    {
        $this->clientName = $clientName;
        $this->clientContact = $clientContact;
        $this->clientAddress = $clientAddress;
    }
    
    public function get_clientName(){
        return $this->clientName;
    } 

    public function get_clientContact(){
        return $this->clientContact;
    } 

    public function get_clientAdrress(){
        return $this->clientAddress;
    } 
        
    }
