<?php 
    mb_internal_encoding("utf8");
    session_start();

    if(empty($_POST['from_mypage'])){
        header("location:login_error.php"); 
    }
?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="mypage.css">
</head>

<body> 
    <header>
        <img src="./4eachblog_logo.jpg" alt="">
        <div class="logout"><a href="login.php">ログアウト</a></div>
    </header>
 
    <main>
        <div class="member">
            <h2>会員情報</h2>
            <p>こんにちは!　<?php echo $_SESSION['name'];?>さん。<p>
            <div class="registry">
                <div class="left">
                    <?php echo '<img src='.'./image/'.$_SESSION["picture"].'>'; ?>
                </div>
                <form action="mypage_update.php" method="post">
                    <ul class="right">
                        <li>氏名：<?php echo "<input type='text' class='formbox' size='30' name='name' value=$_SESSION[name]>"; ?></li>
                        <li>メール：<?php echo "<input type='text' class='formbox' size='30' name='mail' pattern='^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$' value=$_SESSION[mail]>"; ?></li>
                        <li>パスワード：<?php echo "<input type='password' class='formbox' size='30' name='password' id='password' pattern='^[a-zA-Z0-9]{6,}$' value=$_SESSION[password]>"; ?></li>
                    </ul>    
                    <div class="under">
                        <?php echo "<textarea cols='80' rows='3' name='comments'>$_SESSION[comments]</textarea>"; ?>
                    </div>
                    <input type="submit" class="kousin" size="35" value="登録する">
                </form>
            </div>
        </div>
    </main>
</body>   