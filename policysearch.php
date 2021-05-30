<?php
require "database.php";

    $num=$_POST['policyn'];
    $sql="select * from policy  where policynum='$num'";
    $result = $conn->query($sql) or die("sql query fail.");
    $output="";
    if ($result->num_rows > 0) {
        //$output.='<table border="1" width="100%" cellspacing="0" cellpadding="10px">';
        
        while($row = $result->fetch_assoc()) {
           $output = "<tr>
            <th>Policy Number : </th><td>{$row["policynum"]}</td><th>Policy Holder Name : </th><td>{$row["policyname"]}</td>
            </tr>
            <tr>
            <th>Date of Commencement : </th><td>{$row["doc"]}</td><th>Mode : </th><td>{$row["mode"]}</td>
            </tr>
            <tr>
            <th>Term : </th><td>{$row["term"]}</td><th>Premium Amount : </th><td>{$row["amount"]}</td>
            </tr>
            <tr>
            <th>Bond Recieved? : </th><td>{$row["recbond"]}</td><th>Bond Recieved Date : </th><td>{$row["daterecbond"]}</td>
            </tr>
            <tr><th>Bond Revieved By : </th><td>{$row["recby"]}</td><td></td><td></td></tr>";

        }
       // $output .= "</table>";
        $conn->close();
        echo $output;
        
    }else {
        
        echo "No Record Found.";
    }



?>