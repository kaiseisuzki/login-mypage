<?php
    mb_internal_encoding("utf8");

    $temp_pic_name = $_FILES['picture']['temp_name'];
    $original_pic_name = $_FILES['picture']['name'];

    $path_filename = './image/'.$original_pic_name;

    move_uploaded_file($temp_pic_name, './image/'.$original_pic_name);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register_confirm.css">
    <title>マイページ登録</title>
</head>
<body>
    <header>
        <img src="4eachblog_logo.jpg" alt="">
        <div class="login"><a style="color: white" href="login.php">ログイン</a></div>
    </header>

    <main>
        <div class="form">
            <div class="form_contents">
                <h2>会員登録 確認</h2>
                <p class="atention">こちらの内容で登録しても宜しいでしょうか？</p>
                <div class="name">
                    <p>氏名 : <?php echo $_POST['name']; ?></p>
                </div>
                <div class="mail">
                    <p>メールアドレス : <?php echo $_POST['mail']; ?></p>
                </div>
                <div class="password">
                    <p>パスワード : <?php echo $_POST['password']; ?></p>
                </div>
                <div class="picture">
                    <p>プロフィール写真 : <?php echo $original_pic_name; ?></p>
                </div>
                <div class="comments">
                    <p>コメント : <?php echo $_POST['comments']; ?></p>
                </div>
                <div class="form_wrapper">
                    <form action="register.php">
                        <div class="modoru">
                            <input type="submit" class="modoru_button" value="戻る">
                        </div>
                    </form>
                    <form action="register_insert.php" method="post" enctype="multipart/form-data">
                        <div class="toroku">
                            <input type="submit" class="submit_button" value="登録する">
                            <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
                            <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
                            <input type="hidden" value="<?php echo $_POST['password'];?>" name="password">
                            <input type="hidden" value="<?php echo $path_filename; ?>" name="path_filename">
                            <input type="hidden" value="<?php echo $_POST['comments'];?>" name="comments">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer>
        &copy;InterNous.inc All rights reserved
    </footer>
</body>
</html>