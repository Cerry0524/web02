<?php
include_once "../base.php";
unset($_POST['pw2']);
echo $User->reg($_POST);