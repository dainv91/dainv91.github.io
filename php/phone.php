<?php
	function l($msg) {
		echo '<pre>';
		var_dump($msg);
		echo '</pre>';
	}
	function get_phone_number($arr) {
		$phone_number = '';
		if (isset($arr)) {
			foreach($arr as $header => $value) {
				if ($header == 'x-up-calling-line-id') {
					$phone_number = $value;
					break;
				}
			}
		}
		return $phone_number;
	}
	
	l($_SERVER);
	echo '<br />';
	$a = apache_request_headers();
	l($a);
	$phone = get_phone_number($a);
	echo "Phone number:-->$phone<--";
?>