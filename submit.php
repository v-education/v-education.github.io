<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $wechat = $_POST['wechat'];
  $phone = $_POST['phone'];
  $course = $_POST['course'];

  // Save the form data to a file or database
  // ...

  // Send an email notification to the course administrator
  $to = 'umarovbek@outlook.com';
  $subject = 'New course registration';
  $message = "Name: $name\nEmail: $email\nWeChat: $wechat\nPhone: $phone\nCourse: $course";
  $headers = "From: $email\r\n" .
             "Reply-To: $email\r\n" .
             "X-Mailer: PHP/" . phpversion();

  mail($to, $subject, $message, $headers);
}
?>
