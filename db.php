<?php

class CreateDb
{
        protected $servername;
        protected $username;
        protected $password;
        protected $dbname;
        protected $tablename;
        public $con;


    public function __construct(
        $dbname = "Shopping6333",
        $tablename = "customertb",
        $servername = "https://west1-phpmyadmin.dreamhost.com/",
        $username = "shopping6333",
        $password = "123456789"
    )
    {
      $this->dbname = $dbname;
      $this->tablename = $tablename;
      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;

        $this->con = mysqli_connect($servername, $username, $password);

        if (!$this->con){
            die("Connection error: " . mysqli_connect_error());
        }

        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            $sql = " CREATE TABLE IF NOT EXISTS $tablename
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             username VARCHAR (11) NOT NULL,
                             user_password VARCHAR (11),
                             email VARCHAR (100),
                             user_level INT (1)
                            );";

            if (!mysqli_query($this->con, $sql)){
                echo "Error creating table : " . mysqli_error($this->con);
            }

        }else{
            return false;
        }
    }

    public function getData(){
        $sql = "SELECT * FROM $this->tablename";
        $data = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($data) > 0){
            return $data;
        }
        else{
            echo "Empty table ";
        }
    }


   /* public function stockDec(){
       
        $sql = "UPDATE producttb SET product_stock = product_stock - 1 WHERE `id`= 2";
        $result=mysqli_query($this->con,$sql);
      
    } 
   */

}