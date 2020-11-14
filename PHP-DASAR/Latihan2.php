<?php 	
	$data= ["lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat"];
	echo "Berikut merupakan data sebelum di sort <br>";
	for($i=0;$i<count($data);$i++){
		echo $data[$i] ."<br>";
	}
	for($i=0 ; $i<count($data) ; $i++){
		for($j=0 ; $j<count($data)-1 ; $j++){
			if($data[$j]>$data[$j+1]){
				$temp = $data[$j];
				$data[$j] = $data[$j+1];
				$data[$j+1] = $temp;
			}
		}
	}
	echo "<br>Berikut merupakan data setelah di sort <br>";
	for($i=0;$i<count($data);$i++){
		echo $data[$i] ."<br>";
	}
	//s/ort($data);
	//for($i=0;$i<7;$i++){
	//	echo $data[$i];
	//}/
?>