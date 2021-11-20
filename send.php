<?
if((isset($_POST['min'])&&$_POST['min']!="")&&(isset($_POST['max'])&&$_POST['max']!="")){ 
        $to = 'abs.romik@yandex.ru'; 
        $subject = 'Кто-то еще прошел квиз';
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p><b>Нужна дверь в:</b> <br>'.$_POST['q1_1'].' <br>'.$_POST['q1_2'].' <br>'.$_POST['q1_3'].'</p>
                        <p><b>Характеристики:</b>  <br>'.$_POST['q2_1'].' <br>'.$_POST['q2_2'].' <br>'.$_POST['q2_3'].' <br>'.$_POST['q2_4'].'</p>
                        <p><b>Бюджет:</b> '.$_POST['min'].' - '.$_POST['max'].' р.</p>         
                        <p><b>Контактные данные:</b> <br>Телефон - '.$_POST['phone'].' <br>Telegram - '.$_POST['tg'].' <br>Viber - '.$_POST['vb'].' <br>Whatsapp - '.$_POST['wp'].' <br>Messenger - <a href="'.$_POST['link'].'">'.$_POST['link'].'</a></p>
                    </body>
                </html>'; 
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
        $headers .= "From: info@prodychet.ru \r\n"; 
        mail($to, $subject, $message, $headers); 
        echo 'true';
} else {  
    echo 'false';
}
?>