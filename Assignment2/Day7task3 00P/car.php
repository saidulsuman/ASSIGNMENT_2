<?php

class Connection{

 public $conn;

 public function __construct()
 {
     $this->conn = new PDO("mysql:host=localhost;dbname=suman","root" ,"");

 }

 public function insertAdd($Name,$Model,$Price)
 {

   try{
         $statement = $this->conn->prepare("INSERT INTO car (Name,Model,Price) VALUES (:Name,:Model,:Price)");

     $statement->execute(
     array(

         ':Name' => $Name,
         ':Model' => $Model,
         'Price' => $Price
     )
     );
       echo "inserted";
   }
     catch(\Exception $e)
     {
       echo "errror: ".$e->getMassage();
   }
 }

}



?>
