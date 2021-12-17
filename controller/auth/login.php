<?php
include "../../model/actions.php";

class auth extends actions
{
    protected $tbl = 'admin_users';

    public function login($data)
    {
        $username = $data['username'];
        $password = $data['password'];
        $this->setTbl($this->tbl);
        $user_data = $this->searchData('username', $username);
        if (sha1($password) == $user_data->password  and $user_data->status == 1) {
            session_start();
            $_SESSION['username'] = $user_data->username;
            $_SESSION['user_id'] = $user_data->id;
            $_SESSION['firstname'] = $user_data->firstname;
            header('location:'.BASE_URL.'superadmin');
        } else {
            header('location:'.BASE_URL.'login?login=error');
        }
    }

    public function logout()
    {
        session_destroy();
        header('location:'.BASE_URL.'login');
    }
}