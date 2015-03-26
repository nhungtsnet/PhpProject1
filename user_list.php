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
        <table border="1">
            <tr>
                <td>名前</td>
                <td>メールアドレス</td>
                <td>修正</td>
                <td>削除</td>
            </tr>
            <?php
                include_once 'connect.php';
                while ($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td>
                    <?php echo $row['Fullname'];?>
                </td>
                <td>
                    <?php echo $row['Email'];?>
                </td>
                <td><a href="edit.php?ID=<?php echo $row['ID'];?>"><input type="button" name="edit" value="修正"></a></td>
                <td><a href="delete.php?ID=<?php echo $row['ID'];?>" onclick="Return confirm('本とに削除して宜しいでしょうか？');"><input type="button" name="delete" value="削除"></a></td>
            </tr>
            <?php          
                }  
                mysqli_close($con);
            ?>   
        </table>
            <?php
                echo "<br><br>";
                echo "<a href = index.php>TOPへ戻る</a>";
            ?>
    </body>
</html>
