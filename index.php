<?php
include_once "./db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投票系統</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="">
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
                        <div class="carousel-item active">
                            <img src="https://i.picsum.photos/id/1008/5616/3744.jpg?hmac=906z84ml4jhqPMsm4ObF9aZhCRC-t2S_Sy0RLvYWZwY" 
                            class="d-block w-25 m-auto" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.picsum.photos/id/1011/5472/3648.jpg?hmac=Koo9845x2akkVzVFX3xxAc9BCkeGYA9VRVfLE4f0Zzk" 
                            class="d-block w-25 m-auto" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.picsum.photos/id/1006/3000/2000.jpg?hmac=x83pQQ7LW1UTo8HxBcIWuRIVeN_uCg0cG6keXvNvM8g" 
                            class="d-block w-25 m-auto" alt="">
                        </div>
                    </div>
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
        <nav class="col bg-dark">
        <div class="align-middle text-center">
            <a class="col-2 btn btn-sm btn-primary my-1" href="">會員登入</a>
            <a class="col-2 btn btn-sm btn-info my-1" href="">註冊會員</a>
        </div>  
    </div>
</div><!-- 導覽 END -->


<!-- 網頁中段 -->
<!-- do看有無GET拿到do ? 有的的話回傳get到的do,沒有就回傳add_subject_form -->
<!-- file = 上行的值.php -->
<!-- 假如file_exists檢查file有值，就引入file，無值就導回add_subject_form -->
<div class="container">
    <div class="row">
        <div class="col">
            <?php
                $do=(isset($_GET['do']))?$_GET['do']:'show_vote_list';
                $file="./frontend/".$do.".php";
                if(file_exists($file)){
                        include $file;
                }else{
                        include "./frontend/show_vote_list.php";
                }
            ?>
        </div>
    </div>
</div>



<div class="p-3 text-center text-light bg-primary">&copy;YoQing版權所有、歡迎盜用</div>

    <script>
    $('#myList a').on('click', function (e) {
      e.preventDefault()
      $(this).tab('show')
    })
    </script>
    <script src="https://kit.fontawesome.com/ab96302682.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>