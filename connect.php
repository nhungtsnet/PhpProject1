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
        <?php
        //create connection
            $con = mysqli_connect("localhost", "root", "","project1_mysql");
            //check connection
            if($con===false){
                die("ERROR connect".mysqli_connect_error());
            }
            //export data from mysql
            $sql= "SELECT * FROM project1";
            $result=$con->query($sql);
        ?>
    </body>
</html>
