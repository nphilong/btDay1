<?php
$arrs = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");

foreach ($arrs As $key => $value){
    echo "Thu do cua $key  la $value";
    echo "<br>";
}


?>


<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];
//$arrs_sum = array_sum($arrs);
//echo $arrs_sum;
$sum = 0 ;
$mitple = 1;
$sub = 0;
$div = 1;
foreach ($arrs as $value){
    $sum += $value;
    $mitple *= $value;
    $sub -= $value;
    $div /= $value;
}
echo " $sum , $mitple ; $sub , $div";
echo "<br>";

$arrs1 = [2, 5, 2];
foreach ($arrs1 as $value){
    $sum += $value;
    $mitple *= $value;
    $sub -= $value;
    $div /= $value;
}
echo " $sum , $mitple ; $sub , $div";
echo "<br>";

$arrs2 = [22, 5, -1];
foreach ($arrs2 as $value){
    $sum += $value;
    $mitple *= $value;
    $sub -= $value;
    $div /= $value;
}
echo " $sum , $mitple ; $sub , $div";
echo "<br>";

$arrs3 = [1, 5, -1];
foreach ($arrs2 as $value){
    $sum += $value;
    $mitple *= $value;
    $sub -= $value;
    $div /= $value;
}
echo " $sum , $mitple ; $sub , $div";

echo "<br>";

?>

<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];
$elementA = $a['b']['o']['b'];
echo "$elementA";
echo "<br>";

$elementb = $a['a']['c'];
echo "$elementb";
$var1 = $a['a'];
echo "<br>";

echo '<pre>';
print_r($var1);

echo "<br>";

?>

<?php
$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
foreach ($array as $key => $value){
    if ($value % 5 == 0 && $value > 99){
        echo "$value,";
    }
    else {
        continue;
    }
}
?>

<?php
$array = array(1, 2, 3, 4, 5);
unset ($array[2]);
echo "<pre>";
print_r($array);
echo "</pre>";
?>

<?php
$keys = array("field1"=>"first", "field2"=>"second", "field3"=>"third"
);
$values = array("field1value"=>"dinosaur", "field2value"=>"pig", "field3value"=>"platypus"
);
array_flip()

?>
<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

?>