<?php
include "../../model/config/user_config.php";
$user_config = new user_config();

if (isset($_POST['submit']))
{
    $password = $_POST['password'];
    $con_password = $_POST['con_password'];

    if ($password == $con_password)
    {
        $message = $user_config->reset_password($_POST);
    }else{
        $message = '3';
    }
    header('location:'.BASE_URL.'profile_setting/'.$message.'');
}

if (isset($_GET['status']))
{
    if ($_GET['status'] == 0)
    {
        //active user
        $user_config->active_user($_GET['id']);
        header('location:'.BASE_URL.'user_manage');
    }
    if ($_GET['status'] == 1)
    {
        //deactivate user
        $user_config->deactivate_user($_GET['id']);
        header('location:'.BASE_URL.'user_manage');
    }
}

if (isset($_GET['delete']))
{
    $user_id = $_GET['delete'];
    $user_config->delete_user($user_id);
    header('location:'.BASE_URL.'user_manage');
}

if (isset($_POST['register']))
{
    $data = $_POST['reg'];
    $password = sha1($_POST['password']);

    $data += ['password'=>$password];
    $data += ['status'=>1];

    $time_array = $user_config->realtime();
    $time = $time_array["pdate(NOW())"];
    $data += [ "submit_fa" => $time ];

    $filds = array_keys($data);
    $user_config->insert_user($data, $filds);

    header('location:'.BASE_URL.'user_manage');
}

$user_list = $user_config->user_list();