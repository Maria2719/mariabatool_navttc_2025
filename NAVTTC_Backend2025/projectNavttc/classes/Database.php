<?php
class Database {
    private static $host = "localhost";
    private static $user = "root";
    private static $password = ""; // adjust if needed
    private static $dbname = "phpoop";

    public static function connect() {
        $conn = mysqli_connect(self::$host, self::$user, self::$password, self::$dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }

    public static function disconnect($conn) {
        mysqli_close($conn);
    }
}
?>
