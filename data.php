<?php
    $con = mysqli_connect("localhost", "root", "", "my_database" ); // peter moddhe 4 ta part thakbe
    
    if ( mysqli_connect_errno() ) {
        echo "Could not connect to database ! " . mysqli_connect_error();
        exit();
    }
    else {
        echo "Connected to database successfully!<br>"; // <br> = next line
    }


    $sql = "INSERT INTO user_table (name, mobile, email) VALUES ('John' , '479703084' , 'jj@gmail.com') ";
    $result = mysqli_query($con, $sql);


    if( $result ) {
        echo "Data inserted successfully !";
    }
    else {
        echo "Data not inserted ! " . mysqli_error($con);
    }


?>