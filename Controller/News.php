<?php
include_once "DB.php";

class News extends DB
{
    function __construct()
    {
        parent::__construct('news');
    }
    function backend()
    {
        $view = [
            'rows' => $this->all(),
        ];
        return $this->view("./view/backend/news.php", $view);
    }
    function type($type)
    {
        $array = [
            1 => '健康新知  ',
            2 => '菸害防治',
            3 => '癌症防治',
            4 => '慢性病防治',
        ];
        return $array[$type];
    }
    
}
