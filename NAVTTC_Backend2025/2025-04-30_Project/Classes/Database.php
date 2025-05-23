<?php

class Database
{

    public static function getDB( ){
       $hostname = 'localhost';
       $dbuser = "root";
       $dbpass = '';
       $dbname = 'sms';
    
       return mysqli_connect( $hostname , $dbuser, $dbpass , $dbname );   
        
    }
}



?>