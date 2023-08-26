<?php
include_once "../base.php";

dd($_POST);
$_POST['sh']=1;
$_POST['goods']=0;
$News->save($_POST);

to("../backend.php?do=news");