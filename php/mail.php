<?php 
if(isset($_POST['submit'])){
    $to = "info@cheetahye.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $fullName = $_POST['fullName'];
    $subject = "Form submission";
    $phoneNumber = "phone";
    $date = "date";
    $time = "time";
    $subject2 = "Copy of your form submission";
    $message = $fullName . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $fullName . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>