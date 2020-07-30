
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
function tukar_besar_kecil($string){

for($i=0;$i<strlen($string);$i++){
	if(ctype_lower($string[$i])){
		echo strtoupper($string[$i]);
	}
	else{
		echo strtolower($string[$i]);
	}
}
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo"<br>";
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo"<br>";
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo"<br>";
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo"<br>";
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>
</body>
</html>