<?php include_once "..db.php";

$ad=find("ad",$_POST['id']);

// 避免空檔,files暫存資料夾位置
if(!empty($_FILES['name']['tmp_name'])){
    $filename=$_FILES['name']['name'];
    //將上傳的檔案移動到新位置
    move_uploaded_file($_FILES['name']['tmp_name'],'../image/'.$filename);
}
$intro=$_POST['intro'];

if(isset($filename)){
    update('ad',['name'=>$filename,'intro'=>$intro],['id'=>$_POST['id']]);
}else{
    update('ad',['intro'=>$intro],['id'=>$_POST['id']]);
}
// to("../backend/?do=ad"); 
dd($)