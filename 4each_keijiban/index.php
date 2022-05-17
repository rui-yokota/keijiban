<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>4eachblog掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 

</head>
<body>

    <?php 

    mb-mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
    $stmt = $pdo->query("select*from 4each_keijiban");

    ?>

    <header>
    <div>
    <img src="4eachblog_logo.jpg" alt="">
    </div>
        <div class="header-line">
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </div>
    </header>

    <main>

    <div class="left">
            <h1>プログラミングに役立つ掲示板</h1>

        <form method="post" action="insert.php">
                <h2>入力フォーム</h2>
        
            <div class="form-box">
                <label>ハンドルネーム</label>
                <br>
                <input type="text" class="text" name="handlename" size="50px">
            </div>

            <div class="form-box">
                <label>タイトル</label>
                <br>
                <input type="text" class="text" name="title" size="50px">
            </div>

            <div class="form-box">
                <label>コメント</label>
                <br>
                <textarea name="comments" id="" cols="60" rows="5"></textarea>
            </div>

            <div class="form-box">
                <input type="submit" class="submit" value="送信する">
            </div>
        </form>

    <?php

    while ($row = $stmt->fetch()){

        echo "<article>";
        echo "<h2>".$row['title']."</h2>";
        echo "<div class='title-contents'>";
        echo $row['comments'];
        echo "<p>posted by".$row['handlename']."</p>";
        echo "</div>";
        echo "</article>";
        }
        ?>
    
    </div>


    <div class="right">
        <h2>人気の記事</h2>
        <div>
            <ul>
                <li>phpおすすめ本</li>
                <li>php MyAdminの使い方</li>
                <li>今人気のエディタ Top5</li>
                <li>HTMLの基礎</li>
            </ul>
        </div>
        <h2>おすすめリンク</h2>
        <div>
                <ul>
                    <li>インターノウス株式会社</li>
                    <li>MAMPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>VScodeのダウンロード</li>
                </ul>
        </div>
        <h2>カテゴリ</h2>
        <div>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
        </div>
    </div>

    </main>
    <footer>
        <div>
            <p>copyright © internous | 4each blog the which provides A to Z about programming.</p>
        </div>
    </footer>
        
</body>
</html>