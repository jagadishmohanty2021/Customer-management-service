<?php
require 'database.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
$cname=$_POST['cname'];
$cfname=$_POST['fname'];
$cmname=$_POST['mname'];
$chname=$_POST['hname'];
$cdob=$_POST['dob'];
$doa=$_POST['doa'];
$add=$_POST['add'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

if(isset($_FILES['image'])){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
}

if(isset($_FILES['image'])){
    $iname = $_FILES['image']['name'];
    $isize = $_FILES['image']['size'];
    $itype = $_FILES['image']['type'];
    $itmp = $_FILES['image']['tmp_name'];
    
    $pic=$conn->real_escape_string('pic/'.$_FILES['image']['name']); 
    move_uploaded_file($itmp,"pic/".$iname);

    if(isset($_FILES['matric'])){
        $pname = $_FILES['matric']['name'];
        $psize = $_FILES['matric']['size'];
        $ptype = $_FILES['matric']['type'];
        $ptmp = $_FILES['matric']['tmp_name'];
        
        $mat=$conn->real_escape_string('matric/'.$_FILES['matric']['name']); 
        move_uploaded_file($ptmp,"matric/".$pname);

        if(isset($_FILES['acard'])){
            $aname = $_FILES['acard']['name'];
            $asize = $_FILES['acard']['size'];
            $atype = $_FILES['acard']['type'];
            $atmp = $_FILES['acard']['tmp_name'];
            
            $ad=$conn->real_escape_string('aadhar/'.$_FILES['acard']['name']); 
            move_uploaded_file($atmp,"aadhar/".$aname);
        
            if(isset($_FILES['pan'])){
                $nname = $_FILES['pan']['name'];
                $nsize = $_FILES['pan']['size'];
                $ntype = $_FILES['pan']['type'];
                $ntmp = $_FILES['pan']['tmp_name'];
                
                $pan=$conn->real_escape_string('pancard/'.$_FILES['pan']['name']); 
                move_uploaded_file($ntmp,"pic/".$nname);
            
                if(isset($_FILES['it'])){
                    $tname = $_FILES['it']['name'];
                    $tsize = $_FILES['it']['size'];
                    $ttype = $_FILES['it']['type'];
                    $ttmp = $_FILES['it']['tmp_name'];
                    
                    $it=$conn->real_escape_string('it/'.$_FILES['it']['name']); 
                    move_uploaded_file($ttmp,"it/".$tname);
                

$sql="insert into personal (name,fname,mname,hname,dob,ani,address,mail,phone,acard,photo,pancard,matric,it) values ('$cname','$cfname','$cmname','$chname','$cdob','$doa','$add','$email','$mobile','$ad','$pic','$pan','$mat','$it')"; 
if($conn->query($sql)){
    
    echo '<script>alert("Data Successfully save");window.open("personal.html","_self");</script>';
}else{
    echo '<script>alert("Error");window.open("personal.html",,"_self");</script>';
    
}
                }
            }
        }
    }
}
}
               
?>