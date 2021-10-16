<?php

class MasterNation extends Model
{
    protected function getTable(): string
    {
        return 'master_nation';
    }
    public static function getNationByID($id): string
    {
        if($id == NULL) return ' Không có thông tin ';
        $sql = "select name
                from master_nation
                where id= ? limit 1";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();

    } 
}