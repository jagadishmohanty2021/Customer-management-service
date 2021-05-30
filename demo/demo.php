<?php
$hostname="localhost";
$username="root";
$password="";
$database="demo";

$conn=new mysqli($hostname,$username,$password,$database);

if(!$conn){
  die('Could not Connect My Sql:' .mysql_error());
}
if(isset($_FILES['image'])){
$file_name = $_FILES['image']['name'];
$file_size = $_FILES['image']['size'];
$file_type = $_FILES['image']['type'];
$file_tmp = $_FILES['image']['tmp_name'];

$pic=$conn->real_escape_string('document/'.$_FILES['image']['name']); 
move_uploaded_file($file_tmp,"document/".$file_name);
$sql="insert into image (pic) values ('$pic')";
if($conn->query($sql)){
echo "successfull";
}else{
echo "error";
}

}


?>

