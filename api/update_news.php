<?php
include_once "../base.php";
dd($_POST);
foreach ($_POST['id'] as $idx => $id) {
    if(isset($_POST['del']) && in_array($id,$_POST['del'])){
        $News->del($id);
    }else{
        $row=$News->find($id);
        $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
        $News->save($row);

    }
    
}
to("../backend.php?do=news");