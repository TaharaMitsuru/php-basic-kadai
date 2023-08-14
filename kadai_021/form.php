<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>課題021</title>
    </head>
    <body>
        <h2>個人情報入力ホーム</h2>
        <form action="confirmation.php" method="post">

            <table style="text-align: left;">
                <tr>
                <th>お名前</th>
                    <td>
                        <input type="text" name="user_name">
                    </td>
                </tr>               
                <tr>
                <th>性別</th>
                    <td>
                        <input type="radio" name="user_gender" value="男性" checked>男性
                        <input type="radio" name="user_gender" value="女性" >女性
                    </td>    
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>
                        <input type="text" name="user_email">
                    </td>
                </tr>
            </table>

            <input type="submit" value="送信">

        </form>
    </body>
</html>