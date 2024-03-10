<?php

class emoloye{
    private $EmployeeID;
    private $DepartmentName;
    private $Address;
    private $Email;

    private $MobilePhone;
    private $Position;
    private $Avatar;
    private $DepartmentID;

    /**
     * @param $EmployeeID
     * @param $DepartmentName
     * @param $Address
     * @param $Email
     * @param $MobilePhone
     * @param $Position
     * @param $Avatar
     * @param $DepartmentID
     */
    public function __construct($EmployeeID, $DepartmentName, $Address, $Email, $MobilePhone, $Position, $Avatar, $DepartmentID)
    {
        $this->EmployeeID = $EmployeeID;
        $this->DepartmentName = $DepartmentName;
        $this->Address = $Address;
        $this->Email = $Email;
        $this->MobilePhone = $MobilePhone;
        $this->Position = $Position;
        $this->Avatar = $Avatar;
        $this->DepartmentID = $DepartmentID;
    }


}