<?php
require 'database.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
$pnum=$_POST['policynum'];
$pname=$_POST['policyname'];
$pdoc=$_POST['daoc'];
$mode=$_POST['md'];
$term=$_POST['te'];
$amount=$_POST['premium'];
$bond=$_POST['bonds'];
$brd=$_POST['bondrd'];
$brb=$_POST['bondrb'];


$sql="insert into policy (policynum,policyname,doc,mode,term,amount,recbond,daterecbond,recby) values ('$pnum','$pname','$pdoc','$mode','$term','$amount','$bond','$brd','$brb')"; 
if($conn->query($sql)){
    
    echo "1";
}else{
    echo "0";
}


$conn->close();
}
?>