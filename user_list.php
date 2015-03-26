<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ユーザー照会画面</title>
        <script type="text/javascript">
            function edit1(){
               
            }
        </script>
    </head>
    <body>
        <from action="edit.php" method="post">
        <table border="1">
            <tr>
                <td>名前</td>
                <td>メールアドレス</td>
                <td>修正</td>
                <td>削除</td>
            </tr>
            <tr>
                <td>大手町</td>
                <td>otemachi@gmail.com</td>
                <td><input type="submit" name="fix "value="修正"></td>
                <td><input type="button" name="fix "value="削除"></td>
            </tr>
            <tr>
                <td>新宿</td>
                <td>shinjuku@gmail.com</td>
                <td><input type="button" name="fix "value="修正"></td>
                <td><input type="button" name="fix "value="削除"></td>
            </tr>
            <tr>
                <td>早稲田</td>
                <td>waseda@gmail.com</td>
                <td><input type="button" name="fix "value="修正"></td>
                <td><input type="button" name="fix "value="削除"></td>
            </tr>
        </table>
            
            
        <?php
            
            echo "<br><br><br>";        
                    
            //create connection
            $con = mysqli_connect("localhost", "root", "","project1_mysql");
            //check connection
            if($con===false){
                die("ERROR connect".mysqli_connect_error());
            }
            
            //export data from mysql
            $sql= "SELECT * FROM project1";
            $kq=$con->query($sql);
            
            while($row=$kq->fetch_assoc()){
                echo $row['ID'].'|'.$row['Fullname'].'|'.$row['Email'].'|'.$row['Password'].'|'.$row['Sex'].'|'.$row['Comment'].'<br>';
            }
            
            echo "<br><br>";
            echo "<a href = index.php>TOPへ戻る</a>";
        ?>
    </body>
</html>
