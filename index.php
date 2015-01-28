<?php header('Content-Type: text/html; charset=utf-8');
include "bulten.php";
$bulten = Bulten::getBulten('23-26.01.2015');
$tekmac = $bulten['387'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title></title>
</head>
<body>
<?php
	foreach ($bulten as $mac) {
		echo "Maç Kodu:".$mac->kod."<br>";
		echo "Ev Sahibi:".$mac->ev."<br>";
		echo "Konuk:".$mac->konuk."<br><br>";
	}
	echo "Maç ".$tekmac->kod.": ".$tekmac->ev." - ".$tekmac->konuk;
?>
</body>
</html>