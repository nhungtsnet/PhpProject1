<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ユーザー修正画面</title>
    </head>
    <body>
        <h1>ユーザー修正画面</h1>
        <?php
            include_once 'connect.php';
            $sl="SELECT * FROM project1 WHERE ID=".$_GET['ID'];
            $kq= mysqli_query($sl);
            $d= mysql_fetch_array($kq);
        ?>
        <form action="edited.php" method="post" name="form1">
            名前
            <br>
            <input type="text" name="fullname" value="<?php echo $d['Fullname'];?>">
            <br><br>
            メールアドレス
            <br>
            <input type="text" name="email" value="<?php echo $d['Email'];?>">
            <br><br>
            <input type="submit" name="edited" value="修正">
        <?php
            include_once 'connect.php';
            
            while($row=$result->fetch_assoc()){
                echo $row['ID'].'|'.$row['Fullname'].'|'.$row['Email'].'|'.$row['Password'].'|'.$row['Sex'].'|'.$row['Comment'].'<br>';
            }
            
           
        ?>
    </body>
</html>
