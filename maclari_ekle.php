<?php header('Content-Type: text/html; charset=utf-8');
include "ayarlar/bulten.php";
$fixture = new Bulten();
//$matches = $fixture->getFixture('20-23.01.2017');
$currentMatches = $fixture->getCurrentFixture();

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
					<th>İşlem Sonucu</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($currentMatches as $data): ?>
					<tr>
						<td><?$tarih=stringToNumberic($data->tarih);
    $tarih=date('Y-m-d', strtotime($tarih)); //Database formatı için
    $kod=$data->kod;
    $ms1=commaToDot($data->macsonucu[1]);
    $ms0=commaToDot($data->macsonucu[0]);
    $ms2=commaToDot($data->macsonucu[2]);
    $hiyev=commaToDot($data->handikapiyev);
    $hmsev=commaToDot($data->handikapmsev);
    $hiykonuk=commaToDot($data->handikapiykonuk);
    $hmskonuk=commaToDot($data->handikapmskonuk);
    $cs10=commaToDot($data->ciftesans[10]);
    $cs12=commaToDot($data->ciftesans[12]);
    $cs20=commaToDot($data->ciftesans[20]);
    $h1=commaToDot($data->handikap[1]);
    $h0=commaToDot($data->handikap[0]);
    $h2=commaToDot($data->handikap[2]);
    $ust15=commaToDot($data->gol15['ust']);
    $alt15=commaToDot($data->gol15['alt']);
    $ust25=commaToDot($data->gol25['ust']);
    $alt25=commaToDot($data->gol25['alt']);
    $ust35=commaToDot($data->gol35['ust']);
    $alt35=commaToDot($data->gol35['alt']);
    $kgvar=commaToDot($data->karsilikli['var']);
    $kgyok=commaToDot($data->karsilikli['var']);
    $t01=commaToDot($data->toplamgol['0-1']);
    $t23=commaToDot($data->toplamgol['2-3']);
    $t46=commaToDot($data->toplamgol['4-6']);
    $t7=commaToDot($data->toplamgol['7']);
    $iy1 = commaToDot($data->ilkyarisonucu['1']);
    $iy0 = commaToDot($data->ilkyarisonucu['0']);
    $iy2 = commaToDot($data->ilkyarisonucu['2']);
    $Iyms11 = commaToDot($data->ilkyarimacsonucu['1/1']);
    $Iyms01 = commaToDot($data->ilkyarimacsonucu['0/1']);
    $Iyms21 = commaToDot($data->ilkyarimacsonucu['2/1']);
    $Iyms10 = commaToDot($data->ilkyarimacsonucu['1/0']);
    $Iyms00 = commaToDot($data->ilkyarimacsonucu['0/0']);
    $Iyms20 = commaToDot($data->ilkyarimacsonucu['2/0']);
    $Iyms12 = commaToDot($data->ilkyarimacsonucu['1/2']);
    $Iyms02 = commaToDot($data->ilkyarimacsonucu['0/2']);
    $Iyms22 = commaToDot($data->ilkyarimacsonucu['2/2']);
    $iy15ust = commaToDot($data->gol15ilkyari['ust']);
    $iy15alt = commaToDot($data->gol15ilkyari['alt']);
    $toplamsayi = commaToDot($data->toplamsayi);
    $ev = mysqli_escape_string ($conn,$data->ev);
    $konuk = mysqli_escape_string ($conn,$data->konuk);
    $benzersizkod=cleanTrie($tarih.$kod);


$sql = "INSERT INTO `bulten_veri` (`bltn_tarih`, `bltn_macid`, `bltn_lig`, `bltn_saat`, `bltn_mbs`, `bltn_handikapiyev`, `bltn_handikapmsev`, `bltn_ev`, `bltn_macsonucu1`, `bltn_macsonucu0`, `bltn_macsonucu2`, `bltn_konuk`, `bltn_handikapiykonuk`, `bltn_handikapmskonuk`, `bltn_ciftsans10`, `bltn_ciftsans12`, `bltn_ciftcans20`, `bltn_handikap1`, `bltn_handikap0`, `bltn_handikap2`, `bltn_gol15alt`, `bltn_gol15ust`, `bltn_gol25alt`, `bltn_gol25ust`, `bltn_gol35alt`, `bltn_gol35ust`, `bltn_toplamsayi`, `bltn_kgvar`, `bltn_kgyok`, `bltn_toplamgol01`, `bltn_toplamgol23`, `bltn_toplamgol46`, `bltn_toplamgol7`, `bltn_ilkyarisonucu1`, `bltn_ilkyarisonucu0`, `bltn_ilkyarisonucu2`, `bltn_ilkyarisonucu15ust`, `bltn_ilkyarisonucu15alt`, `bltn_iymac11`, `bltn_iymac01`, `bltn_iymac21`, `bltn_iymac10`, `bltn_iymac00`, `bltn_iymac20`, `bltn_iymac12`, `bltn_iymac02`, `bltn_iymac22`,`bltn_benzersiz`,`bltn_sinif`)VALUES ('".$tarih."', '".$kod."', '".$data->lig."', '".$data->saat."', '".$data->mbs."', '".$hiyev."', '".$hmsev."', '".$ev."', '".$ms1."', '".$ms0."', '".$ms2."', '".$konuk."', '".$hiykonuk."', '".$hmskonuk."', '".$cs10."', '".$cs12."', '".$cs20."', '".$h1."', '".$h0."', '".$h2."', '".$alt15."', '".$ust15."', '".$alt25."', '".$ust25."', '".$alt35."', '".$ust35."', '".$toplamsayi."', '".$kgvar."', '".$kgyok."', '".$t01."', '".$t23."', '".$t46."', '".$t7."', '".$iy1."', '".$iy0."', '".$iy2."', '".$iy15ust."', '".$iy15alt."', '".$Iyms11."', '".$Iyms01."', '".$Iyms21."', '".$Iyms10."', '".$Iyms00."', '".$Iyms20."', '".$Iyms12."', '".$Iyms02."', '".$Iyms22."',".$benzersizkod.",'".$data->sinif."');";
            if ($conn->query($sql) === TRUE) {
              echo $kod." Kodlu maç eklendi";
                  } else {
                      echo "Hata: " . $sql . "<br>" . $conn->error;
                  }
?></td>
					</tr>
				<?php endforeach; $conn->close();?>
			</tbody>
		</table>
	</body>
</html>
