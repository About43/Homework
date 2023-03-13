<?php
class Db
{
    private $pdo;
    private $log = [];
    private static $instance;

    public static function getInstance(): self
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function getConnection()
    {
        $host = DB_HOST;
        $dbName = DB_NAME;
        $dbUser = DB_USER;
        $dbPassword = DB_PASSWORD;

        if (!$this->pdo) {
            $this->pdo = new \PDO("localhost:host=$host;dbname=$dbName", $dbUser, $dbPassword);
        }

        return $this->pdo;
    }

    public function fetchAll(string $query, $_method, array $params = [])
    {
        $t = microtime(true);
        $prepared = $this->getConnection()->prepare($query);

        $ret = $prepared->execute($params);

        $data = $prepared->fetchAll(\PDO::FETCH_ASSOC);
        $affectedRows = $prepared->rowCount();

        return $data;
    }

    public function fetchOne(string $query, $_method, array $params = [])
    {
        $t = microtime(true);
        $prepared = $this->getConnection()->prepare($query);

        $ret = $prepared->execute($params);

        $data = $prepared->fetchAll(\PDO::FETCH_ASSOC);
        $affectedRows = $prepared->rowCount();

        return reset($data);
    }

    public function exec(string $query, $_method, array $params = []): int
    {
        $t = microtime(1);
        $pdo = $this->getConnection();
        $prepared = $pdo->prepare($query);

        $ret = $prepared->execute($params);

        $affectedRows = $prepared->rowCount();

        return $affectedRows;
    }

    public function lastInsertId()
    {
        return $this->getConnection()->lastInsertId();
    }
}
