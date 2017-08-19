<?php

$emailfrom = "info@globaljutebags.in"; // match this to the domain you are sending email from
$email = $_POST['email'];

$emailenquiryto = "globalexpt@gmail.com";

$headers = "From: " . $_POST['name'] . "<" . $emailfrom . ">\r\n";
$headers .= "Reply-To: " . $_POST['name'] . " <" . $email . ">\r\n";
$headers .="X-Mailer: PHP/" . phpversion();

$subject = "Website Enquiry from " . $_POST['name'];

$message = "\n\n=====================================================";
$message .= "\n\nName: " . $_POST['name'];
$message .= "\n\nCompany Name: " . $_POST['compname'];
$message .= "\n\nMobile: " . $_POST['mobile'];
$message .= "\n\nEnquiry Description:\n\n" . $_POST['description'];
$message .= "\n\n=====================================================";

mail($emailenquiryto, $subject, $message, $headers);   // SENDING ENQUIRY DETAILS TO OUR EMAIL

// SENDING A COPY OF ENQUIRY TO THE ENQUIRER
$headers = "From: Global Exporters & Importers <" . $emailfrom . ">\r\n";
$headers .= "Reply-To: Global Exporters & Importers <" . $emailenquiryto . ">\r\n";
$headers .="X-Mailer: PHP/" . phpversion();

$subject = "Thank you for your Enquiry";

$message="\nThank you, " . $_POST['name'] . " for the enquiry" . $message;

$message .= "\n\nWe will revert back to you soon.\n\nFeel free to contact us anytime if you have any further query.\n\nHave a Nice Day!";

mail($email, $subject, $message, $headers);   //send a copy to enquirer

//echo "Thanks for your enquiry. ^_^";

include("thank.html");

?>
