<?php 
$outputText1= "Output from api call tipOfTheDay("; 
$outputText2= "): "; 
$command = $_REQUEST['command'];
$whichDay = $_REQUEST['whichDay'];


function generateTip($day){
	
switch ($day) {
    case "Monday":
        echo "Tip on a Monday";
        break;
    case "Tuesday":
        echo "Tip on a Tuesday";
        break;
    case "Wednesday":
        echo "Tip on a Wednesday";
        break;
    case "Thursday":
        echo "Tip on a Thursday";
        break;
    case "Friday":
        echo "Tip on a Friday";
        break;
        case "Saturday":
        echo "Tip on a Saturday";
        break;
    case "Sundday":
        echo "Tip on a Sunday";
        break;
    default:
        echo "DevOps services is a great tool all days of the week!";
}
	}


echo api::$command($whichDay);

class api{
	static function tipOfTheDay($whichDay){
		
		
		
		return  $outputText1 + $whichDay + "" generateTip($whichDay);
	}
}

?>