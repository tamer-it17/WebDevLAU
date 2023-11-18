<?php

function VarExist($var){
    if (isset($var)){
        return $var;
    }else{
        header("location:../index.html");
    }
}

$user=new stdClass();

$user->un=VarExist($_POST["username"]);
$user->fn=VarExist($_POST["firstname"]);
$user->ln=VarExist($_POST["lastname"]);
$user->pass=VarExist($_POST["pass"]);
$user->sex=VarExist($_POST["sex"]);
$user->bd=VarExist($_POST["birthdate"]);


InsertUserToDBfromObjet($user);

$usr=array();
$usr+=array("username"=>VarExist($_POST["username"]));
$usr+=array("firstname"=>VarExist($_POST["firstname"]));
$usr+=array("lastname"=>VarExist($_POST["lastname"]));
$usr+=array("pass"=>VarExist($_POST["pass"]));
$usr+=array("sex"=>VarExist($_POST["sex"]));
$usr+=array("birthdate"=>VarExist($_POST["birthdate"]));

echo "<br>";
InsertUserToDBfromArray($usr);
echo $usr["firstname"];
function InsertUserToDBfromObjet($user){
    print_r($user);
}

function InsertUserToDBfromArray($user){
    print_r($user);
}
?>