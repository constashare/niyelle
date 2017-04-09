<?php
	include ('math.php');
	
	
	
	function randomNumber($length) {
		$result = '';
		$characters = "0123456789";
		for($i = 0; $i < $length; $i++) {
			$result .= $characters[mt_rand(0, strlen($characters) - 1)];
		}
		
		return $result;
	}
	
	$ran = randomNumber(18);
	
	$my_id = 234608763428935; // get the ID from MySQL for example;
	$base62 = Math::to_base($ran, 62);
	echo '<br>';
	echo $ran;
	echo '<br>';
	echo $base62;
	

