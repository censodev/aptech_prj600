<?php

class Vaccine extends Model
{
    protected function getTable(): string
    {
        return 'vaccines';
    }

    public function findAvailable(): bool|array
    {
        $sql = "select *
                from vaccines
                where doses > vaccines.consumed_doses and expire_date > now()";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}