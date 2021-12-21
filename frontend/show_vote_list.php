<h1>列出所有的問題頁</h1>
<?php
$alltopics=all('topics');
echo "<ol>";
foreach ($alltopics as $key => $value) {
    echo "<li>";    
    echo $value['topic'];
    echo "</li>";
}
echo "</ol>";
?>