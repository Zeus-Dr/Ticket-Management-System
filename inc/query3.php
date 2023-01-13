<?php
require_once('C:\xampp\htdocs\Ticket\config\config.php');
require_once('C:\xampp\htdocs\Ticket\config\db.php');

//Email must come from Session
$email = 'mwesigyejosephug0@gmail.com';

//Get Ticket_id from AJAX
$q = htmlentities($_REQUEST['q']);

// Create Query
$query = "UPDATE ticket SET 
            Temail = '$email' 
                WHERE ticket_id ={$q}";



if (mysqli_query($conn, $query)) {
} else {
    # code...
    echo 'ERROR: ' . mysqli_error($conn);
}
