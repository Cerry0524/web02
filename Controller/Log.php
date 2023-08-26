<?php
include_once "DB.php";

class Log extends DB
{
    function __construct()
    {
        parent::__construct('log');
    }
    function backend(){
        $view=[
            'rows'=>$this->all(),
        ];
        return $this->view("./view/backend/log.php",$view);
    }
}
