<?php
$command = $_REQUEST['command'];
$whichDay = $_REQUEST['whichDay'];

$day = "Friday";


function generateTip($day){
	
switch ($day) {
    case "Monday":
        echo "Exploratory testing is great for new features";
        break;
    case "Tuesday":
        echo "Take care of your test environment.";
        break;
    case "Wednesday":
        echo "The most important aspect of a test case is the purpose.";
        break;
    case "Thursday":
        echo "Logging test execution and failures must not be forgotten.";
        break;
    case "Friday":
        echo "Continouosly evaluate the test coverage.";
        break;
    case "Saturday":
        echo "Rember - No testing on a Saturday!";
        break;
    case "Sunday":
        echo "Never test on a Sunday...";
        break;
    default:
        echo "Testing is fun all days of the week!";
	}
}

echo api::$command($whichDay);

class api{
	static function testTipOfTheDay($whichDay){
	
		return generateTip($whichDay);
	}
}

?>