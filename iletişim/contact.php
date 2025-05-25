<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $text = $_POST['text'];
    $massage = $_POST['mesaj'];
    
    $email_from = 'İletişim@iletişim.com';
    $email_konu = 'Yeni İletişim Formu';
    $email_body = "Gönderen Adı: $name.\n".    
                    "Gönderen Maili: $visitor_email.\n".
                    "Konu: $text.\n".
                    "Gönderen Mesajı: $message.\n";
    
    $to = 'ufukberkbayraktar@gmail.com';
    $headers = "From: $email_from\r\n";
    $headers .="Cevap-Ver $visitor_email\r\n";
    mail($to,$email_konu,$email_body,$headers);
    header("Location: contact.html");
?>