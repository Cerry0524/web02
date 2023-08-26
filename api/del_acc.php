<?php
include_once "../base.php";
dd($_POST);
foreach ($_POST['del'] as $idx => $id) {
    $User->del($id);
}
to("../backend.php?do=user");
