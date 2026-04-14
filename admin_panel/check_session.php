<?php
       include_once 'dbconfig.php';
       //print_r($_SESSION);// For debugging purposes, can be removed later
       if(empty($_SESSION['username']) && empty($_SESSION['password'])){
             // echo "if1";exit;
              header("location: index.php");
              exit();
       }else{
              $sql = mysqli_query($conn,"SELECT * FROM users WHERE user_type = 'admin'");
              while($result = mysqli_fetch_array($sql)){
                    // echo "<br>usename: ";print_r($result['username']);echo "<br>password: ";print_r($result['password']);// For debugging purposes, can be removed later
                     if($_SESSION['password'] != $result['password'] && $_SESSION['username'] != $result['username']){
                            //echo "if2";
                            header("location: index.php");
                            //exit();
                            
                     }else{
                           //echo "else";exit;
                     }
              }
       }
?>