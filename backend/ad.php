<h2 class="text-center font-weight-bold">輪播圖管理</h2>


<!-- enctype編碼類型:二進位制資料 -->
<form action="../api/upload_ad.php" method="post" enctype="multipart/form-data">

    <div class='custom-file mx-auto d-block mb-2'>
        <label for="upload" class='custom-file-label'>選擇檔案：</label>
        <input class="custom-file-input" type="file" name="name" id="upload">
    </div>

    <div class="mx-auto text-center mt-2 input-group mb-2">
        <label class='input-group-prepend input-group-text' for='intro'>說明：</label>
        <input class='form-control' type="text" name="intro" id="intro">
    </div>
    
    <div class="mx-auto mb-2">
        <input type="submit" value="上傳" class="btn btn-primary">
    </div>
    
</form>


    <h3 class="text-center">圖片列表</h3>
    <table class="table">
        <tr>
            <td>項目代碼</td>
            <td>圖片</td>
            <td>說明</td>
            <td>狀態</td>
            <td>管理</td>
        </tr>
        <?php 
            $rows=all('ad');
            foreach($rows as $row){
            echo "<tr>";
            echo "<td class='my-auto'>{$row['id']}</td>";
                echo "<td>";
                    echo "<img src='../image/{$row['name']}' style='width:300px;height:200px'>";
                echo "</td>";
                echo "<td>{$row['intro']}</td>";
                echo "<td>";
                // 連到api處理sh值
                echo "<a href='../api/change_status.php?id={$row['id']}'>";
                echo ($row['sh']==1)?"顯示":"下架";
                echo "</a>";
                echo "</td>";
                echo "<td>";
                echo "<a class='' href='?do=edit_ad&id={$row['id']}'>修改</a>";
                    echo "<button>重新上傳</button>";
                    echo "<a class='' href='../api/del_ad.php?id={$row['id']}'>刪除</a>";
                echo "</td>";
            echo "</tr>";
            }
            // dd($rows);
            // dd($row);
        ?>
    </table>
