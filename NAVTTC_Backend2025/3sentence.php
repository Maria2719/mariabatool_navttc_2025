<?php

/* 3.Create variables: $studentName, $courseName, $batchYear.
// Write a sentence like: 
// Welcome Abrar to CIT, batch 2025
 */

$studentName = "Maria Batool";
$courseName = "CIT";
$batchYear = "Batch 2025";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASK 3</title>
</head>
    <body>
        <h1>TASK 3</h1>
            <div>
            
                <h3> Welcome <?= $studentName ?> to <?= $courseName ?> , <?= $batchYear ?> </h3>
            
            </div>
    </body>
    </html>