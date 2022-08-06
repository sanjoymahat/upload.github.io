<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="font/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="wrapper-admin" class="body-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-4 col-md-4">
                        <img class="logo" src="images/news.jpg">
                        <h3 class="heading">Admin</h3>
                        <!-- Form Start -->
                        <form  action="<?php $_SERVER['PHP_SELF'];?>" method ="POST">
                            <div class="form-group">
                                <label>dname</label>
                                <input type="text" name="dname" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="" required>
                            </div>
                            <input type="submit" name="login" class="btn btn-primary" value="login" />
                        </form>
                        <!-- /Form  End -->
                        <?php
                      
                        if(isset($_POST['login'])){
                            include "config.php";
                            $dname=mysqli_real_escape_string($conn,$_POST['dname']);
                            $password=md5($_POST['password']);

                            $sql="SELECT dname FROM user WHERE dname='$dname'&& password='$password'";
                            $result=mysqli_query($conn,$sql) or die("query failed");
                            if(mysqli_num_rows($result)>0){
                                while(mysqli_fetch_assoc($result)){
                                    session_start();
                                    $_SESSION["dname"] = $row['dname'];
                                    header("Location: {$hostname}/index.php");
                                }
                            }else{
                                echo '<div class="alert alert-danger">dname and Password are not matched.</div>';
                            }

                        }
                        ?>

                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>