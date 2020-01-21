<?php
//++UTM++
session_start();

$utm = array();

foreach($_SESSION as $k => $v){
if(strpos(($k), 'utm_') === 0){
$utm[$k] = $v;
unset($_SESSION[$k]);
}
}
//+++++++передача утм меток
/* Здесь проверяется существование переменных */
/* Здесь проверяется существование переменных */
if (isset($_POST['phone_form']) && !empty($_POST['phone_form'])) {
$phone = $_POST['phone_form'];
} else {
exit("Поле не заполнено");
}
if (isset($_POST['name_form'])) {$name = $_POST['name_form'];}
if (isset($_POST['length'])) {$length = $_POST['length'];}
/* Сюда впишите свою эл. почту */
$address = 'zakaziki.lp@mail.ru';

/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: Заказ обратного звонка!\nТелефон: $phone\nИмя: $name\nСообщение: $addres";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заказать регистратор + камера'; //сабж
$email='www-data@vds64.com'; // от кого
$product_id = $length;
require_once 'order.php';
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");

//header( 'Location: spasibo.html', true, 301 ); //Редирект на нужный сайт
$_SESSION['curr_order_id'] = $curr_order_id;
header( 'Location: https://x-hose.sale-ua.biz.ua/thanks/index.php', true, 301 ); //Редирект на нужный сайт
?>
