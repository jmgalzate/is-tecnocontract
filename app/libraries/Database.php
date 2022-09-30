<?php

/*
* PDO Database Class
* Connect to dabatabase
* Create prepared statements
* Bind values
* Return rows and results
*/

class Database
{
    private String $host = DB_HOST;
    private String $user = DB_USER;
    private String $pass = DB_PASS;
    private String $dbname = DB_DBNAME;
    private String $charset = DB_CHARSET;

    private $stmt;
    private string $error;
    private PDO $dbh;

    public function __construct()
    {
        //Set DSN

        $dsn = 'mysql:host=' . $this->host . '; dbname=' . $this->dbname;
        $options = [
            // PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $this->charset"
        ];

        //Create a PDO instance
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    //Prepare statement with query
    public function query($sql): void
    {
        $this->stmt = $this->dbh->prepare($sql);
    }

    public function bind($param, $value, $type = NULL): void
    {
        if (is_null($type)) {
            $type = match (true) {
                is_int($value) => PDO::PARAM_INT,
                is_bool($value) => PDO::PARAM_BOOL,
                is_null($value) => PDO::PARAM_NULL,
                default => PDO::PARAM_STR,
            };
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    // Execute prepare statement
    public function execute()
    {
        return $this->stmt->execute();
    }

    // Get results set as array of objects
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Get single record as object
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    //
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }

    function closeDatabase(): void
    {
        $this->dbh = null;
    }

    public function arraysql($result): array
    {
        $arrayresult = array();
        foreach ($result as $key => $value) {
            $arrayresult = $value;
        }
        return $arrayresult;
    }
}
