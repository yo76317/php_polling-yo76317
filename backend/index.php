<?php
include_once "../db.php";

// 加入會員系統，沒帶session就導回前臺
if(!isset($_SESSION['user'])){
    to("../index.php");
    exit();
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投票系統</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
    <style>
.container{
min-height: 600px;
margin: 30px auto;
}
    </style>
</head>
<body>
<!-- 輪撥 START-->
<div class="container-fluid">
    <div class="row">
        <div class="jumbotron jumbotron-fluid p-0 mb-0" style="overflow:hidden">
            <a href="index.php">
                <div id="carouselExampleIndicators" class="carousel slide bg-info" data-ride="carousel" data-interval="2500">
                    <ol class="carousel-indicators position-absolute">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                    <?php 
                        // 圖片active指定及改從image抓取自動輪放
                        $image=['1.jpg','1.jpg','1.jpg'];
                        foreach($image as $key => $image){
                        // 為0就給active
                        if($key==0){
                            echo "<div class='carousel-item active'>";
                        }else{
                            echo "<div class='carousel-item'>";
                        }
                        echo "<img src='../image/{$image}' alt='First slide' class='d-block w-25 m-auto' alt='First slide'>";
                        echo "</div>";
                        }            
                        ?>
                    </div>
                    <!-- 這邊是左右按鈕換過icon -->
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="fas fa-arrow-alt-circle-left" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="fas fa-arrow-alt-circle-right" aria-hidden="true"></span>
                    </a>
                </div> 
            </a>
        </div>
    </div>
</div><!-- 輪撥區 END -->



<!-- 導覽 START -->  
<div class="container-fluid">
    <div class="row">
        <nav class="col bg-dark text-light d-flex justify-content-between p-2">
            <div class="text-left">
                <a class='px-2' href="?do=show_vote_list">問卷管理</a>
                <a class='px-2' href="?do=member">會員管理</a>
                <a class='px-2' href="?do=ad">廣告管理</a>  
            </div>

            <?php 
                if(isset($_SESSION['user'])){
                    echo "<span class='pr-5'>歡迎！{$_SESSION['user']}</span>";
            ?>
            <div class="text-right">
                <a class="btn btn-sm btn-primary mx-1" href="../logout.php">登出</a>
            </div>
            <?php
            }
            ?>
        </nav>
    </div>
</div><!-- 導覽 END -->


<!-- 網頁中段 -->
<!-- do看有無GET拿到do ? 有的的話回傳get到的do,沒有就回傳add_subject_form -->
<!-- file = 上行的值.php -->
<!-- 假如file_exists檢查file有值，就引入file，無值就導回add_subject_form -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php
                $do=(isset($_GET['do']))?$_GET['do']:'manage_vote';
                $file=$do.".php";
                if(file_exists($file)){
                        include $file;
                }else{
                        include "./manage_vote.php";
                }
            ?>
        </div>
    </div>
</div>

<?php 
// dd($do);
// dd($file); 
?>

<div class="p-3 text-center text-light bg-primary">&copy;YoQing版權所有、歡迎盜用</div>

    <script src="https://kit.fontawesome.com/ab96302682.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>