<?php
ini_set('mbstring.internal_encoding', 'UTF-8');
$error_message = array();
$msg = $_POST["data"];
if ($_POST["data"]["name"] === "" || $_POST["data"]["mailadress"] === "") {
    header('location: ../contact.php');
    exit();
}
if (empty($error_message)) {

    $new_chat = (object)$msg; /*受け取った配列をjsonの文字列と合わせる為object化*/
    $path = "./contact.json";
    $messages = json_decode(file_get_contents($path));/*json文字列をphpの変数に変換、文字列として開きmessagesに代入*/
    array_push($messages, $new_chat);/*これで入力した項目を追加*/
    $messages = json_encode($messages, JSON_UNESCAPED_UNICODE);/*jsonの文字列に再変化*/
    file_put_contents($path, $messages);
    header('location: ../success.html'); //⑦
    exit();
}
