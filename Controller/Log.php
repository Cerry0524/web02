<?php
include_once "DB.php";

class Log extends DB
{
    function __construct()
    {
        parent::__construct('log');
    }
    function backend()
    {
        $view = [
            'rows' => $this->all(),
        ];
        return $this->view("./view/backend/log.php", $view);
    }
    function goods($id)
    {
        $chk = $this->count(['user' => $_SESSION['user'],'news_id' => $id, ]);
        if ($chk) {
            $this->del(['news_id' => $id, 'user' =>  $_SESSION['user']]);
        } else {
            $this->save(['news_id' => $id, 'user' =>  $_SESSION['user']]);
        }
    }
    function showGoods($news){
        $chk=$this->count(['user'=>$_SESSION['user'],'news_id'=>$news]);
        if($chk>0){
            return "收回讚";
        }else{
            return "讚";
        }
    }
}