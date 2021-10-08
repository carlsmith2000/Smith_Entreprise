<?php
class ConnectToBD
{
    private $host = 'localhost';
    private $dbname = 'smithentreprise';
    private $userName = 'root';
    private $password = '';

    function getConnection()
    {
        try {
            $dsn = ("mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset=utf8");
            $pdo = new PDO($dsn, $this->userName, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            return $pdo;
        } catch (PDOException $e) {
            die('Error : ' . $e->getMessage());
        }
    }
}