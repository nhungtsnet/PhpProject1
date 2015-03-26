<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ユーザー登録画面</title>
    </head>
    <body>
        <h1>
            ユーザー登録画面です。
        </h1>
        <br>
        <form action="register.php" method="post">
            名前
            <br>
            <input type="text" name="fullname">
            <br><br>
            メールアドレス
            <br>
            <input type="text" name="email">
            <br><br>
            パスワード
            <br>
            <input type="password" name="password">
            <br><br>
            性別
            <br>
            <input type="radio" name="sex" value="1" checked="male">男性
            <input type="radio" name="sex" value="0">女性
            <br><br>
            <!--趣味
            <br>
            <input type="checkbox" name="hobby[1]" value="sport">スポーツ
            <input type="checkbox" name="hobby[2]" value="book">読書
            <input type="checkbox" name="hobby[3]" value="film">映画
            <br><br>-->
            お問い合わせ
            <br>
            <textarea name="comment" rows="3" cols="40"></textarea>
            <br><br>
            <input type="submit" name="submit" value="登録">
            
        </form>
        <?php
            echo "<br><br>";
            echo "<a href=index.php>TOPへ戻る</a>";
        ?>
    </body>
</html>
