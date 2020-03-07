<?php
session_start();
// get database connection
include_once '../config/database.php';
 
// instantiate user object
include_once '../objects/user.php';

 
$database = new Database();
$db = $database->getConnection();
 
$user = new User($db);
 
// set user property values
$user->username = $_POST['username'];
$user->password = $_POST['password'];
$user->created = date('Y-m-d H:i:s');
 
// create the user
if($user->signup()){
    $user_arr=array(
        "status" => true,
        "message" => "Đăng ký thành công",
        "id" => $user->id,
        "username" => $user->username
    );
    $_SESSION['message'] = $user_arr;
    header('Location: /MenClothes/login.php');
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Tài khoản đã tồn tại"
    );
    $_SESSION['message'] = $user_arr;
    header('Location: /MenClothes/login.php');
}
print_r(json_encode($user_arr));
?>