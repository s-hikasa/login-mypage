<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:mypage.php");
    }
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>

    <body> 
        <header>
            <img src="./4eachblog_logo.jpg" alt="">
            <div class="login"><a href="login.php">ログイン</a></div>

        </header>

        <main>
            <form action="mypage.php" method="post">
                <div class="form_contents">
                    <div class="mail">
                        <label for="">メールアドレス</label><br>
                        <input type="text" class="formbox" size="40" name="mail" value="<?php if(isset($_COOKIE['mail'])){echo $_COOKIE['mail'];};?>">
                    </div>
                    <div class="password">
                        <label for="">パスワード（半角英数字6文字以上）</label><br>
                        <input type="password" class="formbox" size="40" name="password" id="password" value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];};?>">
                    </div>
                    <div class="login_check">
                        <label for="">
                            <input
                                type="checkbox"
                                name="login_keep"
                                class="formbox"
                                <?php if(isset($_COOKIE['login_keep'])){echo "checked='checked'";};?>
                            >ログイン状態を保持する
                        </label>
                    </div>
                    <div class="login_box">
                        <input type="submit" size="35" class="login_button" value="ログイン">
                    </div>
                </div>
            </form>
        </main>
        <footer>
            ©2018 InterNous.inc. All rights reserved
        </footer>
    </body>   
</html>