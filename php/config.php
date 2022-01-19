<?php

$conn = mysqli_connect("localhost", "root", "", "chat");
if(!$conn) {
    echo "Database connection fail!" . mysqli_connect_error();

}

?>
