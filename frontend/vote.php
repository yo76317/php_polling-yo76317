<!-- 用僞get[id]給 find涵式找資料表 -->
<?php
    $id=$_GET['id'];
    $subject=find('topics',$id);
    // dd($subject);
    $options=all('options',['topic_id'=>$id]);
?>

<h1> <?php echo $subject['topic'];?> </h1>
<ol>
    <form action="../api/api_save_subject.php" method="post">
        <!-- 把options陣列拆，拿opt陣列值來用id&opt -->
        <!-- 把選項改成radiom單選,foreach會帶值跑,所以name都一樣 -->
            <?php
                foreach ($options as $key => $opt) {
                    echo "<li>";
                    echo "<input type='radio' name='opt' value='{$opt['id']}'>";
                    echo $opt['opt'];
                    echo "</li>";
                }
                // dd($options);
                // dd($opt);
            ?>
        
        <input type="submit" value="投票">
    </form>
</ol>