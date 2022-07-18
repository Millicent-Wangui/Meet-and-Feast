<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "meet";

//Start a session if one is not set
if(!isset($_SESSION))
{
    session_start();
  
}

//establish a connection
$conn = new mysqli($servername,$username,$password,$databasename);

//check he connection
if($conn -> connect_error){
    die("Connection error: " .$conn -> connect_error);
} 
    
