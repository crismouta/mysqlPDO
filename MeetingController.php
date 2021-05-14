<?php
require_once ("autoload.php");

$objectMeeting = new Meeting();

//Insert

//$insert = $objectMeeting->insertMeeting("Zhanna", "HTML Task");
//echo $insert; 

//Consultar

$meeting = $objectMeeting->getMeeting();

print_r ("<pre>");
print_r ($meeting);
print_r ("</pre>");

//Actualizar

$updateMeeting = $objectMeeting->updateMeeting(1, "Cris", "CSS Task");
echo $updateMeeting;

//Consultar un id especifico

$meet = $objectMeeting->getMeet(2);

print_r ("<pre>");
print_r ($meet);
print_r ("</pre>");

//Delete

$delete = $objectMeeting->deleteMeeting(10);
echo $delete;  