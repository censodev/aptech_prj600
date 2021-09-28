<?php

abstract class Model
{
    private PDO $_pdo;
    private string $_key;
    private string $_tbl;

    protected abstract function getTable(): string;

    protected function getKey(): string
    {
        return 'id';
    }

    public function __construct()
    {
        $this->_key = $this->getKey();
        $this->_tbl = $this->getTable();
        try {
            $dsn = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME;
            $this->_pdo = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
        } catch (PDOException $e) {
            echo "No connection to Database" . $e->getMessage();
        }
    }

    public function findAll(array $match_cond = null): array|false
    {
        $sql = "select * from $this->_tbl ";
        $match_query = 'where 1=1 ';
        if (isset($match_cond)) {
            foreach ($match_cond as $k => $v) {
                $match_query .= "and $k = ? ";
            }
        }
        $sql .= $match_query;
        $stmt = $this->_pdo->prepare($sql);
        $params = [];
        if (isset($match_cond)) {
            $params = array_merge($params, array_values($match_cond));
        }
        $stmt->execute(empty($params) ? null : $params);
        return $stmt->fetchAll();
    }

    public function findById($id): mixed
    {
        $sql = "select * from $this->_tbl where $this->_key = ? limit 1";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function delete($id)
    {
        $sql = "delete from $this->_tbl where $this->_key = ?";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->execute([$id]);
    }

    public function insert($data)
    {
        $data_keys = array_keys($data);
        $data_values = array_values($data);
        $keys = implode(',', $data_keys);
        $data_alias_keys = array_map(function () {
            return "?";
        }, $data_keys);
        $alias_keys = implode(',', $data_alias_keys);

        $sql = "insert into $this->_tbl ($keys) values ($alias_keys)";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->execute($data_values);
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

        $sql = "update $this->_tbl set $set WHERE $this->_key = ?";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->execute(array_merge($data_values, [$id]));
    }
}
