<?php
    // SwiftMailer を読み込む
    require "vendor\autoload.php";

    // SMTP サーバーの設定
    $transport = new Swift_SmtpTransport("smtp.gmail.com", 465, "ssl");
    $transport->setUsername('xxxxxxxxxxxxxxxxxxxx@gmail.com');
    $transport->setPassword('yyyyyyyyyy');

    //  Swift_Mailer クラスを new する
    $mailer = new Swift_Mailer($transport);

    // メッセージの作成
    $message = new Swift_Message();
    $message->setFrom("xxxxxxxxxxxxxxxxxxxx@gmail.com");
    $message->setTo(["xxxxxxxxxxxxxxxxxxxx+test@gmail.com"]);
    $message->setSubject("テストです");
    $message->setBody("ああああああああああああああああああああ");
    //$message->addPart("<p>あああああああああああああああああ</p>", "text/html");

    // メッセージの送信
    $result = $mailer->send($message);

    var_dump($result);
?>