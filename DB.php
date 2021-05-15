<?php

class Database{
    private $servername="localhost";
    private $username = "root";
    private $password = "";
    private $dbName = "touriosity";
    private $conn=null;
    
    public function __construct(){
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbName);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getUserForLogin($username){
        $stmt = $this->conn->prepare("SELECT * FROM user WHERE username=?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        return $result;
    }

    public function addUser($user){
        $stmt = $this->conn->prepare("INSERT INTO `user`(`username`, `email`, `password`, `last_logedin`) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss", $user['uname'], $user["email"], $user["password"], date("Y-m-d H:i:s"));
        $stmt->execute();

        $stmt1 = $this->conn->prepare("SELECT * FROM user WHERE email=?");
        $stmt1->bind_param("s", $user["email"]);
        $stmt1->execute();
        $result = $stmt1->get_result()->fetch_assoc();

        $stmt2 = $this->conn->prepare("INSERT INTO `user_details`(`user_id`, `first_name`, `last_name`, `gender`, `date_of_birth`, `phone_number`) VALUES (?,?,?,?,?,?)");
        $stmt2->bind_param("isssss", $result['id'], $user["fname"], $user["lname"], $user["gender"], $user["dob"], $user["tel"]);
        $stmt2->execute();
        return true;
    }

    public function checkDuplicateEmail($email){
        $stmt = $this->conn->prepare("SELECT * FROM user WHERE email=?");
        if (!$stmt) {
            echo "Prepare failed: (" . $this->conn->errno . ") " . $this->conn->error;die;
       }
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        if(empty($result)){
            return false;
        }
        return true;
    }

    public function checkDuplicateUsername($username){
        $stmt = $this->conn->prepare("SELECT * FROM user WHERE username=?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        if(empty($result)){
            return false;
        }
        return true;
    }

    public function saveProfileImage($path,$userId){
        $stmt = $this->conn->prepare("UPDATE user_details SET profile_picture=? WHERE user_id=?");
        $stmt->bind_param("si", $path,$userId);
        $stmt->execute();
        return true;
    }

    public function getUserDetails($userId){
        $stmt = $this->conn->prepare("SELECT user.username, user.email, user_details.first_name,user_details.last_name,user_details.gender,user_details.date_of_birth,user_details.phone_number,user_details.profile_picture FROM user INNER JOIN user_details ON user.id=user_details.user_id WHERE user_details.user_id=?");
        $stmt->bind_param("i",$userId);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        return $result;

    }

    public function updateUserDetails($data,$userId){
        $stmt = $this->conn->prepare("UPDATE `user_details` SET `first_name`=?,`last_name`=?,`gender`=?,`date_of_birth`=?,`phone_number`=? WHERE `user_id`=?");
        $stmt->bind_param("sssssi", $data["fname"],$data["lname"],$data["gender"],$data["dob"],$data["tel"],$userId);
        $stmt->execute();
        return true;
    }

    public function updateUser($data,$userId,$isPassUpdate){
        $sql="UPDATE `user` SET `username`=?,`email`=?";
        if($isPassUpdate){
            $sql.=",`password`=?";
        }
        $sql.=" WHERE `id`=?";
        $stmt = $this->conn->prepare($sql);
        if($isPassUpdate){
            $stmt->bind_param("sssi", $data["username"],$data["email"],$data["password"],$userId);
        }else{
            $stmt->bind_param("ssi", $data["username"],$data["email"],$userId);
        }
        $stmt->execute();
        return true;
    }

    public function deleteUser($userId){
        $stmt = $this->conn->prepare("DELETE FROM `user` WHERE `id`=?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();

        $stmt = $this->conn->prepare("DELETE FROM `user_details` WHERE `user_id`=?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        return true;
    }

    public function closeDB(){
        $this->conn->close();
    }

}