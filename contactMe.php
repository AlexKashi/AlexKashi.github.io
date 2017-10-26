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
    $to = "alex@alexkashi.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
    mail ("alexkashi47@gmail.com", "foo", "bar");
    mail ($to, $subject, $body, $from);
}
?>