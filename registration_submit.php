<?php
session_start();
require_once "DB.php";
$db=new Database;

$submit_flag=true;
$_SESSION["error"]=array();

if(!isset($_POST["fname"]) || empty($_POST["fname"])){
    $submit_flag=false;
    $_SESSION["error"]["fname"]="First name required";
}

if(!isset($_POST["lname"]) || empty($_POST["lname"])){
    $submit_flag=false;
    $_SESSION["error"]["lname"]="Last name required";
}

if(!isset($_POST["username"]) || empty($_POST["username"])){
    $submit_flag=false;
    $_SESSION["error"]["username"]="Username required";
}else{
    if($db->checkDuplicateUsername($_POST["username"])){
        $submit_flag=false;
        $_SESSION["error"]["username"]="Username already Exists.";
    }
}

if(!isset($_POST["email"]) || empty($_POST["email"])){
    $submit_flag=false;
    $_SESSION["error"]["email"]="Email required";
}else{
    if($db->checkDuplicateEmail($_POST["email"])){
        $submit_flag=false;
        $_SESSION["error"]["email"]="Email already Exists.";
    }
}

if(!isset($_POST["password"]) || empty($_POST["password"])||!isset($_POST["cpassword"]) || empty($_POST["cpassword"])){
    $submit_flag=false;
    $_SESSION["error"]["password"]="password and confirm password required";
}elseif(strlen($_POST["password"])<6||strlen($_POST["cpassword"])<6){
    $submit_flag=false;
    $_SESSION["error"]["password"]="minimum password length required 6 or more";
}elseif($_POST["password"]!=$_POST["cpassword"]){
    $_SESSION["error"]["password"]="password didn't match with confirm password";
}

if(!isset($_POST["tel"]) || empty($_POST["tel"])){
    $submit_flag=false;
    $_SESSION["error"]["tel"]="Phone number required";
}

if(!isset($_POST["dob"]) || empty($_POST["dob"])){
    $submit_flag=false;
    $_SESSION["error"]["dob"]="Date of birth required";
}

if(!isset($_POST["gender"]) || empty($_POST["gender"])){
    $submit_flag=false;
    $_SESSION["error"]["gender"]="Gender required";
}

if(!$submit_flag){
    header('Location: /touriosity/registration.php');
    exit;
}


$result=$db->addUser(array(
    "fname"=>$_POST["fname"],
    "lname"=>$_POST["lname"],
    "uname"=>$_POST["username"],
    "email"=>$_POST["email"],
    "password"=>password_hash($_POST["password"], PASSWORD_DEFAULT),
    "tel"=>$_POST["tel"],
    "dob"=>$_POST["dob"],
    "gender"=>$_POST["gender"]
));
if($result){
    $_SESSION["success"]["user"] = "Registration Complete.";
}else{
    $_SESSION["error"]["serror"]="Internal server error.";
}
$db->closeDB();
header('Location: /touriosity/login.php');
exit;