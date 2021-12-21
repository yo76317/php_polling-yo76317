<h1>列出所有的問題頁</h1>

<!-- 用涵式all抓到資料表topics，並輸出
在選項上加上超聯結並給值?do=vote&id=
加上資料庫關聯id,連到顯示頁後用get使用id -->
<?php
$alltopics=all('topics');
echo "<ol>";
foreach ($alltopics as $key => $value) {
    // 找到options資料表topicid筆數 => 0 就執行以下
    // 陣列topic欄位數值，li會加排序數字
    // 聯結加上topic的變數id
    if(rows('options',['topic_id'=>$value['id']]) > 0){
    echo "<li>";    
    echo "<a href='index.php?do=vote&id={$value['id']}'>";
    echo $value['topic'];
    echo "</a>";
    echo "</li>";
    // dd($value);
    }
    }
echo "</ol>";

?>