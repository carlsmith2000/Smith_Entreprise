<?php
class ConnectToBD
{
    private $host = NULL;
    private $dbname = NULL;
    private $userName = NULL;
    private $password = NULL;
    private $pdo = NULL;

    function __construct($userName = 'root',  $password = '')
    {
        $this->host = 'localhost';
        $this->dbname = 'smithentreprise';
        $this->userName = $userName;
        $this->host = $password;
    }

    function getConnection()
    {
        $dsn = ("mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset=utf8");
        try {
            $this->pdo = new PDO($dsn, $this->userName, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            return $this->pdo;
        } catch (PDOException $e) {
            return false;
        }
    }
}