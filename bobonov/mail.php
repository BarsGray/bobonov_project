<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
    //  && isset($_POST['recaptcha_response']) $recaptcha=file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6LfePhAqAAAAAEwisZ1o3Dl27bpR5T463FFyWRTT&response='.$_POST['recaptcha_response']);
    // $recaptcha=json_decode($recaptcha);

    if($recaptcha->score>=0.5){
		$name=urldecode(htmlspecialchars(trim($_POST['name'])));
		$tel=urldecode(htmlspecialchars(trim($_POST['tel'])));
		$comment=urldecode(htmlspecialchars(trim($_POST['comment'])));
		$docs=urldecode(htmlspecialchars(trim($_POST['docs'])));
		
		$headers='From: Психологический центр Бобоновых <info@'.$_SERVER["HTTP_HOST"].'>' . "\r\n" .
		'Reply-To: '.$_POST['ff_mail'].'' . "\r\n" .
		"Content-type: text/html; charset=utf-8\r\n" .
		'X-Mailer: PHP/' . phpversion();

		if(mail('vzh.info@mail.ru','Заявка с сайта','<p>Имя: '.$name.'.</p><p>Телефон: '.$tel.'.</p><p>Проблемы: '.$comment.'</p><p>Доктор: '.$docs.'</p>',$headers))
			echo 'ok';
		else
			echo 'При отправке сообщения возникли ошибки!';
    } else
		echo 'При отправке сообщения возникли ошибки!';
}
?>