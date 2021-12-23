<?php include_once "../db.php";

// 會員驗證，有值就銷毀error後比對資料表內的帳號密碼，無值帳號密碼錯誤
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}

if(rows('users',$_POST)>0){
    $_SESSION['user']=$_POST['account'];

    to("../index.php");
}else{
    $_SESSION['error']="帳號或密碼錯誤";
    
    to("../index.php?do=login");
}
?>