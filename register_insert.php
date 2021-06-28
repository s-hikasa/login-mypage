<?php
    mb_internal_encoding("utf8");
    $pdo=new PDO("mysql:dbname=lesson02;host=localhost;","root","");
    $stmt=$pdo->prepare("insert into login_mypage(name,mail,password,picture,comments)value(?,?,?,?,?)");

    $stmt->bindValue(1,$_POST['name']);
    $stmt->bindValue(2,$_POST['mail']);
    $stmt->bindValue(3,$_POST['password']);
    $stmt->bindValue(4,$_POST['path_filename']);
    $stmt->bindValue(5,$_POST['comments']);
    $stmt->execute();
    $pdo=NULL;

    header("location:after_register.html");
?>




<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>

<body> 

</body>   