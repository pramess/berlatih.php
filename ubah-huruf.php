
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
	<?php
function ubah_huruf($string){
//kode di sini
	$abjad="abcdefghijklmnopqrstuvwxyz";
	$output="";
	for($i=0;$i<strlen($string);$i++){
		$position=strrpos($abjad,$string[$i]);
		$output.=substr($abjad,$position+1,1);
	}
	return $output;
}

// TEST CASES
echo "<br>" . ubah_huruf('wow'); // xpx
echo "<br>" . ubah_huruf('developer'); // efwfmpqfs
echo "<br>" . ubah_huruf('laravel'); // mbsbwfm
echo "<br>" . ubah_huruf('keren'); // lfsfo
echo "<br>" . ubah_huruf('semangat'); // tfnbohbu

?>
</body>
</html>