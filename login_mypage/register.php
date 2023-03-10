<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>マイページ登録</title>
</head>
<body>
    <header>
        <img src="4eachblog_logo.jpg" alt="">
        <div class="login"><a href="login.php">ログイン</a></div>
    </header>

    <main>
        <form action="register_confirm.php" method="post" enctype="multipart/form-data">
            <div class="form_contents">
                <h2>会員登録</h2>
                <div class="name">
                    <div class="hissu">必須</div>
                    <label>氏名</label><br>
                    <input type="text" name="name" class="formbox" size="40" required>
                </div>
                <div class="mail">
                    <div class="hissu">必須</div>
                    <label>メールアドレス</label><br>
                    <input type="text" name="mail" class="formbox" size="40" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                </div>
                <div class="password">
                    <div class="hissu">必須</div>
                    <label>パスワード</label><br>
                    <input type="text" name="password" id="password" class="formbox" size="40" pattern="^[a-zA-Z0-9]{6,}$" required>
                </div>
                <div class="password">
                    <div class="hissu">必須</div>
                    <label>パスワード確認</label><br>
                    <input type="text" name="confirm_password" id="confirm" oninput="ConfirmPassword(thid)" class="formbox" size="40" required>
                </div>
                <div class="picture">
                    <label>プロフィール写真</label><br>
                    <input type="hidden" name="max_file_size" value="1000000">
                    <input type="file" name="picture" size="40">
                </div>
                <div class="comments">
                    <label>コメント</label><br>
                    <textarea name="comments" class="formbox" cols="40" rows="5"></textarea>
                </div>
                
                <div class="toroku">
                    <input type="submit" class="submit_button" value="登録する">
                </div>
            </div>
        </form>
    </main>

    <footer>
        &copy;InterNous.inc All rights reserved
    </footer>
    <script>
        function ConfirmPassword(confirm){
            var input1 = password.value;
            var input2 = confirm.value;

            if(input1 != input2){
                confirm.setCustomValidity("パスワードが一致しません。");
            } else {
                confirm.setCustomValidity("");
            }
        }
    </script>
</body>
</html>