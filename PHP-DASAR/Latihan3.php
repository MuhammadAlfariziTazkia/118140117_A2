<?php 	
	function cekPrima($angka){
		$prima  = true;
		if($angka > 2){
			for($i = 2; $i< $angka; $i++){
				if($angka % $i == 0){
					$prima = false;
				}
			}
		}else if($angka <2){
			$prima = false;
		}
		if($prima){
			return "Bilangan Prima";
		}else{
			return "Bukan Bilangan Prima";
		}
	}
	for($i = 1; $i <=50 ; $i++){
		echo "Bilangan " .$i;
		echo " " .cekPrima($i) ."<br>";
	}
?>