<?php


if($_POST){
    if($_POST['sendMail']){
        include_once 'sendMail.php';
        $email = new SendMail(
            $_POST['name'],
            $_POST['phone_number'],
            $_POST['email_subject'],
            $_POST['message'],
            $_POST['email']);
        
        $email->send();
    }
}