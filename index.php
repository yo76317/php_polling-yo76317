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
margin: 30px;
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
<div class="container mx-auto">
    <div class="row ">
        <div class="col ">
            <?php
                // include "backend/add_subject_form.php";
            ?>
        </div>
    </div>
</div>


<div class="p-3 text-center text-light bg-primary">&copy;YoQing版權所有、歡迎盜用</div>


    <script src="https://kit.fontawesome.com/ab96302682.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>