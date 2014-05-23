<?php
    header('Content-Type: text/html; charset=utf-8');
    header("HTTP/1.1 404 Not Found");
    header("Status: 404 Not Found");
?><!doctype html>
<html>
<head>
    <title>Вы находитесь на странице, которой не существет.</title>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

    <style>
        body {margin:0; padding:0; background:url(/bg.jpg) center -70px no-repeat #fff; min-height:890px; color:#000;}
        .title {font-family:'PT Sans'; font-weight:bold; font-size:36px; color:#000; text-align:center; position:absolute; top:575px; left:50%; width:550px; margin-left:-275px; text-transform:uppercase; opacity:0.99;}

        .text {font-family:'PT Sans'; font-size:16px; line-height:1.2; text-align:center; position:absolute; top:718px; left:50%; width:550px; margin-left:-275px; color:#50525e;}
            .text a {font-family:'PT Sans'; color:#000;}
            .text a:hover {text-decoration:none;}

        .phone {font-family:'PT Sans'; font-weight:bold; font-size:24px; text-align:center; position:absolute; top:835px; left:50%; width:550px; margin-left:-275px; letter-spacing:-0.04em; opacity:0.99;}
    </style>
</head>
<body>
    <div class="title">Вы находитесь на странице,<br />которой не существует</div>
    <div class="text">
        Если вы уверены, что такой страницы нет по нашей вине – <a href="mailto:hello@very-good.ru">сообщите нам об этом</a>, указав адрес, с которого вы сюда попали. Если вы вводили адрес вручную в адресной строке браузера, проверьте, всё ли вы написали правильно. Если вы перешли по ссылке с другого сайта, попробуйте перейти на главную страницу сайта и найти нужный вам материал там.
    </div>
    <div class="phone">+7 (861) 267-22-30</div>
</body>
</html>
