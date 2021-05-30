<?php
// Database Connection 
$conn = new mysqli('localhost', 'root', '', 'demo');
//Check for connection error
$select = "SELECT * FROM `image`";
$result = $conn->query($select);
while($row = $result->fetch_object()){
  $pdf = $row->pic;
 
}

echo '<h1>Here is the information PDF</h1>';
echo '<strong>Created Date : </strong>';
echo '<strong>File Name : </strong>'.$pdf;
?>



<br/><br/>
<iframe src="<?php echo $pdf; ?>" width="90%" height="500px">
</iframe>

