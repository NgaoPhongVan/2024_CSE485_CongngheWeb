<?php

class Employee
{
    private $EmployeeID;
    private $FullName;
    private $Address;
    private $Email;
    private $MobilePhone;
    private $Position;
    private $DepartmentID;

    public function __construct($EmployeeID, $FullName, $Address, $Email, $MobilePhone, $Position, $DepartmentID)
    {
        $this->EmployeeID = $EmployeeID;
        $this->FullName = $FullName;
        $this->Address = $Address;
        $this->Email = $Email;
        $this->MobilePhone = $MobilePhone;
        $this->Position = $Position;
        $this->DepartmentID = $DepartmentID;
    }

    /**
     * @return mixed
     */
    public function getEmployeeID()
    {
        return $this->EmployeeID;
    }

    /**
     * @param mixed $EmployeeID
     */
    public function setEmployeeID($EmployeeID): void
    {
        $this->EmployeeID = $EmployeeID;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->FullName;
    }

    /**
     * @param mixed $FullName
     */
    public function setFullName($FullName): void
    {
        $this->FullName = $FullName;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param mixed $Address
     */
    public function setAddress($Address): void
    {
        $this->Address = $Address;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($Email): void
    {
        $this->Email = $Email;
    }

    /**
     * @return mixed
     */
    public function getMobilePhone()
    {
        return $this->MobilePhone;
    }

    /**
     * @param mixed $MobilePhone
     */
    public function setMobilePhone($MobilePhone): void
    {
        $this->MobilePhone = $MobilePhone;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->Position;
    }

    /**
     * @param mixed $Position
     */
    public function setPosition($Position): void
    {
        $this->Position = $Position;
    }

    /**
     * @return mixed
     */
    public function getDepartmentID()
    {
        return $this->DepartmentID;
    }

    /**
     * @param mixed $DepartmentID
     */
    public function setDepartmentID($DepartmentID): void
    {
        $this->DepartmentID = $DepartmentID;
    }
}
