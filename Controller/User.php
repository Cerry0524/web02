<?php
include_once "DB.php";

class User extends DB
{
    function __construct()
    {
        parent::__construct('user');
    }
    function backend()
    {
        $view = [
            'rows' => $this->all(),
        ];
        return $this->view("./view/backend/user.php", $view);
    }
    function login($user)
    {
        // dd($user);
        $chk = $this->count(['acc' => $user['acc']]);
        if ($chk) {
            $chk = $this->find($user);
            if ($chk) {
                $_SESSION['user'] = $user['acc'];
                if ($user['acc'] == 'admin') {
                    return 4;
                } else {
                    return 1;
                }
            } else {
                return 2;
            }
        } else {
            return 0;
        }
    }
    function forgot($email)
    {
        $chk = $this->count(['email' => $email]);
        if ($chk) {
            return $this->find(['email' => $email])['pw'];
        } else {
            return "查無此資料";
        }
    }
    function reg($user)
    {
        // dd($user);
        $chk = $this->count(['acc' => $user['acc']]);
        if (!$chk) {
            $this->save($user);
            return 1;
        } else {
            return 0;
        }
    }
}
