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
            0 => '健康新知',
            1 => '菸害防治',
            2 => '癌症防治',
            3 => '慢性病防治',
        ];
        return $array[$type];
    }
    function list($type)
    {
        $rows = $this->all(['type' => $type]);
        foreach ($rows as $idx => $row) {
            echo "<div class='list' onclick='javascript:post({$row['id']})'>";
            echo "<a href='#'>";
            echo $row['title'];
            echo "</a>";
            echo "</div>";
        }
    }
    function post($id)
    {
        $row = $this->find($id);
        echo "<div onclick='javascript:list({$row['type']})'>";
        echo "<pre>";
        echo $row['title'];
        echo $row['text'];
        echo "</pre>";
        echo "</div>";
    }
    function show()
    {
        return $this->paginate(5, " where `sh`=1 order by `id` desc");
    }
}
