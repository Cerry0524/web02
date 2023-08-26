<?php
include_once "DB.php";

class Viewer extends DB
{
    function __construct()
    {
        parent::__construct('viewer');
    }
    function backend()
    {
        $view = [
            'rows' => $this->all(),
        ];
        return $this->view("./view/backend/viewer.php", $view);
    }
    function todayViewer()
    {
        $today = date("Y-m-d");
        if (!isset($_SESSION['viewer'])) {
            $chk = $this->count(['date' => $today]);

            if ($chk) {
                $row = $this->find(['date' => $today]);
                $_SESSION['viewer'] = 1;
                $row['viewer']++;
                $this->save($row);
                return $this->find(['date' => $today])['viewer'];
            } else {
                $_SESSION['viewer'] = 1;
                $this->save([
                    'date' => $today,
                    'viewer' => 1,
                ]);
                return 1;
            }
        } else {
            return $this->find(['date' => $today])['viewer'];
        }
    }
    function totalViewer(){
        return $this->sum('viewer');
    }
}
