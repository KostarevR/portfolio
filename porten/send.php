<html>
<head>
<title>Форма заявки с сайта</title>
</head>
<body>
<?php
//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['email'])){
 ?> 

<form action="send.php" method="post">
    <input type="email" name="email" id="" placeholder="Ваша почта" class="spam__email" required>
    <button type="submit" value="send" class="btn-footer">ПОДПИСАТЬСЯ</button>
</form>

<?php
} else {
 //показываем форму

 $email = $_POST['email'];

 $email = htmlspecialchars($email);

 $email = urldecode($email);

 $email = trim($email);
 if (mail("lkostarev94@gmail.com", "Заявка с сайта", " E-mail: ".$email ,"From: e2@mail.ru \r\n")){
 echo "Сообщение успешно отправлено";
 } else {
 echo "При отправке сообщения возникли ошибки";
 }
}
?>
</body>
</html>