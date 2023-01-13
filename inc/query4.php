<?php
require_once('C:\xampp\htdocs\Ticket\config\config.php');
require_once('C:\xampp\htdocs\Ticket\config\db.php');



//Get Ticket_id and Response from AJAX
$q = htmlentities($_REQUEST['q']); #response
$p = htmlentities($_REQUEST['p']); #ticket_id
$name = 'IT Help Desk'; #name of System
$email = htmlentities("mwesigyejosephug@gmail.com"); #email of Respondent(from session)
$message = $q;
//$toEmail = 'antonioishmaelug@gmail.com'; 


#GET THE USER_ID FROM THE TICKET_ID
//Create query
$query1 = "SELECT `user_id` FROM `ticket` WHERE `ticket_id`=$p;";

//Get the result
$result1 = mysqli_query($conn, $query1);

//Fetch Data
$user_id1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);

//Set user_id
$user_id = ($user_id1[0]['user_id']);

//Free Result
mysqli_free_result($result1);




#GET THE EMAIL FROM THE USER_ID
//Create query1
$query2 = "SELECT `email` FROM `users` WHERE `user_id`=$user_id;";

//Get the result
$result2 = mysqli_query($conn, $query2);

//Fetch Data
$toEmail1 = mysqli_fetch_all($result2, MYSQLI_ASSOC);

$toEmail = $toEmail1[0]['email']; #email of receiver(Client) #use userid to get it

//Free Result
mysqli_free_result($result2);


// Create Query
$query = "UPDATE ticket SET response = '$q', problem_status= 'Complete' WHERE ticket_id ='$p' ";

if (mysqli_query($conn, $query)) {
    //Check required fields
    if (!empty($email) && !empty($name) && !empty($message)) {
        # Passed... 
        //Check Email
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            # Failed...
            echo 'Please use a valid email';
        } else {
            # Passed...
            //Recepient Email
            $subject = 'Reply From ' . $name;
            $body = '<h2>Reply From IT Help Desk</h2>
                    <h4>Name</h4><p>' . $name . '</p>
                    <h4>Email</h4><p>' . $name . '</p>
                    <h4>Message</h4><p>' . $message . '</p>
            ';
            //Email headers
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

            //Addtional Headers
            $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";
            if (mail($toEmail, $subject, $body, $headers)) {
                # code...
                echo 'Email Sent';
            } else {
                # code...
                echo 'Your email was not sent';
            }
        }
    } else {
        # Failed...
        echo 'Please fill in all fields';
    }
} else {
    # code...
    echo 'ERROR: ' . mysqli_error($conn);
}













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
