<?php
$name = htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8');
$companyName = htmlspecialchars($_POST['companyName'] ?? '', ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8');
$age = htmlspecialchars($_POST['age'] ?? '', ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム-確認画面</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>お問い合わせフォーム-確認画面</h1>
    </header>

    <main>
        <?php if ($name === '' && $email === '' && $message === ''): ?>
            <p>入力内容がありません。<a href="index.php">入力画面へ</a></p>
        <?php else: ?>
            <nav>
                <ul>
                    <li><a href="index.php">トップページ</a></li>
                    <li><a href="contact.php">人気投稿</a></li>
                    <li><a href="contact.php">エンジニアおすすめ商品</a></li>
                    <li><a href="contact.php">エンジニアおすすめ記事</a></li>
                    <li><a href="contact.php">投稿ページ</a></li>
                </ul>
            </nav>
            <table>
                <tr>
                    <th>お名前</th>
                    <td><?php echo $name; ?></td>
                </tr>
                <tr>
                    <th>会社名</th>
                    <td><?php echo $companyName; ?></td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <th>年齢</th>
                    <td><?php echo $age; ?></td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td><?php echo nl2br($message); ?></td>
                </tr>
            </table>

            <form action="send.php" method="post">
                <input type="hidden" name="name" value="<?php echo $name; ?>">
                <input type="hidden" name="companyName" value="<?php echo $companyName; ?>">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <input type="hidden" name="age" value="<?php echo $age; ?>">
                <input type="hidden" name="message" value="<?php echo $message; ?>">
                <p>
                    <button type="submit">送信</button>
                </p>
            </form>
            <p>
            <a href="contact.php">トップへ戻る</a>
                
            </p>
        <?php endif; ?>
    </main>
</body>
</html>
