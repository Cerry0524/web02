<?php
session_start();
date_default_timezone_set("Asia/Taipei");

include_once __DIR__."/Controller/Log.php";
include_once __DIR__."/Controller/News.php";
include_once __DIR__."/Controller/Que.php";
include_once __DIR__."/Controller/User.php";
include_once __DIR__."/Controller/Viewer.php";

$Log = new Log;
$News = new News;
$Que = new Que;
$User = new User;
$Viewer = new Viewer;

function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
function to($url){
    header("location:".$url);
}
