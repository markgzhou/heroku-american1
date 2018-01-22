<?

if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
}
else if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
	$ipAddresses = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
    $_SERVER['REMOTE_ADDR'] = trim(end($ipAddresses));
}

echo $_SERVER['REMOTE_ADDR'];

?>
