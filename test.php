<?php

mb_internal_encoding("utf8");
session_start();

try{
    $pdo=new PDO("mysql:dbname=lesson02;host=localhost;","root","");
} catch(PDOException $e){
    die(
        "<p>申し訳ございません。現在サーバーが混みあっており一時的にアクセスが出来ません。<br>しばらくしてから再度ログインをしてください。</p>
        <a href='http://localhost/login_mypage/login.php'>ログイン画面へ</a>"
    );
}

echo $_SESSION["name"];
echo $_COOKIE["mail"];
echo $_COOKIE["password"];
echo $_COOKIE["login_keep"];
