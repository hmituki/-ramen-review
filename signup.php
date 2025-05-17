

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規作成</title>
    <link rel="stylesheet" href="samp2.css">
</head>
<body>
    <div class="container">
        <h1>アカウント新規作成</h1>
        <div class="form-container">
            <form id="signup-form" method="POST">
                <div class="form-group">
                    <label for="new-user">ユーザー名:</label>
                    <input type="text" id="new-user" name="new-user" required>
                </div>
                <div class="form-group">
                    <label for="new-email">メールアドレス:</label>
                    <input type="email" id="new-email" name="new-email" required>
                </div>
                <div class="form-group">
                    <label for="new-password">パスワード:</label>
                    <input type="password" id="new-password" name="new-password" required>
                </div>
                <button type="submit">新規作成</button>
            </form>
        </div>
    </div>
</body>
</html>
