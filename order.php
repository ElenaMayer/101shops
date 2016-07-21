<?php

date_default_timezone_set('Asia/Novosibirsk');
mb_internal_encoding("utf-8");

include ("OrderClass.php");

$orderId = Order::saveOrder();
Order::sendMailWithOrder();

header('Location: success.php?id='.$orderId);
