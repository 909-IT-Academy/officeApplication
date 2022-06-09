<?php

namespace officeApp\Model;

use officeApp\Database\DbHandler;

include('Database/DbHandler.php');

class Client
{

    private $clientID, $clientName, $clientContact, $clientAddress;
    public $dbHandler;
    public $results;

    public function __construct($clientID  = "", $clientName = "", $clientContact = "", $clientAddress = "")
    {
        $this->clientID = $clientID;
        $this->clientName = $clientName;
        $this->clientContact = $clientContact;
        $this->clientAddress = $clientAddress;
    }

    //setters
    public function set_clientID($clientID)
    {
        $this->clientID = $clientID;
    }

    public function set_clientName($clientName)
    {
        $this->clientName = $clientName;
    }

    public function set_clientContact($clientContact)
    {
        $this->clientContact = $clientContact;
    }

    public function set_clientAddress($clientAddress)
    {
        $this->clientAddress = $clientAddress;
    }

    //getters
    public function get_clientID()
    {
        return $this->clientID;
    }

    public function get_clientName()
    {
        return $this->clientName;
    }

    public function get_clientContact()
    {
        return $this->clientContact;
    }

    public function get_clientAdrress()
    {
        return $this->clientAddress;
    }
}
