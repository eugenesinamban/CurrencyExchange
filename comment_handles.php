<?php 
    @$to = "eugene@yogiexchange.rf.gd"; // this is your Email address
    @$from = $_POST['email']; // this is the sender's Email address
    @$first_name = $_POST['first_name'];
    @$last_name = $_POST['last_name'];
    @$subject = "Form submission";
    @$message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    
    $headers = "From:" . $from;
   
?>