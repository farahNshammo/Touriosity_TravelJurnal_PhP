<?php
session_start();
require_once "DB.php";
$db=new Database;
if(isset($_POST["profile_image_upload"]) && isset($_SESSION["is_login"]) && $_SESSION["is_login"]==true && isset($_SESSION["user"])){
    $target_dir = "./uploads/";
    $target_file = $target_dir . basename($_FILES["profile_image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["profile_image"]["tmp_name"]);
    if($check !== false) {
        move_uploaded_file($_FILES["profile_image"]["tmp_name"],$target_file);
        $db->saveProfileImage($target_file,$_SESSION["user"]["id"]);
        $_SESSION["success"]["profile_image"] = "Image Upload Complete.";
    } else {
        $_SESSION["error"]["serror"]="Internal server error.";
    }

    header('Location: /touriosity/profile.php');
    $db->closeDB();
    exit;
}

if(isset($_POST["personal_update"]) && isset($_SESSION["is_login"]) && $_SESSION["is_login"]==true && isset($_SESSION["user"])) {
    $submit_flag=true;
    if(isset($_POST["fname"]) && empty($_POST["fname"])){
        $submit_flag=false;
        $_SESSION["error"]["fname"]="First name required";
    }

    if(isset($_POST["lname"]) && empty($_POST["lname"])){
        $submit_flag=false;
        $_SESSION["error"]["lname"]="Last name required";
    }

    if(isset($_POST["tel"]) && empty($_POST["tel"])){
        $submit_flag=false;
        $_SESSION["error"]["tel"]="Phone number required";
    }
    
    if(isset($_POST["dob"]) && empty($_POST["dob"])){
        $submit_flag=false;
        $_SESSION["error"]["dob"]="Date of birth required";
    }
    
    if(isset($_POST["gender"]) && empty($_POST["gender"])){
        $submit_flag=false;
        $_SESSION["error"]["gender"]="Gender required";
    }

    if($submit_flag){
        $db->updateUserDetails(array(
            "fname"=>$_POST["fname"],
            "lname"=>$_POST["lname"],
            "tel"=>$_POST["tel"],
            "dob"=>$_POST["dob"],
            "gender"=>$_POST["gender"]
        ),$_SESSION["user"]["id"]);
        $_SESSION["success"]["user"] = "Update Successfull.";
    }

    header('Location: /touriosity/profile.php');
    $db->closeDB();
    exit;
}

if(isset($_POST["basic_update"]) && isset($_SESSION["is_login"]) && $_SESSION["is_login"]==true && isset($_SESSION["user"])) {
    $submit_flag=true;
    if(isset($_POST["username"]) && empty($_POST["username"])){
        $submit_flag=false;
        $_SESSION["error"]["username"]="Username required";
    }

    if(isset($_POST["email"]) && empty($_POST["email"])){
        $submit_flag=false;
        $_SESSION["error"]["email"]="Email required";
    }

    if(isset($_POST["old_pass"]) && empty($_POST["old_pass"])){
        $db->updateUser(array(
            "username"=>$_POST["username"],
            "email"=>$_POST["email"]
        ),$_SESSION["user"]["id"],false);
        $_SESSION["success"]["user"] = "Update Successfull.";
    }else{
        if(password_verify($_POST["old_pass"], $_SESSION["user"]["password"])){
            if(isset($_POST["new_pass"]) && !empty($_POST["new_pass"]) && isset($_POST["c_pass"]) && !empty($_POST["c_pass"]) && $_POST["new_pass"]==$_POST["c_pass"]){
                $db->updateUser(array(
                    "username"=>$_POST["username"],
                    "email"=>$_POST["email"],
                    "password"=>password_hash($_POST["new_pass"], PASSWORD_DEFAULT)
                ),$_SESSION["user"]["id"],true);
                $_SESSION["success"]["user"] = "Update Successfull.";
            }
        }else{
            $_SESSION["error"]["password"]="password not matched";
        }
    }
    header('Location: /touriosity/profile.php');
    $db->closeDB();
    exit;
}

if (isset($_POST["delete"]) && isset($_SESSION["is_login"]) && $_SESSION["is_login"]==true && isset($_SESSION["user"])){
$db->deleteUser($_SESSION["user"]["id"]);
$_SESSION["success"]["user"] = "Delete Successfull.";  
$_SESSION["is_login"]=false;
    $_SESSION["user"]=null;
header('Location: /touriosity/login.php');
    $db->closeDB();
    exit;
}