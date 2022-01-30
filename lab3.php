<?php 
// ----------------Task 1 -----------------------

// $n = readline();
// $sum = 0;

// for($i = 0; $i < $n; $i++) {
//     $sum += readline();
// }
// $average = $sum / $n;

// echo "The average value is: $average";

// ----------------Task 2 -----------------------

// $n = readline();
// $partSum = 0;

// for($i = 1; $i <= $n; $i++) {    
//     $partSum += (1 / $i);
// }

// echo round($partSum, 2);

// ----------------Task 3 -----------------------


// $positive = 0;
// $negative = 0;
// $array = array();

// while(true) {

//     $number = readline();
//     $array[] = $number;

//     if($number == 0) {
//         foreach($array as $arr) {
//             if($arr > 0) {
//                 $positive += $arr;
//             }
//             if($arr < 0) {
//                 $negative += $arr;
//             } 
//         }
//         echo "Positive values: $positive, and negative values: $negative"; 
//         break;
//     }
// }

// ----------------Task 6 -----------------------

// NOT FINISHED YET

// $num = readline("Enter the number\n");
// $array = array();
// $max = 0;

// for($i = 0; $i < $num; $i++) {
//   $array[] = readline(); 
// }

// $max = $array[0];

//     for($i = 2; $i < count($array); ++$i) {

//       if($array[$i] > $max) {
//         $max = $array[$i];
//         echo "ASC";
//         break;
        
//       }
//       elseif($array[$i] < $max) {
//         $max = $array[$i];
//         echo "DESC";
//         break;
        

//       }
//       else{
//         echo "Neither";
//         break;
//       }
//     }
  
//     NOT FINISHED YET

// ----------------Task 7 -----------------------

// $num = readline("Enter the number\n");
// $array = array();

// for($i = 0; $i < $num; $i++) {
//   $array[] = readline(); 
// }

// $max = max($array); 
// $index = array_search($max,$array);
// $firstMax = $array[$index];
// array_splice($array,$index,1)."<br>";

// $max = max($array);
// $index = array_search($max,$array);
// $secondMax = $array[$index];

// echo "The two largest numbers are $firstMax and $secondMax<br>";