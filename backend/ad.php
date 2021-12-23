<!-- 檔案上傳 -->
<!-- enctype編碼類型:二進位制資料 -->
<form action="../api/upload_ad.php" method="post" enctype="multipart/form-data">

    <div class='w-25 custom-file mx-auto d-block mb-2'>
        <label for="upload" class='custom-file-label'>選擇檔案：</label>
        <input class="custom-file-input" type="file" name="name" id="upload">
    </div>

    <div class="w-25 mx-auto text-center mt-2 input-group mb-2">
        <label class='input-group-prepend input-group-text' for='intro'>說明：</label>
        <input class='form-control' type="text" name="intro" id="intro">
    </div>
    
    <div class="w-25 mx-auto mb-2">
        <input type="submit" value="上傳" class="btn btn-primary">
    </div>
    
</form>