<?php
    $dsn="mysql:host=localhost;charset=utf8;dbname=yovote";
    $pdo=new PDO($dsn,'root','');



    // 最常用檢查陣列輸出
    function dd($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    // 新增 array_keys拿變數的
    function insert($table,$array){
        global $pdo;
        $sql="INSERT into $table(`" . implode('`,`',array_keys($array)) . "`) 
                           value('" . implode("','",$array) ."')";
       echo $sql."<br>";
       return $pdo->exec($sql);
    }




    // 更新
    function update($table,$column,$where){
    global $pdo;
    $sql_set='';
    foreach ($column as $key => $value) {
        $sql_set=$sql_set . "`$key`='$value',";
    }
    $sql_set=trim($sql_set,',');
    $sql_where='';
    foreach ($where as $key => $value) {
        $sql_where=$sql_where . "`$key`='$value' AND ";
    }
    $sql_where=mb_substr($sql_where,0,mb_strlen($sql_where)-5);;

    mb_substr($sql_where,0,mb_strlen($sql_where)-5);
    $sql="UPDATE `$table` SET $sql_set WHERE $sql_where ";
    //echo $sql;
    $pdo->exec($sql);
    }


    // 刪除
    // 有值、加上條件，有值拆開套入後比對條件
    // 無值、直接比對條件
    function del($table,$id){
    global $pdo;
    $sql="DELETE FROM `$table` WHERE ";
    if(is_array($id)){
        foreach($id as $key=>$value){
            $tmp[]="`$key`='$value'";
        }
        $sql=$sql. implode(" AND ",$tmp);
    }else{
       $sql=$sql . "`id`='$id'";
    }
    return $pdo->exec($sql);
    }


    // 取得符合條件的一筆資料
    // 判斷id有無沒值進來，有的話就froeach $id並拆開後引入$sql看條件合不合
    // 沒有值就直接核對看條件合不合
    function find($table,$id){
        global $pdo;
        $sql="SELECT * FROM `$table` WHERE ";
        if(is_array($id)){
            foreach($id as $key=>$value){
                $tmp[]="`$key`='$value'";
            }
            $sql=$sql. implode(" AND ",$tmp);
        }else{
           $sql=$sql . "`id`='$id'";
        }
        return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }


    // 取出指定資料表的所有資料
    function all($table,...$arg){
    global $pdo;
    $sql="SELECT * FROM `$table` ";
    if(isset($arg[0])){
        if(is_array($arg[0])){
            foreach($arg[0] as $key=>$value){
                $tmp[]="`$key`='$value'";
            }
            $sql=$sql."where " . implode(" AND ",$tmp);
        }else{
            $sql=$sql.$arg[0];
        }
    }
    if(isset($arg[1])){
        $sql=$sql.$arg[1];
    }
    // echo $sql;
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
    //return $pdo->query($sql)->fetchAll();
    }
?> 