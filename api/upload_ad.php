<h2>檔案上傳api</h2>

<?php include_once "../db.php";

if(!empty($_FILES['name']['tmp_name'])){
    $intro=$_POST['intro'];
    $filename=$_FILES['name']['name'];
    move_uploaded_file($_FILES['name']['tmp_name'],'../image/'.$filename);

    // 新增到ad資料，
    insert('ad',['name'=>$filename,'sh'=>0,'intro'=>$intro]);

}
to("../backend/?do=ad");
?> 