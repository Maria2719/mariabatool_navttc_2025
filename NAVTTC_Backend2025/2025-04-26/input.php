<?php
$num1 = $_GET['a'];
$num2 = $_GET['b'];
?>


<form action=""  method="get">

    <input type="text" name="a">
    <input type="text" name="b">
    <input type="submit" value="Perform">

</form>



<h3>  Sum is <?= $num1+ $num2 ?> </h3>
<h3>  Difference is <?= $num1- $num2 ?> </h3>
<h3>  Product is <?= $num1 * $num2 ?> </h3>
<h3>  Quotient is <?= $num2 != 0 ? $num1 / $num2 : "Undefined (division by zero)" ?> </h3>




