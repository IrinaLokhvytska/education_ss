<?php

class Database
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct($dsn, $user, $password)
    {
        $this->pdo = new PDO($dsn, $user, $password);
    }

    public function findAll($table, $where = null)
    {
        $sql = "SELECT * FROM `{$table}`";
        if ($where) {
            $sql .= ' WHERE ' . $where;
        }

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(empty($result)){
            throw new Exception('The database is empty');
        }

        return $result;
    }

}