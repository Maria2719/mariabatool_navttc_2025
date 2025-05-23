<?php
require_once 'classes/Database.php';
require_once 'classes/Student.php';

$conn = Database::connect();
$students = Student::showAll($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Students</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: 20px auto; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
        th { background-color: #f0f0f0; }
        h2 { text-align: center; }
        .message {
            text-align: center;
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Student List</h2>

    <?php if (isset($_GET['message'])): ?>
        <p class="message"><?= htmlspecialchars($_GET['message']) ?></p>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Course</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($students)): ?>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?= htmlspecialchars($student['id']) ?></td>
                        <td><?= htmlspecialchars($student['name']) ?></td>
                        <td><?= htmlspecialchars($student['email']) ?></td>
                        <td><?= htmlspecialchars($student['contact']) ?></td>
                        <td><?= htmlspecialchars($student['course']) ?></td>
                        <td>
                            <form action="delete.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');">
                                <input type="hidden" name="id" value="<?= $student['id'] ?>">
                                <button type="submit" style="color:red;">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="6" style="text-align:center;">No students found.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>

<?php Database::disconnect($conn); ?>
