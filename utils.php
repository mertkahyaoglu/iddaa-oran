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
