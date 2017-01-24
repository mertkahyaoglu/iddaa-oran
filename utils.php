<?php

function getMonthIndex($month) {
  switch ($month) {
    case 'ocak':
      return '01';
      break;
    case 'subat':
      return '02';
      break;
    case 'mart':
      return '03';
      break;
    case 'nisan':
      return '04';
      break;
    case 'mayis':
      return '05';
      break;
    case 'haziran':
      return '06';
      break;
    case 'temmuz':
      return '07';
      break;
    case 'agustos':
      return '08';
      break;
    case 'eylul':
      return '09';
      break;
    case 'ekim':
      return '10';
      break;
    case 'kasim':
      return '11';
      break;
    case 'aralik':
      return '12';
      break;
    default:
      break;
  }
}


function stringToNumberic($days){

    $daysNames = ['Pazartesi','Salı','Çarşamba','Perşembe','Cuma','Cumartesi','Pazar','rtesi'];

    $clearDay=str_replace($daysNames, '', $days);

    $num = array(
    "01", "02", "03", "04", "05", "06",
    "07", "08", "09", "10", "11", "12"
    );
    $mstring = array(
    "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran",
    "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"
    );

  $numbericDays = str_replace($mstring, $num, $clearDay);
  $days = str_replace('  ', '-' , trim($numbericDays));
  $daysLast = str_replace(' ', '-' , trim($days));

return $daysLast;
}

