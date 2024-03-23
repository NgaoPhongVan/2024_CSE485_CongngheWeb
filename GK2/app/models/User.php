<?php

class User
{
    private $EmployeeID;
    private $Name;
    private $Email;
    private $Address;
    private $Phone;

  
    public function __construct($EmployeeID, $Name, $Email, $Address, $Phone)
    {
        $this->EmployeeID = $EmployeeID;
        $this->Name = $Name;
        $this->Email = $Email;
        $this->Address = $Address;
        $this->Phone = $Phone;
    }


    /**
     * Get the value of EmployeeID
     */ 
    public function getEmployeeID()
    {
        return $this->EmployeeID;
    }

    /**
     * Get the value of Name
     */ 
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Get the value of Email
     */ 
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Get the value of Address
     */ 
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * Get the value of Phone
     */ 
    public function getPhone()
    {
        return $this->Phone;
    }
}

