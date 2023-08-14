<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>課題021の確認画面</title>
    </head>
    <body>
        <h2>個人情報確認画面</h2>
        <div style="text-align: justify;">
            <p>お名前: <?php echo $_POST['user_name'] ?></p>
            <p>性別: <?php echo $_POST['user_gender'] ?></p>
            <p>メールアドレス: <?php echo $_POST['user_email'] ?></p>
        </div>
    </body>
</html>
