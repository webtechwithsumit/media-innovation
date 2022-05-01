<?php
    
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $message = $_POST['message'];

   //Email Connection
   $to = "kushpriyanshu91@gmail.com";
$subject = "Lead Subitted from " . $name ;
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Phone =" . $phone . "\r\n Message =" . $message;
$headers = "From: priyanshu@dynamisers.com" . "\r\n" .
"CC: kushpriyanshu91@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
   //Database Connection

   $conn = new mysqli('localhost','kiraekib_media','media@123!','kiraekib_media');
   if($conn->connect_error){
   	die('Connection Failed : '.$conn->connect_error);

   }else{
   	   $stmt = $conn->prepare("insert into register(name, email, phone, message) values(?, ?, ?, ?)");
   	   $stmt->bind_param("ssis",$name, $email, $phone, $message);
   	   $stmt->execute();
      header("Location:index.php");
   	   $stmt->close();
   	   $conn->close();
   }

?>