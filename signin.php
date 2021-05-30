<?php

require 'database.php';

if($_SERVER['REQUEST_METHOD']=='POST'){

    $username=$_POST['username'];
    $password=$_POST['password'];
    $stmt=$conn->prepare("select * from login where username= ? and password= ?");
    $stmt->bind_param("ss",$username,$password);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0){
        $data = $stmt_result->fetch_assoc();

        if($username==$data['username'] && $password==$data['password']){
      
            echo '1';
     
        }else{
          echo "0";
        }
    }else{
         echo "0";
    } 


    $conn->close();
  }


?>