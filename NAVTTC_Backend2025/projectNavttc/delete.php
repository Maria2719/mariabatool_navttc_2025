<?php
require_once 'classes/Database.php';
require_once 'classes/Student.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = (int) $_POST['id'];
    $conn = Database::connect();

    if (Student::delete($conn, $id)) {
        header("Location: index.php?message=Student+deleted+successfully");
        exit;
    } else {
        echo "Failed to delete student.";
    }

    Database::disconnect($conn);
} else {
    header("Location: index.php");
    exit;
}
