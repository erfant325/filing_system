<?php
include_once "../../model/config/config.php";
class rent_commercial extends connect
{
    private $tbl = 'file_rent_commercial';

    public function last_id()
    {
        $query = $this->pdo->prepare('select * from '.$this->tbl.' order by id desc limit 1');
        $query->execute();
        $row = $query->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    public function insert_file($data, $filds)
    {
        if (is_array($data)) {
            $names = "'" . implode("','", $data) . "'";
            $filds = implode(",", $filds);
            $sql = $this->pdo->prepare("INSERT INTO {$this->tbl} ($filds) VALUES ($names)");
            $sql->execute();
        }
    }

    public function upload_photo($file, $name)
    {
        $filename = $file['name'];
        $array = explode(".", $filename);
        $ext = end($array);
        $new_name = $name . '-' . rand() . '.' . $ext;

        $from = $file['tmp_name'];
        $to = '../../public/image/' . $new_name;
        move_uploaded_file($from, $to);
        return $new_name;
    }

    public function list_files()
    {
        $sql = $this->pdo->prepare("select * from {$this->tbl} where status=1 order by id DESC ");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    public function user_creator_search($id)
    {
        $sql = $this->pdo->prepare("select * from admin_users where id={$id}");
        $sql->execute();
        $user_creator = $sql->fetch(PDO::FETCH_ASSOC);
        return $user_creator;
    }

    public function deleteData($id)
    {
        $sql = $this->pdo->prepare("delete from {$this->tbl} where id=:id");
        $sql->bindParam("id", $id, PDO::PARAM_INT);
        $sql->execute();
    }

    public function disable_row($id)
    {
        $sql = $this->pdo->prepare("update {$this->tbl} set status=0 WHERE id='$id'");
        $sql->execute();
    }

    public function showEditData($id)
    {
        $sql = $this->pdo->prepare("select * FROM {$this->tbl} where id='$id'");
        $sql->execute();
        $results = $sql->fetch(PDO::FETCH_ASSOC);
        return $results;
    }

    public function editData($filds, $data, $id)
    {
        foreach ($filds as $key => $val) {
            $txt[] = $val . "='" . $data[$val] . "'";
        }
        $query = implode(",", $txt);
        $sql = $this->pdo->prepare("update {$this->tbl} set " . $query . "WHERE id='$id'");
        $sql->execute();
    }

    public function pic_url_dumper($id)
    {
        $que = $this->pdo->prepare("select * from {$this->tbl} where id='$id'");
        $que->execute();
        $res = $que->fetch(PDO::FETCH_ASSOC);
        return $res;
    }

    public function realtime()
    {
        $time_query = $this->pdo->prepare('SELECT pdate(NOW()) ');
        $time_query->execute();
        $time = $time_query->fetch(PDO::FETCH_ASSOC);
        return $time;
    }

    public function filter($query)
    {
        $sql = $this->pdo->prepare($query);
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    public function list_disable_files()
    {
        $sql = $this->pdo->prepare("select * from {$this->tbl} where status=0 order by id DESC");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

}

