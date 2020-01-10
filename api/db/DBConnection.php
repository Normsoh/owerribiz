<?php
class DBConnection extends PDO {
    private $host = 'localhost';
    private $dbname = 'owerribizforum';
    private $username = 'root';
    private $password = '';

    public function __construct(){
        try {
            $dsn = "mysql:host=".$this->host.";dbname=".$this->dbname;

            parent::__construct($dsn, $this->username, $this->password);
            
        } catch(Exception $e) {
            echo "Oops, an error occured! ".$e->getMessage();
            echo "<br>";
        }
    }
}
?>
