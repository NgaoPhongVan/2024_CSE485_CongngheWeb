<?php

class department{
    private $DepartmentID;
    private $DepartmentName;
    private $Address;
    private $Email;
    private $phone;
    private $Logo;
    private $Website;
    private $ParentDepartment;


    /**
     * @param $DepartmentID
     * @param $DepartmentName
     * @param $Address
     * @param $Email
     * @param $phone
     * @param $Logo
     * @param $Website
     * @param $ParentDepartment
     */
    public function __construct($DepartmentID, $DepartmentName, $Address, $Email, $phone, $Logo, $Website, $ParentDepartment)
    {
        $this->DepartmentID = $DepartmentID;
        $this->DepartmentName = $DepartmentName;
        $this->Address = $Address;
        $this->Email = $Email;
        $this->phone = $phone;
        $this->Logo = $Logo;
        $this->Website = $Website;
        $this->ParentDepartment = $ParentDepartment;
    }


    public function getDepartmentID()
    {
        return $this->DepartmentID;
    }

    public function setDepartmentID($DepartmentID)
    {
        $this->DepartmentID = $DepartmentID;
    }


    public function getDepartmentName()
    {
        return $this->DepartmentName;
    }

    public function setDepartmentName($DepartmentName)
    {
        $this->DepartmentName = $DepartmentName;
    }

    public function getAddress()
    {
        return $this->Address;
    }

    public function setAddress($Address)
    {
        $this->Address = $Address;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getLogo()
    {
        return $this->Logo;
    }
    public function setLogo($Logo)
    {
        $this->Logo = $Logo;
    }

    public function getWebsite()
    {
        return $this->Website;
    }


    public function setWebsite($Website)
    {
        $this->Website = $Website;
    }

    public function getParentDepartment()
    {
        return $this->ParentDepartment;
    }

    public function setParentDepartment($ParentDepartment)
    {
        $this->ParentDepartment = $ParentDepartment;
    }




}
