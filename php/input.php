

<?php
$msg = $_POST["data"];

if (empty(mb_strlen($_POST["data"]["name"])) || empty(mb_strlen($_SESSION["data"]["mailadress"]))) {
    header('location: contact.html');
    exit();
} else {
    $new_chat = (object)$msg; /*受け取った配列をjsonの文字列と合わせる為object化*/
    $path = "./contact.json";
    $messages = json_decode(file_get_contents($path));/*json文字列をphpの変数に変換、文字列として開きmessagesに代入*/
    array_push($messages, $new_chat);/*これで入力した項目を追加*/
    $messages = json_encode($messages);/*jsonの文字列に再変化*/
    file_put_contents($path, $messages);
    header('location: hujisawa.html'); //⑦
    exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>うんち</p>
</body>
</html>