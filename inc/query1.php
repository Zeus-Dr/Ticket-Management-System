<?php
//Create query
$query = 'SELECT * FROM ticket WHERE Temail IS NULL ';

//Get the result
$result = mysqli_query($conn, $query);

//Fetch Data
$tickets = mysqli_fetch_all($result, MYSQLI_ASSOC);

//Free Result
mysqli_free_result($result);
