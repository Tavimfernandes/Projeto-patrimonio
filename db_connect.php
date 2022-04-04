<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	header("Location: _login.php");
}
//$conn->close();


define('DB_HOST',$servername);
define('DB_NAME',$dbname);
define('DB_USER',$username);
define('DB_PASS',$password);


class DB {
    private static $instance;
    private static function getInstance(){
        if(!isset(self::$instance)){
            try{
                self::$instance = new PDO('mysql:host='. DB_HOST. ';dbname='. DB_NAME , DB_USER , DB_PASS);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
        }
        return self::$instance;
    }
    
    public function prepare($sql) {
        return self::getInstance()->prepare($sql);
        
    }
}
?>