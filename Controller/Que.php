<?php
include_once "DB.php";

class Que extends DB
{
    function __construct()
    {
        parent::__construct('que');
    }
    function backend(){
        $view=[
            'rows'=>$this->all(),
        ];
        return $this->view("./view/backend/que.php",$view);
    }
    function vote($id){
        $row=$this->find($id);
        $row['vote']++;
        $this->save($row);
        return $row['subject_id'];
    }
}
