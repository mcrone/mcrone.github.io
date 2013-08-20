

<?php

if(isset($_POST['button_pressed']))
{
    $to      = 'crone.michael@gmail.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: crone.michael@gmail.com' . "\r\n" .
        'Reply-To: crone.michael@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    echo 'Email Sent.';
}

?>