<?php
include_once "../base.php";
echo $User->forgot($_POST['email']);