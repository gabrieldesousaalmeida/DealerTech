<?php
    namespace lib\support;
    use Exception;
    use stdclass;
    use PHPMailer\PHPMailer\PHPMailer;
class email{
    /** @var PHPMailer */
    private $mail;

    /** @var stdclass */
    private $data;

    /** @var Exception */
    private $error;

    public function __construct(){
        $this->mail = new PHPMailer(exceptions: true);
        $this->data = new stdclass();

        $this->mail->isSMTP();
        $this->mail->isHTML();
        $this->mail->setLanguage(langcode: "br");

        $this->mail->SMTPAuth = true; 
        $this->mail->CharSet = "utf-8";
        
        $this->mail->Host = CONF_SMTP_MAIL["host"];
        $this->mail->Port = CONF_SMTP_MAIL["port"];
        $this->mail->Username = CONF_SMTP_MAIL["User"];
        $this->mail->Password = CONF_SMTP_MAIL["password"]; 

        public function add(string $subject, string $name, string $recepient_name, string $recepient_email): Email
        {
            $this->data->subject = $subject;
            $this->data->body = $body;
            $this->data->recepient_name = $recepient_name;
            $this->data->recepient_email = $recepient_email;
            return $this;
        }

        public function attach(string $filePath, string $fileName): Email
        {
            $this->data->attach[$filePath] = $fileName;
        }

        public function send(string $from_name = CONF_SMTP_MAIL["from_name"], string $from_email = CONF_SMTP_MAIL["$from_email"]): bool
        {
            try{
                $this->mail->Subject = $this->data->subject;
                $this->mail->msgHTML($this->data->body);
                $this->mail->addAddress($this->data->recepient_email, $this->data->recepient_name);
                $this->mail->setFrom($from_email, $from_name);

                if(!empty($this->data->attach)){
                    foreach($this->data->attach as $path => $name)(
                        $this->mail->addAttachment($path, $name);
                    )
                }

                $this->mail->send();
                return true;
            }catch (Exception $exception){
                $this->error = $error = $exception;
                return false;
            }
        }
        public function error(): ?Exception
        {
            return $this->error;
        }
    }
}
?>