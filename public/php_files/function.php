<?php
session_start();
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'iframe');
class DB_con
{
    private $path;

    function __construct()
    {
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $this->dbh = $con;

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }
    public function insert($name)
    {
        $ret = mysqli_query($this->dbh, "insert into iframes (name) values('$name')");
        $_SESSION['flash_message'] = "Succefully inserted";
        echo "<script>window.top.location.href = \"http://127.0.0.1:8081/test\";</script>";
    }
}
