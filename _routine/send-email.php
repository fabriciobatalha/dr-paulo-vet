<?php
    $email = $_POST['email'];
    $name = $_POST['name'];
    $whatsappPhone = $_POST['whatsapp-phone'];
    $message = $_POST['message'];
    $captcha = $_POST['captcha'];

    if(!empty($captcha))
    {
        echo "<script> alert('Ops! Ocorreu algum problema, tente novamente!'); location='../index.php'; </script>";
    }
        else
        {
            if(empty($email) || empty($name) || empty($whatsappPhone) || empty($message)) 
            {
                echo "<script> alert('Ops! Preencha todos os campos!'); location='../index.php'; </script>";
                exit();
            }
                else 
                {
                    $to = "contato@drpaulovet.com";
                    $subject = "Solicitação de Consulta via Site";
                    $body = nl2br($message);
                    $body .= "</br></br> WhatsApp/Telefone:";
                    $body .= "</br> $whatsappPhone";
                    $headers = "MIME-Version: 1.0\n";
                    $headers .= "Content-type: text/html; charset=UTF-8\n";
                    $headers .= "From: $name <$email>";
                    $sendEmail = mail($to, $subject, $body, $headers);
                    
                    if($sendEmail) 
                    {
                        echo "<script> alert('Consulta solicitada! Em instantes entraremos em contato!'); location='../index.php'; </script>";
                    }
                        else 
                        {
                            echo "<script> alert('Ops! Ocorreu algum problema, tente novamente!'); location='../index.php'; </script>";
                        }
                }
        }
?>
