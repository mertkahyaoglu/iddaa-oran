<?php header('Content-Type: text/html; charset=utf-8');
include "bulten.php";
$bulten = Bulten::getBulten('20-23.01.2017');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>İddaa Oran Test</title>
		<style>
			body { margin: 0; }
			table { border-collapse: collapse;width: 100%; }
			th, td { text-align: left;padding: 8px; }
			tr:nth-child(even){background-color: #f2f2f2; }
			th { background-color: #4CAF50;color: white; }
		</style>
	</head>
	<body>
		<table>
			<thead>
				<tr>
					<th>Tarih</th>
					<th>Maç Kodu</th>
					<th>Ev Sahibi</th>
					<th>Konuk</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($bulten as $mac): ?>
					<tr>
						<td><?=$mac->tarih?></td>
						<td><?=$mac->kod?></td>
						<td><?=$mac->ev?></td>
						<td><?=$mac->konuk?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</body>
</html>
