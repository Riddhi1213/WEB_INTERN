<?php

$Servername = "localhost";
$Username = "root";
$Password = "";

//Create connection
$conn = mysqli_connect($Servername,$Username,$Password);

//Check connection
if(!$conn)
{
	die("FAILED : ".mysqli_connect_error());
} 
echo ("SUCCESS \n ");

//Create database
$sql = "CREATE DATABASE Student";
if ($conn->query($sql) === TRUE ) 
{
	echo ("\n DATA_SUCCESS");
}
else
{
	echo ("\n ERROR".$conn->error);
}

//$conn->close();
$name = "Student";
$conn = mysqli_connect($Servername,$Username,$Password,$name);
//Create table
$sql = "CREATE TABLE S_Info(id INT NOT NULL AUTO_INCREMENT, name VARCHAR(50) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    address VARCHAR(100) NOT NULL,
    phone_num INT NOT NULL,
    CGPA INT NOT NULL,
    nob INT NOT NULL,
    skills VARCHAR(20) NOT NULL,
    email VARCHAR(60) NOT NULL,
    pwd VARCHAR(100) NOT NULL,
    rePWD VARCHAR(100) NOT NULL,
    PRIMARY KEY(id)
    )";
    if ($conn->query($sql) === TRUE ) 
    {
	$result = mysqli_query($conn, $sql);
	echo ("\n TABLE_SUCCESS");
    }
   else
    {
 	 die("SORRY"); 
    }   


?>