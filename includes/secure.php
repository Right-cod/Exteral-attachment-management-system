<?php
 function test_security($inputs){
$inputs = htmlspecialchars(stripslashes(strip_tags ($inputs)));
	return $inputs;
}
