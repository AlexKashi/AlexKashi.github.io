<?php
on_start();
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $from = 'From: alexkashi.com'; 
    $to = 'alexkashi47@gmail.com'; 
    $subject = 'Website Contact Me';
    $body = "From: $name\n E-Mail: $email\n Phone: $phone\n \n Message:\n $message";
?>

<?php
if ($_POST['submit']) {
    echo $to, $subject, $body, $from, "with multiple parameters.";
    mail ($to, $subject, $body, $from);
}
?>