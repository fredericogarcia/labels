<?php

global $mysqli; 
$mysqli = new mysqli("127.0.0.1", "root", "", "labelroom", 3306);
if ($mysqli->connect_error) { die($mysqli->connect_error); }

$date = date("F j, Y"); //ie September 6, 2016
$julian = date('z') + date('L'); // Add if leap 1 if perpetual 0

function getPlan($cmd) { 
    if (substr(php_uname(), 0, 7) == "Windows"){ 
        pclose(popen("start /B ". $cmd, "r"));  
    } 
    else { 
        exec($cmd . " > /dev/null &");   
    } 
} 

function loadPlan($file) {
    global $mysqli;
    $handle = fopen($file, "r");
    while (($row = fgetcsv($handle, 1024)) !== FALSE)
        $mysqli->query("INSERT INTO `planning` (`sapcode`,`jobnr`, `cases`, `displayuntil`, `useby`) VALUES ('$row[1]', '$row[2]', '$row[3]', '$row[4]', '$row[5]')"); 
    fclose($handle);
}

function searchPlan() {
    global $mysqli;
    $mysqli->query('TRUNCATE TABLE planning'); //wipe database for test
    getPlan('planning\getPlan.bat');
    loadPlan('planning\dailyPlan.csv');
}


//UPDATE `labelroom`.`planning` SET `completed` = '1' WHERE `planning`.`id` = 6; 

?> 