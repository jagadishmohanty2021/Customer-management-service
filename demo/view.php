<?php
$hostname="localhost";
$username="root";
$password="";
$database="demo";

$conn=new mysqli($hostname,$username,$password,$database);

if(!$conn){
  die('Could not Connect My Sql:' .mysql_error());
}

$sql="select * from image";
$result=$conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo $row['pic'];

    }


}else{
    echo "no record found";
}
?>
<html>
    <body>
        <a src="<?= $_SESSION['picture'];?>">hello</a>
    </body>
</html>