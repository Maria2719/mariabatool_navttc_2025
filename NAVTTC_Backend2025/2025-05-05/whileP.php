<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> while loop </h1>
  <?php

    $i=1;
    while($i<=5){

        echo $i.'<br/>';
        $i++;
    }

    $x = 0;
 
    while($x < 10) {
      $x++;
      if ($x == 4) {
        break;
      }
      echo "The number is: $x <br>";
      
    } 
    echo "<hr>";

    $p = 0;
    while ($p< 10){
        $p++;
        if($p == 7){
            continue;
        }
        echo " The p Number is  $p <br>";
    }
    echo "<hr>";

    $y = 11;
    while ($y <= 20){
        $y++;
        if ($y == 18){
            continue;
        }
        echo "The Count is $y <br>";
    }
    ?>
</form>
</body>
</html>



