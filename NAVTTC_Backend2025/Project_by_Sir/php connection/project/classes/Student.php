<?php 

class Student
{
    public static function getAll( $conn ){

        $sql = "SELECT * FROM students";
        $result =  mysqli_query( $conn ,    $sql );
        return  mysqli_fetch_all( $result , MYSQLI_ASSOC  );
    }
}