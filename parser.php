<?php

class Parser {

	private $html,
			$data;

	public function __construct($html) {
		$this->html = $html;
		$this->data = array();
	}

	public function getData() {
		$dom = new DOMDocument;
		$dom->loadHTML($this->html);
		$rows = $dom->getElementsByTagName('tr');
		foreach ($rows as $row) {
			$cols = $row->getElementsByTagName('td');
			if ($cols->length < 1) continue;
			$mac = new Mac();
			$mac->setSinif($cols->item(0)->nodeValue);
			$mac->setLig($cols->item(1)->nodeValue);
			$mac->setSaat($cols->item(2)->nodeValue);
			$mac->setKod($cols->item(3)->nodeValue);
			$mac->setMbs($cols->item(4)->nodeValue);
			$mac->setHandikapiyEv($cols->item(5)->nodeValue);
			$mac->setHandikapmsEv($cols->item(6)->nodeValue);
			$mac->setEv($cols->item(7)->nodeValue);
			$mac->setMacSonucu($cols->item(8)->nodeValue, $cols->item(9)->nodeValue, $cols->item(10)->nodeValue);
			$mac->setKonuk($cols->item(11)->nodeValue);
			$mac->setHandikapiyKonuk($cols->item(12)->nodeValue);
			$mac->setHandikapmsKonuk($cols->item(13)->nodeValue);
			$mac->setCifteSans($cols->item(14)->nodeValue, $cols->item(15)->nodeValue, $cols->item(16)->nodeValue);
			$mac->setHandikap($cols->item(17)->nodeValue, $cols->item(18)->nodeValue, $cols->item(19)->nodeValue);
			$mac->setGol15($cols->item(20)->nodeValue, $cols->item(21)->nodeValue);
			$mac->setGol25($cols->item(22)->nodeValue, $cols->item(23)->nodeValue);
			$mac->setGol35($cols->item(24)->nodeValue, $cols->item(25)->nodeValue);
			$mac->setToplansayi($cols->item(26)->nodeValue);
			$mac->setKarsilikli($cols->item(27)->nodeValue, $cols->item(28)->nodeValue);
			$mac->setToplamGol($cols->item(29)->nodeValue, $cols->item(30)->nodeValue, $cols->item(31)->nodeValue, $cols->item(32)->nodeValue);
			$mac->setIlkyariSonucu($cols->item(33)->nodeValue, $cols->item(34)->nodeValue, $cols->item(35)->nodeValue);
			$mac->setGol15Ilkyari($cols->item(36)->nodeValue, $cols->item(37)->nodeValue);
			$mac->setIlkyariMacSonucu($cols->item(38)->nodeValue, $cols->item(39)->nodeValue, $cols->item(40)->nodeValue,
									  $cols->item(41)->nodeValue, $cols->item(42)->nodeValue, $cols->item(43)->nodeValue,
									  $cols->item(44)->nodeValue, $cols->item(45)->nodeValue, $cols->item(46)->nodeValue);
			$this->data[$mac->kod] = $mac;
	  	}
	  	return $this->data;
	}

}
