
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
function tentukan_deret_aritmatika($arr) {
// kode di sini
			
			
			if($arr[2]-$arr[1]==$arr[3]-$arr[2] ){
				echo"True";
			}else{
				echo"False";
			}
		
			
	}

// TEST CASES
tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo"<br>";
tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo"<br>";
tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo"<br>";
tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo"<br>";
tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>
</body>
</html>