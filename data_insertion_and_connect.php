<?php

$con = mysqli_connect("localhost", "root", "", "practice_yt");

$name = $_GET['n'];
$mobile = $_GET['m'];
$email = $_GET['e'];


if(mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
    echo "Connected successfully to MySQL database.";
}

$sql = "INSERT INTO yt_practice(name, mobile, email) VALUES('$name','$mobile','$email')";
$result = mysqli_query($con, $sql);

if($result) {
    echo "Data inserted successfully.";
} else {
    echo "Error inserting data: " . mysqli_error($con);
}


?>
