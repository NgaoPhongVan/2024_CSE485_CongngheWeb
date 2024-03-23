<?php

class User
{
    private $ClientID;
    private $Client;
    private $ProjectName;
    private $Status;
    private $ProjectManager;
    private $HourlyRate;
    private $Budget;

  
    public function __construct($ClientID, $Client, $ProjectName, $Status, $ProjectManager, $HourlyRate, $Budget)
    {
        $this->ClientID = $ClientID;
        $this->Client = $Client;
        $this->ProjectName = $ProjectName;
        $this->Status = $Status;
        $this->ProjectManager = $ProjectManager;
        $this->HourlyRate = $HourlyRate;
        $this->Budget = $Budget;
    }


    /**
     * Get the value of ClientID
     */ 
    public function getClientID()
    {
        return $this->ClientID;
    }

    /**
     * Get the value of ProjectName
     */ 
    public function getProjectName()
    {
        return $this->ProjectName;
    }

    /**
     * Get the value of Status
     */ 
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Get the value of ProjectManager
     */ 
    public function getProjectManager()
    {
        return $this->ProjectManager;
    }

    /**
     * Get the value of HourlyRate
     */ 
    public function getHourlyRate()
    {
        return $this->HourlyRate;
    }

    /**
     * Get the value of Budget
     */ 
    public function getBudget()
    {
        return $this->Budget;
    }

    /**
     * Get the value of Client
     */ 
    public function getClient()
    {
        return $this->Client;
    }
}

