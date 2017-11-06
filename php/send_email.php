<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $space = " ";
    $email_to = "jaycen9887@gmail.com";
    $email_subject = $_POST['subject'];
    $first_name = $_POST['firstname']; // required
    $last_name = $_POST['lastname']; // required
    $name = $first_name $space $last_name;
    $email_from = $_POST['email']; // required
    $comments = $_POST['comment']; // required

    $email_body = "You have recieved a new message from $name. \n Message below: \n $comments "
 
    $to = "jaycen9887@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email_from \r\n";

    mail($to, $email_subject, $email_body, $headers);

?>