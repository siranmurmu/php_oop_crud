<?php

$servername = "localhost";
$username = "root";
$password = "adminadmin";
$dbname = "testing";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo $row['id'];
        echo $row['student_name'];
        echo $row['age'];
        echo $row['city'];
        // echo "<pre>";
        // print_r($row);
        // echo "</pre>";
        
    }
}else{
    echo "No result found.";
}
$conn->close();
?>