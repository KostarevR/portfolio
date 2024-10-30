<?php header('Content-type: text/html; charset=utf-8'); // задаем кодировку
if (!empty($_POST['tel']) && (!empty($_POST['text']))) { //проверяем поля на пустоту
$to = "lkostarev94@gmail.com" ; // куда отправляем письмо
$mail = 'Почта: '.$_POST['tel'].PHP_EOL; // получаем данные из формы
$text='Сообщение:' .$_POST['text']; // получаем данные из формы
$message=$mail. htmlentities($text); // формируем сообщение
$subject = "Письмо с сайта"; // тема письма
mail($to, $subject, $message); // отправка письма
echo "Письмо отправлено!"; // сообщение при отправке
} else {
echo "Заполните все поля"; // сообщение при ошибке
}
?>
//скрипт редиректа при отправке
<script type="text/javascript">
setInterval(function(){ document.location.replace("index.html"); }, 3000);
</script>