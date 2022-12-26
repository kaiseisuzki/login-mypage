<?php
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>ログインエラー</title>
</head>
<body>
    <header>
        <img src="4eachblog_logo.jpg" alt="">
        <div class="login"><a href="register.php">会員登録</a></div>
    </header>

    <main>
        <form action="mypage.php" method="post">
            <div class="form_contents">
                <div class="error_message">
                    <p>メールアドレスまたはパスワードが間違っています。</p>
                </div>
                <div class="mail">
                    <label>メールアドレス</label><br>
                    <input type="text" name="mail" class="formbox" size="40" >
                </div>
                <div class="password">
                    <label>パスワード</label><br>
                    <input type="text" name="password" id="password" class="formbox" size="40">
                </div>
                <div class="login_check">
                    <label><input type="checkbox"  size="80" name="login_keep" value="login_keep"
                        <?php
                            if(isset($_COOKIE['login_keep'])){
                                echo "checked = 'checked'";
                            }
                        ?>
                    >ログイン状態を保存する</label>
                </div>
                <div class="toroku">
                    <input type="submit" class="submit_button" value="ログイン">
                </div>
            </div>
        </form>
    </main>

    <footer>
        &copy;InterNous.inc All rights reserved
    </footer>
    
</body>
</html>