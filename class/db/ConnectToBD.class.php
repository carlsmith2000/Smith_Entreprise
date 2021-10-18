<?php
class ConnectToBD
{
    private $host = NULL;
    private $dbname = NULL;
    private $userName = NULL;
    private $password = NULL;
    private $pdo = NULL;

    function __construct()
    {
        $this->host = 'localhost';
        $this->dbname = 'smithentreprise';
        $this->userName = 'root';
        $this->host = '';
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

    public function isUserExist($username, $password)
    {
        $sql = 'SELECT * FROM MYSQL.USER WHERE USER LIKE ? AND password LIKE PASSWORD(?)';
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute([$username, $password]);
        $stmt->fetchAll();
        return ($stmt->rowCount() > 0);
    }
}