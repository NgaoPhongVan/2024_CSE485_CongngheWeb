<?php

class user{
    private $Username;
    private $Password;
    private $Role;
    private $EmployeeID;

    /**
     * @param $Username
     * @param $Password
     * @param $Role
     * @param $EmployeeID
     */
    public function __construct($Username, $Password, $Role, $EmployeeID)
    {
        $this->Username = $Username;
        $this->Password = $Password;
        $this->Role = $Role;
        $this->EmployeeID = $EmployeeID;
    }


}