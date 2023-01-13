<?php
// //Create query
// $query = 'SELECT * FROM respondent_tasks';

// //Get the result
// $result = mysqli_query($conn, $query);

// //Fetch Data
// $my_tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);

// //Free Result
// mysqli_free_result($result);

// $my_tasks2 = [];
// foreach ($my_tasks as $my_tasks1) {
//     $ticket_id = $my_tasks1['ticket_id'];

//     //Create query1
//     $query1 = 'SELECT * FROM ticket WHERE ticket_id=' . $ticket_id;

//     //Get the result
//     $result1 = mysqli_query($conn, $query1);

//     //Fetch Data
//     $my_tasks1 = mysqli_fetch_assoc($result1);
//     array_push($my_tasks2, $my_tasks1);

//     //Free Result
//     mysqli_free_result($result1);
// }

//Email from Session
$email = 'mwesigyejosephug0@gmail.com';
//Create query

$query = "SELECT *  FROM `ticket` WHERE `Temail` LIKE '%$email%'";

//Get the result
$result = mysqli_query($conn, $query);

//Fetch Data
$my_tasks2 = mysqli_fetch_all($result, MYSQLI_ASSOC);

//Free Result
mysqli_free_result($result);
