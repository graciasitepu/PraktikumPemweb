<?php

function romawiNum ($bil){

    $result = '';

    $index = array(
        'M' => 1000,
        'CM' => 900, 
        'D' => 500, 
        'CD' => 400, 
        'C' => 100, 
        'XC' => 90, 
        'L' => 50, 
        'XL' => 40, 
        'X' => 10, 
        'IX' => 9, 
        'V' => 5, 
        'IV' => 4, 
        'I' => 1
    );

    foreach ($index as $romawi => $value) {
        $cek = intval($bil/$value);
        
        $result .= str_repeat($romawi, $cek);

        $bil %= $value;
    }
    return $result;
}
?>

<!-- <?php

echo romawiNum(58);
echo "<br>";
echo romawiNum(1994);

?> -->

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KONVERSI ROMAWI - Gracia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
		<form action="#" method="POST" align="center">
		Number : <input type="number" name="angka"><br><br>
		<button type="submit">Konversi</button>
		<h2>Romawi : <?php error_reporting(0); echo romawiNum($_POST["angka"]); ?><br></h2>
		</form>
</body>
</html>