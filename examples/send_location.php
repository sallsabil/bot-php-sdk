<?php

require dirname(__FILE__) . '/../vendor/autoload.php';

$bot_token = 'your bot token';

$bot = new Soroush\Client($bot_token);

try {

    $to = 'bot user id';

    list($error, $success) = $bot->sendLocation($to, '35.7448416', '51.3753212');

    if($success) {
        echo 'Message sent successfully'. PHP_EOL;
    } else {
        echo 'Fail : ' . $error. PHP_EOL;
    }

} catch (Exception $e) {
    die($e->getMessage());
}
