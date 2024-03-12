<?php

class Department
{
    private $DepartmentID;
    private $DepartmentName;
    private $Address;
    private $Email;
    private $Phone;
    private $Logo;
    private $Website;
    private $ParentDepartmentID;

    public function __construct($DepartmentID, $DepartmentName, $Address, $Email, $Phone, $Logo, $Website, $ParentDepartmentID)
    {
        $this->DepartmentID = $DepartmentID;
        $this->DepartmentName = $DepartmentName;
        $this->Address = $Address;
        $this->Email = $Email;
        $this->Phone = $Phone;
        $this->Logo = $Logo;
        $this->Website = $Website;
        $this->ParentDepartmentID = $ParentDepartmentID;
    }

    /**
     * Get the value of DepartmentID
     */
    public function getDepartmentID()
    {
        return $this->DepartmentID;
    }

    /**
     * Set the value of DepartmentID
     *
     * @return  self
     */
    public function setDepartmentID($DepartmentID)
    {
        $this->DepartmentID = $DepartmentID;

        return $this;
    }

    /**
     * Get the value of DepartmentName
     */
    public function getDepartmentName()
    {
        return $this->DepartmentName;
    }

    /**
     * Set the value of DepartmentName
     *
     * @return  self
     */
    public function setDepartmentName($DepartmentName)
    {
        $this->DepartmentName = $DepartmentName;

        return $this;
    }

    /**
     * Get the value of Address
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * Set the value of Address
     *
     * @return  self
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;

        return $this;
    }

    /**
     * Get the value of Email
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set the value of Email
     *
     * @return  self
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * Get the value of Phone
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * Set the value of Phone
     *
     * @return  self
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;

        return $this;
    }

    /**
     * Get the value of Logo
     */
    public function getLogo()
    {
        return $this->Logo;
    }

    /**
     * Set the value of Logo
     *
     * @return  self
     */
    public function setLogo($Logo)
    {
        $this->Logo = $Logo;

        return $this;
    }

    /**
     * Get the value of Website
     */
    public function getWebsite()
    {
        return $this->Website;
    }

    /**
     * Set the value of Website
     *
     * @return  self
     */
    public function setWebsite($Website)
    {
        $this->Website = $Website;

        return $this;
    }

    /**
     * Get the value of ParentDepartmentID
     */
    public function getParentDepartmentID()
    {
        return $this->ParentDepartmentID;
    }

    /**
     * Set the value of ParentDepartmentID
     *
     * @return  self
     */
    public function setParentDepartmentID($ParentDepartmentID)
    {
        $this->ParentDepartmentID = $ParentDepartmentID;

        return $this;
    }
}
