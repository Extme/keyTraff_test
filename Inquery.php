<?php

include_once('DB_connectionClass.php');

class Inquery{
    
    
   public static function inquery0(){
       
       $db_connection = DB_connection::getInstance();
       
       $inquery0 = $db_connection->query("SELECT
                requests.id, offers.name, requests.price, requests.count, operators.fio FROM offers
                INNER JOIN requests
                ON offers.id = requests.offer_id
                INNER JOIN operators
                ON operators.id = requests.operator_id
                WHERE requests.count > 2 AND requests.operator_id = 10 OR requests.operator_id = 12");
       
        if (!$inquery0) echo 'Connection error';
        
        $inquery0 = $inquery0->fetchAll();
        
        return $inquery0;
   }
    
   
        
   public static function inquery1(){
       
       
       $db_connection = DB_connection::getInstance();
       
                
       $inquery1 = $db_connection->query("SELECT
                offers.name, requests.price, requests.count FROM offers INNER JOIN requests
                ON offers.id = requests.offer_id 
                GROUP by offers.name");
       
       
        if (!$inquery1) echo 'Connection error';
              
        $inquery1 = $inquery1->fetchAll();
        
        return $inquery1;  
   }  
}

?>

