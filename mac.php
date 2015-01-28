<?php

class Mac {
  public $sinif,
          $kod,
          $lig,
          $saat,
          $mbs,
          $ev,
          $konuk,
          $toplamsayi,
          $handikapiyev,
          $handikapmsev,
          $handikapiykonuk,
          $handikapmskonuk,
          $macsonucu = array(),
          $ilkyarisonucu = array(),
          $ilkyarimacsonucu = array(),
          $ciftesans = array(),
          $handikap = array(),
          $gol15 = array(),
          $gol15ilkyari = array(),
          $gol25 = array(),
          $gol35 = array(),
          $karsilikli = array(),
          $toplamgol = array();

  public function setSinif($val) {
    $this->sinif = $val;
  }

  public function setLig($val) {
    $this->lig = $val;
  }

  public function setKod($val) {
    $this->kod = $val;
  }

  public function setHandikapiyEv($val) {
    $this->handikapiy = $val;
  }

  public function setHandikapmsEv($val) {
    $this->handikapms = $val;
  }

  public function setHandikapiyKonuk($val) {
    $this->handikapiy = $val;
  }

  public function setHandikapmsKonuk($val) {
    $this->handikapms = $val;
  }

  public function setSaat($val) {
    $this->saat = $val;
  }

  public function setMbs($val) {
    $this->mbs = $val;
  }

  public function setEv($val) {
    $this->ev = $val;
  }

  public function setKonuk($val) {
    $this->konuk = $val;
  }

  public function setToplansayi($val) {
    $this->toplamsayi = $val;
  }

  public function setMacSonucu($bir, $sifir, $iki) {
    $this->macsonucu['1'] = $bir;
    $this->macsonucu['0'] = $sifir;
    $this->macsonucu['2'] = $iki;
  }

  public function setIlkyariSonucu($bir, $sifir, $iki) {
    $this->ilkyarisonucu['1'] = $bir;
    $this->ilkyarisonucu['0'] = $sifir;
    $this->ilkyarisonucu['2'] = $iki;
  }

  public function setIlkyariMacSonucu($birbir, $sifirbir, $ikibir, $birsifir, $sifirsifir, $ikisifir, $biriki, $sifiriki, $ikiiki) {
    $this->ilkyarimacsonucu['1/1'] = $birbir;
    $this->ilkyarimacsonucu['0/1'] = $sifirbir;
    $this->ilkyarimacsonucu['2/1'] = $ikibir;
    $this->ilkyarimacsonucu['1/0'] = $birsifir;
    $this->ilkyarimacsonucu['0/0'] = $sifirsifir;
    $this->ilkyarimacsonucu['2/0'] = $ikisifir;
    $this->ilkyarimacsonucu['1/2'] = $biriki;
    $this->ilkyarimacsonucu['0/2'] = $sifiriki;
    $this->ilkyarimacsonucu['2/2'] = $ikiiki;
    
  }

  public function setCifteSans($birsifir, $biriki, $ikisifir) {
    $this->ciftesans['10'] = $birsifir;
    $this->ciftesans['12'] = $biriki;
    $this->ciftesans['20'] = $ikisifir;
  }

  public function setHandikap($bir, $sifir, $iki) {
    $this->handikap['1'] = $bir;
    $this->handikap['0'] = $sifir;
    $this->handikap['2'] = $iki;
  }

  public function setGol15($alt, $üst) {
    $this->gol15['alt'] = $alt;
    $this->gol15['ust'] = $üst;
  }

  public function setGol15Ilkyari($alt, $üst) {
    $this->gol15ilkyari['alt'] = $alt;
    $this->gol15ilkyari['ust'] = $üst;
  }

  public function setGol25($alt, $üst) {
    $this->gol25['alt'] = $alt;
    $this->gol25['ust'] = $üst;
  }

  public function setGol35($alt, $üst) {
    $this->gol35['alt'] = $alt;
    $this->gol35['ust'] = $üst;
  }

  public function setKarsilikli($var, $yok) {
    $this->karsilikli['var'] = $var;
    $this->karsilikli['yok'] = $yok;
  }

  public function setToplamGol($sifirbir, $ikiuc, $dortalti, $yedi) {
    $this->toplamgol['0-1'] = $sifirbir;
    $this->toplamgol['2-3'] = $ikiuc;
    $this->toplamgol['4-6'] = $dortalti;
    $this->toplamgol['7'] = $yedi;
  }

}

?>