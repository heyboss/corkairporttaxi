<?php
// check if fields passed are empty
if(empty($_POST['name']) ||
   empty($_POST['phone']) ||
   empty($_POST['email']) ||
   empty($_POST['pickuptime']) ||
   empty($_POST['pickupdate']) ||
   empty($_POST['pickuplocation']) ||
   empty($_POST['passengers']) ||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$pickuptime = $_POST['pickuptime'];
$pickupdate = $_POST['pickupdate'];
$pickuplocation = $_POST['pickuplocation'];
$passengers = $_POST['passengers'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'taxibase@corkairporttaxi.ie'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "Cork Airport Taxi:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "You have received a new message from your website's contact form.\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n\nEmail: $email_address 
                \n\nPickupTime: $pickuptime \n\nPickupDate: $pickupdate \n\nPickupLocation: $pickuplocation \n\Passengers: $passengers \n\nMessage:\n$message";
$headers = "From: noreply@your-domain.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
echo "Thank you for your enquiry!";
return true;			
?>