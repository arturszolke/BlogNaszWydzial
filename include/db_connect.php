<?php
    function db_query($conn, $sql) {
        if ($conn -> query($sql) != TRUE){
            throw new Exception("Error: " . $sql . "<br>" . $conn->error);
        }else{
            return TRUE;
        }
    }

    $conn = mysqli_connect("localhost", "root", "", "blog");
    mysqli_set_charset($conn, "utf8");

    if (mysqli_connect_error()) {
        echo "Connection failed";
        printf("Error : %s", mysqli_connect_error());
    }

?>