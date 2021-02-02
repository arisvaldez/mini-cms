
<?php
class SendMail
{
    public $name;
    public $phone_number;
    public $email_subject;
    public $message;
    public $email;


    function __construct($name, $phone_number, $subject, $message, $email)
    {
        $this->name = $name;
        $this->email_subject =  $subject;
        $this->phone_number = $phone_number;
        $this->email = $email;
        $this->message = $message;
    }

    function send()
    {
        $email_to = $this->email;
        
        $email_message = "Name: ".$this->name."\n";
        $email_message .= "Email: ".$this->email."\n";
        $email_message .= "Tel: ".$this->phone_number;
        $email_message .= "Message: ".$this->message."\n";

        $headers = 'From: '.$this->email."\r\n".
        'Reply-To: '.$this->email."\r\n" .
        'X-Mailer: PHP/' . phpversion();

        mail($email_to, $this->email_subject, $email_message, $headers);
    }
}
