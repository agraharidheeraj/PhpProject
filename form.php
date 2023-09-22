
<?php
$servername = "localhost";
$username= "your_username";
$password= "your_password";
$db_name= "your_database";


$connection = new mysqli($servername, $username, $password, $db_name);

if($connection->connect_erroer){
    die("Could not connect".$connection->connect_error);

}





$full_name = $_POST['$full_name'];
$phone_number = $_POST['$phone_number'];
$email = $_POST['$email'];
$subject= $_POST['$subject'];
$message= $_POST['$message'];
$ip_address = $_SERVER['REMOTE_ADDR'];

$sql= "INSERT INTO contact_form(full_name, phone_number, email, subject, message, ip_address) 
VALUES ('$full_name','$phone_number', '$email','$subject', '$message', '$ip_address')";

if($connection->query($sql)===TRUE){

    $send= "dheeraj@agrahari.com";
    $subject= "Contact Information Submission";
    $message = "Name: $full_name\nphone: $phone_number\nemail: $email\nsubject:$subject\nMessage: $message";
    mail($send, $subject,$message);
    echo "Your Form Submitted Succesfully !";
}
else {
    echo "Showing Error" . $sql . "<br>" .$connection->error;
}

$connection->close();

?>

