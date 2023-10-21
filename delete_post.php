<?php
session_start(); // Bắt đầu phiên làm việc

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION['id'])) {
    header('location: login.php');
    exit;
}

require_once 'models/UserModel.php';
$userModel = new UserModel();

$user_id = NULL;
//"kiểm tra token và id"
if (!empty($_GET['user_id']) && !empty($_GET['token'])) {
    $user_id = $_GET['user_id'];
    $token = $_GET['token'];
    //token là gắn cứng trực tiếp
    if ($_SESSION['id'] == $user_id && $_SESSION['token'] == $token) {
        $result = $userModel->deletePostById($user_id);
        if ($result) {
            $_SESSION['success_message'] = "Bài viết đã được xóa thành công.";
        }
    } else {
        $_SESSION['error_message'] = "Bạn không có quyền xóa bài viết này.";
    }
}

header('location: list_users.php');
