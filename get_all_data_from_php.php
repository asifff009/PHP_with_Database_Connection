<?php

$con = mysqli_connect("localhost", "root", "", "practice_yt");

$sql = "SELECT * FROM yt_practice";
$result = mysqli_query($con, $sql);
$rowcount = mysqli_num_rows($result);

echo "Total row found: " . $rowcount;

foreach($result as $singleRow){
    $name = $singleRow['name'];
    $mobile = $singleRow['mobile'];
    $email = $singleRow['email'];
    echo "<br> Name: " . $name . ", Mobile: " . $mobile . ", Email: " . $email;
    echo "<br>";
}


?>
