<?php
include "init.php";

class Bulten {

  private $parser;

  public function __construct()
  {
      $this->parser = new Parser();
  }

  private function fetchHTML($url)
  {
    $html = file_get_contents($url);
    return mb_convert_encoding($html, 'HTML-ENTITIES', "UTF-8");
  }

  public function getCurrentFixture()
  {
    $html = $this->fetchHTML('https://www.iddaa.com/iddaa-programi-pdf-indir/');
    $date = $this->parser->getLatestFixtureDate($html);
    return $this->getFixture($date);
  }

  public function getFixture($date)
  {
    $html = $this->fetchHTML('http://cdn.iddaa.com/iddaa/bulten/next/'.$date.'.html');
  	return $this->parser->getData($html);
  }

}

?>
