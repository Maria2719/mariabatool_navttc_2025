<?php

require 'class/loopArray.php';

$allMonths = ["January", "February", "March", "April", "May", "June"];
$monthToDelete = "March";

$handler = new MonthHandler($allMonths);
echo "Before removing:<br>";
$handler->displayMonths();

$handler->removeMonth($monthToDelete);
echo "<br>After removing '$monthToDelete':<br>";
$handler->displayMonths();


?>



