<?php include_once "../db.php";

// 會員驗證
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