<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
header('Content-Type: application/json');
if ($firstname === ''){
  print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
  exit();
}
if ($lastname === ''){
  print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
  exit();
}
if ($email === ''){
  print json_encode(array('message' => 'Email cannot be empty', 'code' => 0));
  exit();
} else {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  print json_encode(array('message' => 'Email format invalid.', 'code' => 0));
  exit();
  }
}
if ($phone === ''){
  print json_encode(array('message' => 'Phone cannot be empty', 'code' => 0));
  exit();
}
if ($message === ''){
  print json_encode(array('message' => 'Message cannot be empty', 'code' => 0));
  exit();
}
$content= "Message from $firstname at Electro-Thermal Network Website";
$recipient = "info@electro-thermalnetwork.com";
$mailheader = "First Name: $firstname \n\n";
$mailheader .= "Last Name: $lastname \n\n";
$mailheader .= "Email: $email\n\n";
$mailheader .= "Phone: $phone\n\n";
$mailheader .= "Message:\n$message\n\n";

$email_headers = 'From: '.$firstame.' <'.$email. '>'. "\r\n";
mail($recipient, $content, $mailheader, $email_headers) or die("Error!");
print json_encode(array('message' => 'Message successfully sent!', 'code' => 1));
exit();
?>