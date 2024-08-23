<?php
$servername = "localhost"; 
$username = "root";        
$password = "";             
$dbname = "vlab_iitk_db";

// $servername = "sg2nlmysql33plsk.secureserver.net:3306"; 
// $username = "vlcertiverify";        
// $password = "5Ii5pw3$1";             
// $dbname = "ph15958919426_vlabiitkcerti";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>