<?php

session_start();
require_once "DB.php";

$db=new Database;

$submit_flag=true;
$_SESSION["error"]=array();


if(isset($_POST["logout"])){
    $_SESSION["is_login"]=false;
    $_SESSION["user"]=null;
    header('Location: /touriosity/login.php');
    exit;
}

if(!isset($_POST["username"]) || empty($_POST["username"])){
    $submit_flag=false;
    $_SESSION["error"]["username"]="username required";
}
if(!isset($_POST["password"]) || empty($_POST["password"])){
    $submit_flag=false;
    $_SESSION["error"]["password"]="password required";
}elseif(strlen($_POST["password"])<6){
    $submit_flag=false;
    $_SESSION["error"]["password"]="minimum password length required 6 or more";
}

if(!$submit_flag){
    header('Location: /touriosity/login.php');
    exit;
}


$result=$db->getUserForLogin($_POST["username"]);



if (empty($result) || !password_verify($_POST["password"], $result["password"])) {
    $_SESSION["error"]["user"]="username or password not matched";
    header('Location: /touriosity/login.php');
} else {
    $_SESSION["is_login"]=true;
    $_SESSION["user"]=$result;
    header('Location: /touriosity/');
}
$db->closeDB();
exit;