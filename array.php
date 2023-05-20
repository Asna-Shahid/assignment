
<?php


$marks = array(
    array(150,350,  150),
    array(150,350,  150),
     array(350,350,  150),
     array(150,350,  150),
     array(150,450,  350),
     array(250,350,  150),
      array(150,850,  150),
      array(150,950,  150),
      array(150,350,  150),
      array(150,350,  150),
       array(150,350,  150),
       array(150,350,  150),
       array(150,350,  550),
       array(150,350,  150),
        array(150,350,  150),
      
);

$total = 15;

// sum for each subject for each student
for ($i = 0; $i < $total; $i++) {
    $sum = $marks[$i][0] + $marks[$i][1] + $marks[$i][2];
    echo "Marks for student " . ($i + 1) . " are: " . $sum . "\n";
    echo "<br>";
//array_sum($marks); 

}

// the average marks for each subject for the whole class

$engTotal = 0;
$mathsTotal = 0;
$scienceTotal = 0;

foreach ($marks as $result) {
    $engTotal += $result[0];
    $mathsTotal += $result[1];
    $scienceTotal += $result[2];
}

$engAverage = $engTotal / $total;
$mathsAverage = $mathsTotal / $total;
$scienceAverage = $scienceTotal / $total;
echo "<br>";
echo "Average Eng marks : " . $engAverage . "<br>";
echo "Average Maths marks : " . $mathsAverage . "<br>";
echo "Average Science marks : " . $scienceAverage . "<br>";

?>