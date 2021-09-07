<?php

class Database
{
    private PDO $_pdo;
    private string $_key;
    private string $_tbl;

    public function __construct(string $table, string $key = 'id')
    {
        $this->_key = $key;
        $this->_tbl = $table;
        try {
            $dsn = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME;
            $this->_pdo = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
        } catch (PDOException $e) {
            echo "No connection to Database" . $e->getMessage();
        }
    }

    public function findAll(): array
    {
        $sql = "select * from :tbl";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->bindParam(':tbl', $this->_tbl);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findById($id): array|null
    {
        $sql = "select * from :tbl where :key = :id";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->bindParam(':tbl', $this->_tbl);
        $stmt->bindParam(':key', $this->_key);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $rs = $stmt->fetchAll();
        return $rs[0] ?? null;
    }

    public function delete($id)
    {
        $sql = "delete from :tbl where :key = :id";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->bindParam(':tbl', $this->_tbl);
        $stmt->bindParam(':key', $this->_key);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function insert($data)
    {
        $data_keys = array_keys($data);
        $keys = implode(',', $data_keys);
        $data_alias_keys_ = array_map(function ($v) {
            return ":$v";
        }, $data_keys);
        $alias_keys = implode(',', $data_alias_keys_);

        $sql = "insert into :tbl (:keys) values (:alias_keys)";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->bindParam(':tbl', $this->_tbl);
        $stmt->bindParam(':keys', $keys);
        $stmt->bindParam(':alias_keys', $alias_keys);
        $stmt->execute($data);
    }

    public function update($id, $data)
    {
        $data_keys = array_keys($data);
        $data_values = array_values($data);
        $set = '';
        foreach ($data_keys as $data_key) {
            $set .= "$data_key=?,";
        }
        $set = substr($set, 0, -1);

        $sql = "update :tbl set :set WHERE :key = :id";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->bindParam(':tbl', $this->_tbl);
        $stmt->bindParam(':key', $this->_key);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':set', $set);
        $stmt->execute($data_values);
    }
}
