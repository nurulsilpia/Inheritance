<?php
class Mobil{
	public $nama, $merk, $warna,
			$kecepatanMaksimal,
			$jumlahPenumpang;

	public function SelfDriving(){
		return "Aktifkan Kemudi Otomatis";
	}
}
class MobilMahal extends Mobil{
	public $autoSelfDriving = false;

	public function RunSelfDriving(){
		$this->autoSelfDriving = true;
		return "Self-Driving Di Aktifkan";
	}
}

$mobil1 = new MobilMahal();
echo $mobil1->SelfDriving();
echo "<br>";
echo $mobil1->RunSelfDriving();