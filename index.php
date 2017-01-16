<?php echo "This application provides an API for testing"; 
$command = $_REQUEST['command'];
$param = $_REQUEST['param'];
echo api::$command($param);

class api{
	static function tipOfTheDay($param){
		return $param;
	}
}

?>