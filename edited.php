<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <script type="text/javascript">
            function doConfirm(ID){
                console.log('id', ID);
                var r = confirm("削除して宜しいでしょうか？");
                if(r === true){
                    window.location="delete.php?ID=" + ID;
                }
                else{
                    return false;
                }
                }     
        </script>
        <?php
            include_once "connect.php";
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $id = $_GET['ID'];
            if($fullname & $email){
                $sql = "UPDATE project1 SET Fullname='".$fullname."', Email='".$email."' WHERE ID='".$id."'";
                $result = $con->query($sql);
                /*
                $user = User::where('id', '=' $id)->first();
                $user->update(['Fullname'=>$fullname, 'Email'=>$email]);*/
            }
        ?>
            <table border="1">
            <tr>
                <td>名前</td>
                <td>メールアドレス</td>
                <td>修正</td>
                <td>削除</td>
            </tr>
            <?php
                $sql="SELECT * FROM project1 WHERE 1";
                $result=$con->query($sql);
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
                <!--<td><a href="delete.php?ID=<?php echo $row['ID'];?>"><input type="button" name="delete" value="削除" onclick="doConfirm()"></a></td> -->         
                <td><input type="button" name="delete" value="削除" onclick="doConfirm(<?php echo $row['ID']; ?>)"> </td>               
                <!--<td><button onclick="doConfirm()">削除</button></td>-->
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
