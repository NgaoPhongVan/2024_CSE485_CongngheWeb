<?php
require_once 'dbconnection.php';
$db = new dbconnection();
$conn = $db->getConnection();
if ($conn){
    echo "Connected to the database";
}else{
    echo "Failed to connect to the database";
}
?>