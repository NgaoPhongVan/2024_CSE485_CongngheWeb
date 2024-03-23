<?php

class User
{
    private $ActorID;
    private $FirstName;
    private $LastName;
    private $LastUpdate;

  
    public function __construct($ActorID, $FirstName, $LastName, $LastUpdate)
    {
        $this->ActorID = $ActorID;
        $this->FirstName = $FirstName;
        $this->LastName = $LastName;
        $this->LastUpdate = $LastUpdate;
    }


    /**
     * Get the value of ActorID
     */ 
    public function getActorID()
    {
        return $this->ActorID;
    }

    /**
     * Set the value of ActorID
     *
     * @return  self
     */ 
    public function setActorID($ActorID)
    {
        $this->ActorID = $ActorID;

        return $this;
    }

    /**
     * Get the value of FirstName
     */ 
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * Set the value of FirstName
     *
     * @return  self
     */ 
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;

        return $this;
    }

    /**
     * Get the value of LastName
     */ 
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * Set the value of LastName
     *
     * @return  self
     */ 
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;

        return $this;
    }

    /**
     * Get the value of LastUpdate
     */ 
    public function getLastUpdate()
    {
        return $this->LastUpdate;
    }

    /**
     * Set the value of LastUpdate
     *
     * @return  self
     */ 
    public function setLastUpdate($LastUpdate)
    {
        $this->LastUpdate = $LastUpdate;

        return $this;
    }
}

