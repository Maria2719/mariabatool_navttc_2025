<?php
// $vegetables = [   'potato' => '5kg' , 'Onion' => '2kg' , 'Lemon' => '1kg'    ]

// Write foreach look to loop over this array and displays result 

// weight : 5kg
// weight : 2kg
// weight : 1kg

$vegetables = [   'potato' => '5kg' , 'Onion' => '2kg' , 'Lemon' => '1kg' ];

 foreach ( $vegetables as $weight ) { 
           echo "weight: " . $weight. "<br>";
 }  ?> 
