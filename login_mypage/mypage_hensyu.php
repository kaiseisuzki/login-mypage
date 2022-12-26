<?php
    mb_internal_encoding("utf8");
    session_start();

    try{
        $pdo = new PDO("mysql:dbname=lesson01; host=localhost;", "root", "mysql");
    }catch(PDOException $e){
        die("<p>申し訳ございません。現在サーバーが混み合っており一時的にアクセスができません。<br>
        しばらくしてから再度ログインをしてください。</p>
        <a href='http://localhost/login_mypage/login.php'>ログイン画面へ</a>");
    }
    if(empty($_POST['form_mypage'])){
        header("Location:login_error.php");
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mypage_hensyu.css">
    <title>会員情報 編集</title>
</head>
<body>
    <header>
        <img src="4eachblog_logo.jpg" alt="">
        <div class="login"><a style="color:white" href="log_out.php">ログアウト</a></div>
    </header>

    <main>
        <form action="mypage_update.php" method="post">
            <div class="form_contents">
                <h2>会員情報</h2>
                <p>こんにちは、<?php echo $_SESSION['name']; ?>さん。</p>
                <div class="img_wrapper">
                    <img src="<?php echo $_SESSION['picture']; ?> " alt="">
                </div>
                <div class="status">
                    <p>氏名 : <input type="text" value="<?php echo $_SESSION['name']; ?>" name="name" class="formbox" size=30"></p>
                    <p>メール : <input type="text" value="<?php echo $_SESSION['mail']; ?>" name="mail" class="formbox" size="30"></p>
                    <p>パスワード : <input type="text" value="<?php echo $_SESSION['password']; ?>" name="password" class="formbox" size="30"></p>
                </div>
                <div class="comments">
                    <textarea name="comments" class="formbox" rows="5"><?php echo $_SESSION['comments']; ?></textarea>
                </div>
                <div class="toroku">
                    <input type="submit" class="submit_button" value="保存する">
                </div>
            </div>
        </form>
    </main>

    <footer>
        &copy;InterNous.inc All rights reserved
    </footer>
</body>
</html>