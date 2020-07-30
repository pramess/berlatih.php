<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body> 
<?php
function papan_catur($angka) {
// tulis kode di sini

 for($n = 0; $n<$angka; $n++) {
  for($m = 0; $m<=($angka*2)-2; $m++) {
  if(($n % 2 == 0 && $m % 2 == 0) || ($n % 2 == 1 && $m % 2 == 1)){
    echo"#";
  }
  else{

    echo"&nbsp";
  }
}
 echo"<br>";
 }
}
echo " Papan Catur 4 :";
echo "<br>";
papan_catur(4);
echo "<br>";
echo " Papan Catur 8 :";
echo "<br>";
papan_catur(8);
echo "<br>";
echo " Papan Catur 5 :";
echo "<br>";
papan_catur(5);
echo "<br>";


 
?>
</body>
</html>