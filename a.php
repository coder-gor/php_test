<?php
$name=$_GET['name'];
$img=$_GET['img'];
$px=$_GET['px'];
$act=$_GET['act'];
?>

<html class="js svg flexbox csstransforms" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#557B97">
    <title>Home Page Store</title>
    <link href="static/theme.css" rel="stylesheet" type="text/css" media="all">
</head>

<body class="template-page">

<div class="page-container drawer-page-content" id="PageContainer">

    <main class="main-content js-focus-hidden" id="MainContent" role="main" tabindex="-1">
        <div class="page-width">
            <div class="grid">
                <div class="grid__item medium-up--five-sixths medium-up--push-one-twelfth">
                    <div class="section-header text-center">
                        <h1>Click Below to Learn More👇</h1>
                    </div>

                    <div class="rte">
                        <style>
                            h2, .h2 {
                                font-size: 2em;
                                text-transform: none;
                                color: #5a5a5a;
                                text-align: center;  }
                            #shopify-section-header, .site-footer{display:none!important}
                        </style>
                        <div>
                            <img src="static/setas-para-baixo_480x480_122f1fd8-7069-45d9-8fd6-140447d9bf22_480x480.png" alt="" width="480x480" height="480x480" style="display: block; margin-left: auto; margin-right: auto;">
                        </div>
                        <div style="text-align: center;">
                            <form name="f" action="" method="get" id="myform">
                                <input type="hidden" name="name" value="<?php echo $name;?>">
                                <input type="hidden" name="img" value="<?php echo $img;?>" hidden>
                                <input type="hidden" name="px" value="<?php echo $px;?>" hidden>
                                <input type="hidden" name="act" value="<?php echo $act;?>" hidden>
                                <input type="hidden" name="page" value="<?php echo 1;?>" hidden>
<!--                                <input type="submit" value="查看" name="" style="background-image: static/Learn-More-Button-PNG-File_480x480.png">-->
<!--                                <a href="./index.php?name=--><?php //echo $name;?><!--&img=--><?php //echo $img;?><!--&px=--><?php //echo $px;?><!--&act=--><?php //echo $act;?><!--" target="_blank" aria-describedby="a11y-external-message">-->
<!--                                    <img src="static/Learn-More-Button-PNG-File_480x480.png" alt="" width="480x480" height="480x480" style="display: block; margin-left: auto; margin-right: auto;">-->
<!--                                </a>-->
                                <a href="" onclick="document.getElementById('myform').submit();return false;" target="_blank" aria-describedby="a11y-external-message">
                                    <img src="static/Learn-More-Button-PNG-File_480x480.png" alt="" width="480x480" height="480x480" style="display: block; margin-left: auto; margin-right: auto;">
                                </a>
                            </form>
                            <img src="static/Captura_de_Tela_2020-05-14_as_22.50.48_480x480.png" alt="" width="279" height="162">
                            <br>©️ 2020 All Rights Reserved
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

</div>

</body></html>