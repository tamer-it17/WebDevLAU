<?php

    $un=$_POST["username"];      
    $pass=$_POST["password"];    

   

    $loggedIn=false;
    for ($i=0;$i<sizeof($a_users);$i++){
        if (($un==$a_users[$i]) && ($pass==$a_pass[$i])){
            $loggedIn=true;
            break;
        } 
    }

    if ($loggedIn){
        echo "login successful.";
    }else{
        echo "Wrong Username or Password.";
    }


?>