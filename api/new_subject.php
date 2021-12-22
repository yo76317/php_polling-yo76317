<?php
include_once "db.php";

$topic=['topic'=>$_POST['subject']];
insert('topics',$topic);

to("../backend");

?> 