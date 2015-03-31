<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>検索画面</title>
    </head>
    <body>
        <script type="text/javascript">
            function doConfirm(ID){
                var r = confirm("削除して宜しいでしょうか？");
                if(r === true){
                    window.location="delete.php?ID=" + ID;
                }
                else{
                    return false;
                }
            }
        </script>
        <form action="search_result.php" method="post">
            <input type="text" name="search" value="<?php echo $_POST['search'];?>">
            <input type="submit" name="s_search" value="検索">
        </form>
        <?php
            include_once 'connect.php';
            $kensaku = $_POST['search'];
            $sql = "SELECT * FROM project1 WHERE Fullname LIKE '%{$kensaku}%' OR Email LIKE '%{$kensaku}%'";
            $result = $con->query($sql);
        ?>
        <table border="1">
            <tr>
                <td>名前</td>
                <td>メールアドレス</td>
                <td>修正</td>
                <td>削除</td>
            </tr>
        <?php
            if($kensaku==NULL){
                echo "<script type='text/javascript'>alert('検索キーワードを入力して下さい！');</script>";
            }
            while($row = mysqli_fetch_array($result)){
        ?>
            <tr>
                <td><?php echo $row['Fullname'];?></td>
                <td><?php echo $row['Email'];?></td>
                <td><a href="edit.php?ID=<?php echo $row['ID'];?>"><input type="button" name="edit" value="修正"></a></td>
                <td><input type="button" name="delete" value="削除" onclick="doConfirm(<?php echo $row['ID'];?>)"></td>
            </tr>    
        <?php
            }
            mysqli_close($con);
        ?>
        </table>
        <?php
                echo "<br><br><a href=index.php>TOPへ戻る</a>";
        ?>
        
    </body>
</html>
