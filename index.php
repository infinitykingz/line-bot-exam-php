<?php
echo "Test send message";

require "vendor/autoload.php";

$access_token = 'W9mSbH8dLHWGD65wwrXW76c+/XgpT8OlOCtkCIfvaEVDr7WZ1Z3j2Vq9Oa9fq6SKKe6oQtKAUrzLieiWwESIe/Ad2MbxXTyrVHyAHwl2X2AGAfZ8tDv72avSj7potdhgPQaNhj1ctb53MxtUf6kU+QdB04t89/1O/w1cDnyilFU=';

$channelSecret = '1905088f57ca7aacfc7556b8453aeb6d';

$idPush = 'Uba49d0cabe78e4e8f759f900a7fd8f96';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);

$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');

$response = $bot->pushMessage($idPush, $textMessageBuilder);


echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
?>
