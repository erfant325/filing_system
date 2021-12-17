<?php
include_once 'config.php';

class user_config extends connect
{
    private $tbl = 'admin_users';

    public function reset_password($data)
    {
        $username = $data['username'];
        $old_password = $data['old_password'];
        $password = $data['password'];
        $password_hash = sha1($password);

        $sql = $this->pdo->prepare("select * FROM {$this->tbl} where username = '$username'");
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        $id = $result['id'];

        if ($result['password'] == sha1($old_password))
        {
            $query = $this->pdo->prepare("update {$this->tbl} set password = '$password_hash' WHERE id='$id'");
            $query->execute();
            //password changed
            $massage = '1';
        }else{
            //wrong old password
            $massage = '2';
        }
        return $massage;
    }

    public function user_list()
    {
        $s_sql = $this->pdo->prepare("select * from {$this->tbl} order by id asc");
        $s_sql->execute();
        $res = $s_sql->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function active_user($id)
    {
        $sql2 = $this->pdo->prepare("update {$this->tbl} set status = '1' WHERE id='$id'");
        $sql2->execute();
    }

    public function deactivate_user($id)
    {
        $sql2 = $this->pdo->prepare("update {$this->tbl} set status = '0' WHERE id='$id'");
        $sql2->execute();
    }

    public function delete_user($id)
    {
        $sql3 = $this->pdo->prepare("delete from {$this->tbl} where id='$id'");
        $sql3->execute();
    }

    public function realtime()
    {
        $time_query = $this->pdo->prepare('SELECT pdate(NOW()) ');
        $time_query->execute();
        $time = $time_query->fetch(PDO::FETCH_ASSOC);
        return $time;
    }

    public function insert_user($data, $filds)
    {
        if (is_array($data)) {
            $names = "'" . implode("','", $data) . "'";
            $filds = implode(",", $filds);
            $sql = $this->pdo->prepare("INSERT INTO {$this->tbl} ($filds) VALUES ($names)");
            $sql->execute();
        }
    }
}