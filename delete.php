<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>削除画面</title>
    </head>
    <body>
        <?php
            include_once 'connect.php';
            $dl="DELETE FROM project1 WHERE ID=".$_GET['ID'];
            if($con->query($dl)==TRUE){
                echo "<script language='javascript'>alert('削除しました');";
                echo "location.href='user_list.php';</script>";
            }
            mysqli_close($con);
        ?>
        <a href="index.php">TOPへ戻る</a>
    </body>
</html>
