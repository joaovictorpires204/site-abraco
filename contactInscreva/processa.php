
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $data = $_POST['data'];

        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, "stevan_j@yahoo.com");
        $subject = "ESCRITÓRIO VIRTUAL -  CONTATO";
        $to = new SendGrid\Email(null, "sjminfo@gmail.com");
        $content = new SendGrid\Content("text/html", "Olá time CLUBE ABRAÇO, <br><br>Acabamos de receber um novo <strong> CONTATO </strong> enviado por uma pessoa que deseja saber mais sobre nós. Vamos entender a necessidade de quem nos procura.
        
        <br><br> <strong> Data da inscrição: $data </strong> 
    
        <br><br>Nome: <strong> $name </strong>
        <br><br>E-mail: <strong> $email </strong>      
        <br><br>Assunto: <strong> $subject </strong>      
        <br><br>Mensagem: <strong> $message </strong>      

        <br>");


        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        ?>
        <script language="JavaScript">
        <!--
        alert("Agradecemos seu contato e informamos que sua SOLICITAÇÃO foi processada com sucesso e direcionada para o setor responsável. Agradecemos seu contato e em breve entraremos em contato!");
        window.location = '../index.html';
        //-->
        </script>
        <?;
		
        ?>
    </body>
</html>

