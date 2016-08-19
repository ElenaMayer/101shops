<?php

include("config.php");

class Order {

    public static function saveOrder() {

        $date = date('Y-m-d H:i', time());

        $mysqli = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_POSSWORD, MYSQL_DB);
        if ($mysqli->connect_error) {
            error_log($date . " Ошибка подключения (" . $mysqli->connect_errno . ") " . $mysqli->connect_error ."\r\n", 3, 'error.log');
            return false;
        }
        $orderId = date('YmdHis', time());
        $callMe = isset($_POST['callme']) ? '1' : '0';
        $queryKey = "`name`, `phone`, `item_name`, `order_id`, `item_price`, `time_zone`, `call_me`";
        $queryValue = "'" .
            $_POST['name']. "', '" .
            $_POST['phone']. "', '" .
            $_POST['item_name']. "', '" .
            $orderId. "', '" .
            $_POST['item_price']. "', '" .
            $_POST['client_time_zone']. "', '" .
            $callMe. "'";

        if (isset($_POST['utm'])) {
            $utmStr = explode(",", $_POST['utm']);
            $utmArr = [];
            foreach ($utmStr as $utmVal){
                $tmp = explode("=", $utmVal);
                $utmArr[$tmp[0]] = $tmp[1];
            }
            if(isset($utmArr['utm_source'])) {
                $queryKey .= ", `utm_source`";
                $queryValue .= ", '" . $utmArr['utm_source'] . "'";
            }
            if(isset($utmArr['utm_medium'])) {
                $queryKey .= ", `utm_medium`";
                $queryValue .= ", '" . $utmArr['utm_medium'] . "'";
            }
            if(isset($utmArr['utm_campaign'])) {
                $queryKey .= ", `utm_campaign`";
                $queryValue .= ", '" . $utmArr['utm_campaign'] . "'";
            }
            if(isset($utmArr['utm_term'])) {
                $queryKey .= ", `utm_term`";
                $queryValue .= ", '" . $utmArr['utm_term'] . "'";
            }
            if(isset($utmArr['utm_content'])) {
                $queryKey .= ", `utm_content`";
                $queryValue .= ", '" . $utmArr['utm_content'] . "'";
            }
        }

        $query = "INSERT INTO `order`(" . $queryKey . ") VALUES ( $queryValue )";

        if (!$mysqli->query($query)) {
            error_log($date . " Не удалось записать в БД: (" . $mysqli->errno . ") " . $mysqli->error."\r\n", 3, 'error.log');
            $mysqli->close();
            return false;
        } else {
            $mysqli->close();
            return $orderId;
        }
    }

    public static function sendMailWithOrder() {
        if (isset($_POST['callme']))
            $subject = 'ПЕРЕЗВОНИТЕ МНЕ с сайта ' . MAIN_DOMAIN;
        else
            $subject = 'Заказ с сайта ' . MAIN_DOMAIN;
        $message = 'Товар: '.$_POST['item_name']. ' <br> ' .
            'Имя: '.$_POST['name']. ' <br> ' .
            'Телефон: '.$_POST['phone']. ' <br> ' .
            'Цена: '.$_POST['item_price']. ' <br> ' .
            'Часовой пояс: '.$_POST['client_time_zone']. ' <br> ';

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= 'To: ' . EMAIL_TO . "\r\n";
        $headers .= 'From: '. TITLE .' <' . EMAIL_FROM . ">\r\n";
        $headers .= 'Reply-To: ' . EMAIL_FROM . "\r\n";

        if (mail(EMAIL_TO, $subject, $message, $headers))
            return true;
        else
            return false;
    }
}