<?php

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="register.css">
    </head>

    <body> 
        <header>
            <img src="./4eachblog_logo.jpg" alt="">
            <div class="login"><a href="login.php">ログイン</a></div>
        </header>

        <main>
            <form action="register_confirm.php" method="post" enctype="multipart/form-data">
                <div class="form_contents">
                    <h2>会員登録</h2>
                    <div class="name">
                        <div class="hissu">必須</div><label for="">氏名</label><br>
                        <input type="text" class="formbox" size="40" name="name" required>
                    </div>
                    <div class="mail">
                        <div class="hissu">必須</div><label for="">メールアドレス</label><br>
                        <input type="text" class="formbox" size="40" name="mail" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                    </div>
                    <div class="password">
                        <div class="hissu">必須</div><label for="">パスワード（半角英数字6文字以上）</label><br>
                        <input type="password" class="formbox" size="40" name="password" id="password" pattern="^[a-zA-Z0-9]{6,}$" required>
                    </div>
                    <div class="password">
                        <div class="hissu">必須</div><label for="">パスワード確認</label><br>
                        <input type="password" class="formbox" size="40" name="confirm_password" id="confirm" oninput="ConfirmPassword(this)" required>
                    </div>
                    <div class="picture">
                        <label for="">プロフィール写真</label><br>
                        <input type="hidden" name="max_file_size" value="1000000" />
                        <input type="file" name="picture" size="40">
                    </div>
                    <div class="comments">
                        <label for="">コメント</label><br>
                        <textarea cols="45" rows="5" name="comments"></textarea>
                    </div>
                    <div class="toroku">
                        <input type="submit" class="submit_button" size="35" value="登録する">
                    </div>
                </div>
            </form>
        </main>
        <footer>
            ©2018 InterNous.inc. All rights reserved
        </footer>
        
        <script>
            function ConfirmPassword(confirm){
                var input1=password.value;
                var input2=confirm.value;
                if(input1!=input2){
                    confirm.setCustomValidity("パスワードが一致しません。");
                }   else{
                    confirm.setCustomValidity('');
                }
            }
        </script>
    </body>   
</html>