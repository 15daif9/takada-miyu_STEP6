<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム―送信完了画面</title>
</head>
<body>
    <header>
        <h1>お問い合わせフォーム―送信完了画面</h1>
    </header>

    <main>
        
    <?php
        $success = true; // 送信成否の判定結果

        if ($success) {
            // 成功時：JavaScriptのアラートを実行するコードを出力
            echo '<script>alert("お問い合わせの送信が成功しました！ありがとうございます。");</script>';
        } else {
            // 失敗時
            echo '<script>alert("送信に失敗しました。もう一度お試しください。");</script>';
        }
    ?>

        <p><a href="contact.php">お問い合わせフォームに戻る</a></p>
    </main>

   
</body>
</html>
