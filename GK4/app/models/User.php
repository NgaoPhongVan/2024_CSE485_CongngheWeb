<?php

class User
{
    private $Username;
    private $Password;
    private $Role;
    private $EmployeeID;

  
    public function __construct($Username, $Password, $Role, $EmployeeID)
    {
        $this->Username = $Username;
        $this->Password = $Password;
        $this->Role = $Role;
        $this->EmployeeID = $EmployeeID;
    }

    /**
     * Get the value of Username
     */ 
    public function getUsername()
    {
        return $this->Username;
    }

    /**
     * Set the value of Username
     *
     * @return  self
     */ 
    public function setUsername($Username)
    {
        $this->Username = $Username;

        return $this;
    }

    /**
     * Get the value of Password
     */ 
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * Set the value of Password
     *
     * @return  self
     */ 
    public function setPassword($Password)
    {
        $this->Password = $Password;

        return $this;
    }

    /**
     * Get the value of Role
     */ 
    public function getRole()
    {
        return $this->Role;
    }

    /**
     * Set the value of Role
     *
     * @return  self
     */ 
    public function setRole($Role)
    {
        $this->Role = $Role;

        return $this;
    }

    /**
     * Get the value of EmployeeID
     */ 
    public function getEmployeeID()
    {
        return $this->EmployeeID;
    }

    /**
     * Set the value of EmployeeID
     *
     * @return  self
     */ 
    public function setEmployeeID($EmployeeID)
    {
        $this->EmployeeID = $EmployeeID;

        return $this;
    }
}

