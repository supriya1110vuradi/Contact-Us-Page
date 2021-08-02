<?php
include("config.php");
extract($_POST);
$sql = "INSERT INTO `contact_database`(`email`, `name`, `subject`, `message`, `query`) VALUES ('".$email."','".$name."','".$subject."','".$message."','".$query."')";
$result = $mysqli->query($sql);
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
echo "Thank You For Contacting Us ";
$mysqli->close();


print_r($_POST)
?>

