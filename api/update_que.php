<?php
include_once "../base.php";
dd($_POST);
foreach ($_POST['id'] as $idx => $id) {
    if(isset($_POST['del']) && in_array($id,$_POST['del'])){
        echo $Que->del($id);
        echo $Que->del(['subject_id'=>$id]);
    }else{
        $row=$Que->find($id);
        dd($row);
        $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
        dd($row);
        echo $Que->save($row);
    }
    
}
to("../backend.php?do=que");