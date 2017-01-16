<?php 
echo "This application provides an API for testing \n"; 
echo "Output from api:\n"; 
$command = $_REQUEST['command'];
$whichDay = $_REQUEST['whichDay'];
echo api::$command($whichDay);

class api{
	static function tipOfTheDay($whichDay){
		return 'DevOps services is a great tool';
	}
}

?>