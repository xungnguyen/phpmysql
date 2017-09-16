<?php

$servername = "localhost";
$username = "root";
$password = "";
$tablename = "newdb";

$conn  = mysqli_connect($servername, $username , $password, $tablename);

//INSERT
//$sql = 'INSERT INTO `firsttable`(`name`, `height`, `date`) VALUES ("adrian", "1.7", "2017-09-15")';
//mysqli_query($conn, $sql);
//SELECT
$sql = "SELECT * FROM 'hanghoa'";
mysqli_query($conn,$sql);

/*//DELETE
$sql = "DELETE FROM `firsttable` WHERE id=4";
mysqli_query($conn,$sql);

//UPPDATE
$sql = "UPDATE `firsttable` SET name='xungnguyen', height='1.70', date='2017-08-04' WHERE id=11";
mysqli_query($conn,$sql);*/



print_r($conn);








?>
