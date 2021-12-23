<?php include_once "..db.php";

// 刪除 找ad資料表get id
// 刪除image內的image[name]圖片
// 刪除資料表ad内的get id
$image=find('ad',$_GET['id']);
unlink("../image/".$image['name']);
del('ad',$_GET['id']);
to('../backend/?do=ad');
?> 