<?php
 //your code starts here
//  $myName= "Quincy Malik";
//  echo $myName; 

// //Arrays
// $students= array("Sheila","Caleb","Emmanuel","Stephen" ) ;
// echo $students[2];
// echo count($students);


$programMarks = array("assignment" =>25, "CAT"=> 20, 
                            "Attendance"=>8, 
                            "projects"=> 45);
echo "CAT".$programMarks["CAT"];

//Multidimensional Arrays
$WebTechnologies = array(
    'frontend'=>array('HTML','CSS','JS','Bootstap'),
    'backend' =>array("PHP","JS","Python","Java"),
    'databases' =>array("MySQL","postgresSQL","Mongo DB","firebase"),
    'frameworks' =>array("Jungo","Laravel","Screenboot","flutter")
    
);
echo $WebTechnologies['frontend'][2]; //will be our output
echo $WebTechnologies['backend'][0];
echo $WebTechnologies['frameworks'][2];
echo $WebTechnologies['databases'][2];
?>
