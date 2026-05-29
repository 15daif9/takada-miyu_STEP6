<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2>お問い合わせフォーム</h2>
    </header>

    <main>
        <p><a href="contact.php">・トップページ</a></p>
        <p><a href="contact.php">・人気投稿</a></p>
        <p><a href="contact.php">・エンジニアおすすめ商品</a></p>
        <p><a href="contact.php">・エンジニアおすすめ記事</a></p>
        <p><a href="contact.php">・投稿ページ</a></p>

        <main class="content">

            <form action="confirm.php" method="post">
            <table>
                <tr>
                    <th>お名前</th>
                    <td><input type="text" name="name" class="input-40" required></td>
                </tr>
                <tr>
                    <th>会社名</th>
                    <td><input type="text" name="companyName" class="input-40" required></td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td><input type="email" name="email" class="input-40" required></td>
                </tr>
                <tr>
                    <th>年齢</th>
                    <td><input type="text" name="age" class="input-40" min="0" max="150" required></td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td><textarea name="message" class="input-40" rows="5" required></textarea></td>
                </tr>
            </table>

           

            <p><input type="submit" value="送信"></p>
            </form>
        <p>横のボタンを押すとfooterの背景色が変わります</p>
    </main>

    <footer id="site-footer">
        <button type="button" id="fun-button">押してみてね！</button>
    </footer>
    <script src="style.js"></script>
</body>
</html>
