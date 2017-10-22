<?php
$currentDate = time();

$yearEnd = strtotime(date('Y-m-d', strtotime('Dec 31')));

$seconds = $yearEnd - $currentDate;

$secondsAsCounter = $seconds % 60;

$minutes = floor($seconds / 60);

$minutesAsCounter = $minutes % 60;

$hours = floor($seconds / 3600);

$hoursAsCounter = $hours % 24;

$days = floor($seconds / 86400);

echo "Hours until new year : $hours <br/>";
echo "Minutes until new year : $minutes <br/>";
echo "Seconds until new year : $seconds <br/>";

echo "Days:Hours:Minutes:Seconds $days:" . $hoursAsCounter . ":" . $minutesAsCounter . ":" . $secondsAsCounter;
