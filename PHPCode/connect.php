<?php
session_start() ;
/*$dbname = 'mailock';
$host ='127.0.0.1'  ;
$dbuser= 'root';
$dbpass = ''; */
$dbname = 'mohamedkhaled14';
$host ='mysql.aba.ae'  ;
$dbuser= 'mohamedkhaled14';
$dbpass = '22823910mK15'; 
$conn = new mysqli($host , $dbuser , $dbpass , $dbname ) ; 

// Check connection 


$sql = "CREATE TABLE  IF NOT EXISTS members(
UserName VARCHAR(50) NOT NULL ,  
Email VARCHAR(50) NOT NULL ,
Password VARCHAR(50) NOT NULL)  " ; 

$conn->query($sql) ;

$sql1 = " CREATE TABLE if not exists chat  (
  
    Msgfrom varchar(255) NOT NULL,
    Msgto varchar(255) NOT NULL ,
    message varchar(255) not null , 
    Msgsubject varchar(255) NOT NULL , 
    RecName varchar(255) NOT NULL

)" ;

	$conn->query($sql1) ;
?>
