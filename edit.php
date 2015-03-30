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
        <h1>ユーザー修正画面</h1>
        
        <?php
            $con_e = mysqli_connect("localhost", "root", "","project1_mysql");
            //check connection
            if($con_e===false){
                die("ERROR connect".mysqli_connect_error());
            }
            //export data from mysql
            $sql_e= "SELECT * FROM project1 WHERE ID=".$_GET['ID'];
            $result_e=$con_e->query($sql_e);
            while($row_e = mysqli_fetch_array($result_e)){
        ?>
            <br><br>
            <form action="edited.php?ID=<?php echo $row_e['ID'];?>" method="post">
            名前
            <br>
            <input type="text" name="fullname" value="<?php
                    echo $row_e['Fullname'];
                ?>">
            
            <br><br>
            メールアドレス
            <br>
            <input type="text" name="email" value="<?php
                    echo $row_e['Email'];
                ?>">
            <?php
            }
            ?>
            <br><br>
            <input type="submit" name="submit" value="修正">
            </form>
        <?php   
//            include_once 'connect.php';
//            
//            while($row=$result->fetch_assoc()){
//                echo $row['ID'].'|'.$row['Fullname'].'|'.$row['Email'].'|'.$row['Password'].'|'.$row['Sex'].'|'.$row['Comment'].'<br>';
//            }
//            
//           
        ?>
    </body>
</html>
