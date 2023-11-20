<?php
    namespace App\utils;
    class banco{
    protected $conn;
    private $server = "db-mysql";
    private $user = "root";
    private $pass = "root";
    private $mydb = "teste";

   function __construct()
    {
        $this->conectaBanco();
    } 

    public  function conectaBanco(){
        try {
            $this->conn = new \mysqli($this->server, $this->user, $this->pass, $this->mydb);
        } catch (\Throwable $th) {
           echo "Error".$th->getMessage();
        }
    }
}

