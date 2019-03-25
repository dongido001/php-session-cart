<?php
namespace Helpers;

class DB
{
    private $host = "127.0.0.1";
    private $user = "root";
    private $password = "";
    private $database = "abc-hosting";
    public $db;

    public function __construct()
    {
        $this->db = $this->connectDB();
    }

    public function connectDB()
    {
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        return $conn;
    }

    public function runQuery($query)
    {
        $result = mysqli_query($this->db, $query);
		while ($row = mysqli_fetch_assoc($result)) 
		{
            $resultset[] = $row;
        }

		if (!empty($resultset)) 
		{
            return $resultset;
        }
    }

    public function numRows($query)
    {
        $result = mysqli_query($this->db, $query);
        $rowcount = mysqli_num_rows($result);

        return $rowcount;
    }
}
