<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body> <?php

function cari_mean($arr){

//MEDIAN
$c=count($arr);
sort($arr);
echo "<br>urutan baru:";
print_r($arr);
$d=$c/2;
if(gettype($d)=='double'){
    $d=floor($d);
    $med=$arr[$d];
}else{
    $d=floor($d);
    $d1=round($d);
    $med=($arr[$d]+$arr[$d1])/2;
}
echo "<br>median : $med <br><br>";


}

cari_mean([1, 2, 3, 4, 5]); // 3
cari_mean([3, 5, 7, 5, 3]); // 5
cari_mean([6, 5, 4, 7, 3]); // 5
cari_mean([1, 3, 3]); // 2
cari_mean([7, 7, 7, 7, 7]); // 7

?>
</body>
</html>
