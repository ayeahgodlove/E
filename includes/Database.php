<?php

/*
 *  END OF YEAR PROJECT 2018/2019
 */

class Database {
    private $host;
    private $user;
    private $password;
    private $database;
    
    function __construct($filename, $new_host,$new_user,$new_password,$new_database)
    {
        if (is_file($filename)) {
            include 'vars.php ';
        } else {
            throw new Exception("Error!");
        }

        $this->host = $new_host;
        $this->user = $new_user;
        $this->password = $new_password;
        $this->database = $new_database;
        $this->connect();
        
    }
    private function connect()
    {
        //connect to the server
        if (!mysql_connect($this->host, $this->user, $this->password)) {
            throw new Exception("Error 20: not connected to the server!.");
        }
        
      //Select database
        if (!mysql_select_db($this->database)) {
            throw new Exception("Error 105: No database selected!");
        }
    }
    
    function close()
    {
        mysql_close();
    }
}

?>