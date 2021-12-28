<?php
    //$Firstname = ($_POST['Fname']);
    //$Lasttname = ($_POST['Lname']);
    if($_POST['patronymic'] != "")
    {
        //$Patronymic = trim($_POST['patronymic']);
    }
    $to = "gorhayrapetyan2003@gmail.com";
    $from = trim($_POST['email']);

    $massage = htmlspecialchars($_POST['massage']);
    $massage = urldecode($massage);
    $massage = trim($massage);

    $headers = "From: $from" . "\r\n" .
    "Reply-To: $from" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();
    
    $subject = 'Соревнование';

    if(mail($to, $subject, $massage, $headers))
    {
        echo 'Письмо отправлено';
    }else{
        echo 'Письмо не отправлено';
    }
?>