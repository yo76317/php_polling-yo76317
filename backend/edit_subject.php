<?php
$subject=find('topics',$_GET['id']);
$options=all('options',['topic_id'=>$_GET['id']]);
?>

<form action="../api/api_save_subject.php" method='post' class='col-6 m-auto'>
    <label>問卷主題: <input type="text" name="subject" value='<?=$subject['topic'];?>'></label>
    <?php 
    foreach($options as $key => $opt){
        echo "<label class='list-group-item'>";
        echo   "選項" . ($key+1);
        echo   "<input type='text' name='options[]' value='{$opt['opt']}'>";
        echo "</label>";
    }
    ?>
<input type="submit" value="送出">
</form>