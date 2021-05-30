<?php
Session_start();
$hostname="localhost";
$username="id16717604_jagadish";
$password="Nareshmeher@2021";
$database="id16717604_lic";

$conn=new mysqli($hostname,$username,$password,$database);

if(!$conn){
  die('Could not Connect My Sql:' .mysql_error());
}

?>