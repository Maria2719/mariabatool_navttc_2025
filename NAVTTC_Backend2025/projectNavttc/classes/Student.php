<?php 

class Student {
    public $id;
    public $name;
    public $email;
    public $contact;
    public $course;

    // CREATE - Insert a new student
    public static function create($conn, $name, $email, $contact, $course) {
        $query = "INSERT INTO students (name, email, contact, course) 
        VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, 'ssss', $name, $email, $contact, $course);
        return mysqli_stmt_execute($stmt);
    }

    // READ - Get all students
    public static function showAll($conn) {
        $query = "SELECT * FROM students ORDER BY id";
        $result = mysqli_query($conn, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    // READ - Get one student by ID
    public static function getById($conn, $id) {
        $query = "SELECT * FROM students WHERE id = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        return mysqli_fetch_assoc($result);
    }

    // UPDATE - Update a student's info
    public static function update($conn, $id, $name, $email, $contact, $course) {
        $query = "UPDATE students SET name = ?, email = ?, contact = ?, course = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, 'ssssi', $name, $email, $contact, $course, $id);
        return mysqli_stmt_execute($stmt);
    }

    // DELETE - Delete a student
    public static function delete($conn, $id) {
        $query = "DELETE FROM students WHERE id = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        return mysqli_stmt_execute($stmt);
    }
}
