<?php
//Create connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Check Connection
if (mysqli_connect_errno()) {
    # code...
    echo 'Failed to connect to MYSQL' . mysqli_connect_errno();
}
