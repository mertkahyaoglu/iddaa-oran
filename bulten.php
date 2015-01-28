<?php include "init.php";

class Bulten {

  public static function getBulten($date) {
  	$html = file_get_contents('http://cdn.iddaa.com/iddaa/bulten/next/'.$date.'.html');
    $html = mb_convert_encoding($html, 'HTML-ENTITIES', "UTF-8");
  	$parser = new Parser($html);
  	$data = $parser->getData();
  	return $data;
  }

}

?>
