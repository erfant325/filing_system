<?php
include_once "../../model/config/config.php";
class file_code_search extends connect
{
    public function code_search($id,$tbl)
    {
        $que = $this->pdo->prepare("select * from {$tbl} where id='$id'");
        $que->execute();
        $res = $que->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
}
