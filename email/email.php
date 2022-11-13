<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Carrega o autoloader do Composer 
require_once  'C:\xampp\htdocs\teste-loja\vendor\autoload.php';




         // chamando a função do phpmailer

    $mail = new PHPMailer(true);

    try {

     //Configurações de servidor de e-mail
    
    $mail->isSMTP(); // Não modifique
    $mail->Host       = 'smtp.office365.com';  // SEU HOST (HOSPEDAGEM)
    $mail->SMTPAuth   = true;                        // Manter em true
    $mail->Username   = 'alexsoares848@outlook.com';   //SEU USUÁRIO DE EMAIL
    $mail->Password   = '#';                   //SUA SENHA DO EMAIL SMTP password
    $mail->SMTPSecure = 'tls';    //TLS OU SSL-VERIFICAR COM A HOSPEDAGEM
    $mail->SMTPOptions = array(
      'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
      )
  );
    $mail->Port       = 587;     //TCP PORT, VERIFICAR COM A HOSPEDAGEM
    $mail->CharSet = 'UTF-8';    //DEFINE O CHARSET UTILIZADO


     //Recipients
     $mail->setFrom('alexsoares848@outlook.com', 'Site');  //DEVE SER O MESMO EMAIL DO USERNAME
     $mail->addAddress('alexsoares848@gmail.com');     // QUAL EMAIL RECEBERÁ A MENSAGEM!
                                                  // VOCÊ pode incluir quantos receptores quiser
    


     if(isset($_POST["acao"])){
        
    }

    
    $email = $_POST['email'];
    
    
    $date=date("d/m/Y");
    

   

       // formatando nossa mensagem (que será envaida ao e-mail)
       $mensagem= 'Esta mensagem foi enviada através do formulário<br><br>';
       
      
       $mensagem.='<b>E-Mail:</b> '.$email.'<br>';
      
       
       $mensagem.='<b>Data de envio:</b> '.$date.'<br>';
       

      // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mensagem do Formulário'; //ASSUNTO
    $mail->Body    = $mensagem;  //CORPO DA MENSAGEM
    $mail->AltBody = $mensagem;  //CORPO DA MENSAGEM EM FORMA ALT



    // $mail->send();
    $enviar = $mail->Send();

    // Limpa os destinatários e os anexos
    $mail->ClearAllRecipients();

    if ($enviar) {
      echo "<script>alert('E-mail enviado com sucesso!'),location.href='../index.php'</script>";    
      
  }
  else {
      echo "Não foi possível enviar o e-mail.";
      echo "<b>Detalhes do erro:</b> " . $mail->ErrorInfo;
      echo "<script>location.href='index.php' </script>";
  }
 
      
   }catch(Exception $e){
        //Caso o e-mail não seja enviado
    echo "Não foi possivel enviar o e-mail. Verifique o erro: {$mail->ErrorInfo}";
      }
     


    

   




    

   
     


    
?>