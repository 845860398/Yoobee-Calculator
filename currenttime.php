<?php
// Using real time date
$currentTime = date("g:i:s a");

$hour = date("g");
$minute = date("i");
$amOrpm = date("a");
$year = date("Y");

if(($hour >= 5 && $amOrpm === "am") && ($hour <= 11 && $minute <= 59 && $amOrpm === "am")) {
    echo "<p class='greeting'> Good Morning! </p>";
}
elseif(($hour == 12  && $minutes <= 59 && $amOrpm === "pm") || (($hour >= 1 && $amOrpm === "pm") && ($hour <= 4 && $minute <= 59 && $amOrpm === "pm"))){
    echo "<p class='greeting'> Good Afternoon! </p>";
}
elseif(($hour >= 5 && $amOrpm === "pm") && ($hour <= 7 && $minute <= 59 && $amOrpm === "pm")){
    echo "<p class='greeting'> Good Evening! </p>";
}
elseif(($hour >= 8 && $amOrpm === "pm") && ($hour <= 11 && $minute <= 59 && $amOrpm === "pm")){
    echo "<p class='greeting'> Good Night! </p>";
}
elseif(($hour == 12  && $minutes <= 59 && $amOrpm === "am") || (($hour >= 1 && $amOrpm === "am") && ($hour <= 4 && $minute <= 59 && $amOrpm === "am"))){
    echo "<p class='greeting'> Can you like... go to bed now? </p>";
}
else{
    echo "<p class='greeting'> Great, you just broke the time! </p>";
}

echo "<br>";
echo "<p class='theTime'> Current time: $currentTime.</p>";

?>
