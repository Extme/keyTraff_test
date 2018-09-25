<?php

include ('config.php');

try {

    $db_connect = new PDO($host, $db_user, $db_password);
    $db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS key_traff";
    $db_connect->exec($sql);
    $sql = "USE key_traff";
    
    $db_connect->exec($sql);
    
    $sql = "CREATE TABLE `offers` (
           `id` int(11) NOT NULL,
           `name` varchar(300) COLLATE utf8_bin NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;  ";
    
    $db_connect->exec($sql);
     
    $sql = " INSERT INTO `offers` (`id`, `name`) VALUES
             (1, 'шампунь'),
             (2, 'порошок'),
             (3, 'мыло'),
             (4, 'зубная паста'),
             (5, 'гель для душа'),
             (6, 'зубная щетка');";
      
    $db_connect->exec($sql);  
										
    $sql =  " CREATE TABLE `operators` (
              `id` int(11) NOT NULL,
              `name` varchar(300) COLLATE utf8_bin NOT NULL,
              `fio` varchar(300) COLLATE utf8_bin NOT NULL
              ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;";
    
    $db_connect->exec($sql);
    
    $sql = "  INSERT INTO `operators` (`id`, `name`, `fio`) VALUES
              (10, 'оператор1', 'Миронов Сергей Игоревич'),
              (12, 'оператор2', 'Шевченко Андрей Иванович'),
              (17, 'оператор3', 'Иванюк Андрей Петрович');"; 
                    
					
    $db_connect->exec($sql);
    
    $sql = "  CREATE TABLE `requests` (
              `id` int(11) NOT NULL,
              `offer_id` int(11) NOT NULL,
              `price` double NOT NULL,
              `count` int(11) NOT NULL,
              `operator_id` int(11) NOT NULL
              ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;";

   $db_connect->exec($sql);
   
   $sql = "  INSERT INTO `requests` (`id`, `offer_id`, `price`, `count`, `operator_id`) VALUES
            (1, 1, 50, 1, 10),
            (2, 2, 200, 4, 12),
            (3, 3, 400, 6, 12),
            (4, 5, 600, 3, 17),
            (5, 5, 600, 3, 17),
            (6, 3, 400, 6, 12),
            (7, 4, 1000, 10, 10),
            (8, 3, 400, 6, 12),
            (9, 1, 50, 1, 17);";
   
   $db_connect->exec($sql);
   
   $sql = "ALTER TABLE `offers`
            ADD PRIMARY KEY (`id`);
           
           ALTER TABLE `operators`
            ADD PRIMARY KEY (`id`);
           
           ALTER TABLE `requests`
            ADD PRIMARY KEY (`id`),
            ADD KEY `offer_id` (`offer_id`),
            ADD KEY `operator_id` (`operator_id`);
            
           ALTER TABLE `offers`
             MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
             
           ALTER TABLE `operators`
             MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
             
           ALTER TABLE `requests`
              MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4; 
              
           ALTER TABLE `requests`
              ADD CONSTRAINT `requests_ibfk_2` FOREIGN KEY (`operator_id`) REFERENCES `operators` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
              ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;";
   
   $db_connect->exec($sql);
    
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>