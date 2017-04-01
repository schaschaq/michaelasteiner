<?php
require_once("wp-load.php");

//function to generate response
function my_contact_form_generate_response($type, $message)
{

    echo json_encode([$type => $message]);

}

//response messages
$missing_content = "<strong>Achtung !</strong> Bitte füllen Sie alle rot markierten Felder aus.";
$email_invalid = "<strong>Achtung !</strong> Die eingegebene Email-Adresse ist nicht gültig.";
$message_unsent = "<strong>Fehler !</strong> Ihre Nachricht konnte aus technischen Gründen nicht übermittelt werden.";
$message_sent = "<strong>Vielen Dank !</strong> Ihre Anfrage wurde erfolgreich übermittelt.";

//user posted variables
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$when = $_POST['when'];
$where = $_POST['where'];
$type = $_POST['type'];
$message = $_POST['message'];

//php mailer variables
$to = get_option('admin_email');
$subject = "Neue Nachricht von: " . get_bloginfo('name');
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

//validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    my_contact_form_generate_response("warning", $email_invalid);
else //email is valid
{
    //validate presence of name and message
    if (empty($name) || empty($message)) {
        my_contact_form_generate_response("warning", $missing_content);
    } else //ready to go!
    {
        $sent = wp_mail($to, $subject, strip_tags($message), $headers);
        if ($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
        else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
    }
}