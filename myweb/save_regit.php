<?php
#$conn = mysqli_connect("localhost","root","","it" );
require_once("database.php");
$code = $_POST["code"];
$name = $_POST["name"];
$password = $_POST["password"];
$sql = "INSERT INTO `studen` (`code`, `name`, `password`) VALUES ('$code', '$name', '$password')";
$r = mysqli_query($conn,$sql);
if($r){
    echo "บันทึกแล้ว";
    echo "<!DOCTYPE html><body><a hrfe="index.html" ></a> </body></html>"
}