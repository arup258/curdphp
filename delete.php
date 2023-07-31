<?php 
include('./dbcon.php');
$delete=$_GET['delete'];

$query="DELETE FROM users WHERE id='$delete'";
$sql=mysqli_query($conn,$query);

if($sql){
    header('location:index.php');
}else{
    echo "<script> alert('failed')</script>";
}



?>