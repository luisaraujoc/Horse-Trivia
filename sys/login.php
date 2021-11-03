<?php
extract ($_POST);
include 'sys/dll.php';
include 'sys/conx.php';




    if(isset($btn_login)){
        
        if($username == Null || $password == Null){
            header('location: login.php');
            exit();
        };
        $query = "SELECT ID FROM WHERE username ='{$username}' and passW = md5('{$password}');";
        $result = banco($server, $user, $password, $db, $query);

        $row = $result->fetch_assoc();
        intval($row);
            
            
        if ($row == 1){
            
        };
        exit();
    }
    
    
    
    if(isset($btn_register)){
        header("location:register.php");
    }


    

?>