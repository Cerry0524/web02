<?php
include_once "DB.php";

class News extends DB
{
    function __construct()
    {
        parent::__construct('news');
    }
    function backend(){
        $view=[
            'rows'=>$this->all(),
        ];
        return $this->view("./view/backend/news.php",$view);
    }
    
}
