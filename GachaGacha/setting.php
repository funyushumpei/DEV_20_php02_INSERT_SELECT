<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GachaGacha</title>
</head>
<body>
    <form action="redirect.php" method="post">
        <div class="jumbotron">
            <fieldset>
                <legend>ホーム</legend>
                <input type="hidden" name="pageflag" value="home">
                <input type="submit" value="ホーム">
            </fieldset>
        </div>
    </form>

    <form action="redirect.php" method="post">
        <div class="jumbotron">
            <fieldset>
                <legend>ユーザー情報</legend>
                <input type="hidden" name="pageflag" value="user_info">
                <input type="submit" value="ユーザー情報">
            </fieldset>
        </div>
    </form>

    <form action="redirect.php" method="post">
        <div class="jumbotron">
            <fieldset>
                <legend>ログアウト</legend>
                <input type="hidden" name="pageflag" value="logout">
                <input type="submit" value="ログアウト">
            </fieldset>
        </div>
    </form>
</body>
</html>