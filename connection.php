<?php

        //database connection
        $connection =  new mysqli('localhost', 'root', '', 'db_pkmc_apra');
       // print_r($connection);
       if ($connection->connect_errno !=0)
       {
        die('Database Connection Error:'. $connection->connect_error);
       }

?>