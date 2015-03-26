<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ユーザー情報</title>
    </head>
    <body>
        <?php
        //var_dump(PDO::getAvailableDrivers());
            
            //create connection
            $con = mysqli_connect("localhost", "root", "", "project1_mysql");
            //check connection
            if($con === false){
                die("ERROR:Could not connect.".mysqli_connect_error());
            }
            //get value from form:
            $fullname=$_POST['fullname'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $sex=$_POST['sex'];
            /*$hobby1=$_POST['hobby[1]'];
            $hobby2=$_POST['hobby[2]'];
            $hobby3=$_POST['hobby[3]'];*/
            $comment=$_POST['comment'];
            
            //insert data into mysql
            $sql = "INSERT INTO project1(Fullname, Email, Password, Sex, Comment) VALUES('$fullname', '$email', '$password', '$sex', '$comment')";
            if(mysqli_query($con, $sql)){
                echo "登録が完了しました<br><br>";
            }else{
                echo "ERROR".mysqli_error($con);
            }
            
            ?>
            <?php
            //close connection
           // mysqli_close();
            echo "名前：".$_POST['fullname']." <br><br>";
            echo "メールアドレス：".$_POST['email']." <br><br>";
            echo "パスワード：".$_POST['password']." <br><br>";
            echo "性別：".$_POST['sex']." <br><br>";
            echo "お問い合わせ：".$_POST['comment']." <br><br>";
            /*echo "趣味：";
            $hobbies = $_POST['hobby'];
            foreach($hobbies as $val){
                echo $val;
                echo ",";
            }*/
            echo "<br><br><br>";
            echo "<a href=form.php>戻る</a>";
            //var_dump($_POST);
            //var_dump($_POST['email']);
            //var_dump($_POST['password']);
            
        ?>
    </body>
</html>
