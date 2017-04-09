<?php
	function nice_number($n) {
		// first strip any formatting;
		$n = (0+str_replace(",", "", $n));

		// is this a number?
		if (!is_numeric($n)) return false;

		// now filter it;
		if ($n > 1000000000000) return round(($n/1000000000000), 2).' t';
		elseif ($n > 1000000000) return round(($n/1000000000), 2).' b';
		elseif ($n > 1000000) return round(($n/1000000), 2).' m';
		elseif ($n > 1000) return round(($n/1000), 2).' k';

		return number_format($n);
	}



?>