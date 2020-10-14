<!-- 2020/08/11 增加判斷登入後讀取的session_start() -->
<?php
if(! isset($_SESSION)){
    session_start();
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- ---------------------------------------大家都有的東西------------------------------------------------ -->
    <title><?=$title?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/normalize.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap CSS -->


    <!-- ---------字體----------- -->
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <!-- ---------字體---------- -->

    <!-- ---------font css---------- -->
    <link rel="stylesheet" href="css/font.css">
    <!-- ---------font css---------- -->

    <!-- ---------按鈕---------- -->
    
    <!-- ---------按鈕---------- -->

    <!-- ---------------------------------------大家都有的東西------------------------------------------------ -->



    <!-- ---------------------------------------個別的東西------------------------------------------------ -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- ---------------------------------------2020/08/10 世佑新增 個別的東西，和資料庫有關的會用到以下------------------------------------------------ -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" >
    <!-- Fontawesome -->
    <link rel="stylesheet" href="fontawesome/css/all.css" >
    <!-- ---------------------------------------2020/08/10 世佑新增 個別的東西，和資料庫有關的會用到以上------------------------------------------------ -->



    