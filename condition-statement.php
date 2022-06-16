<?php
function checkUserEligibilityToVote()
{
    $age=18;
    $myname = "Malik";
    if($age >=18)
{
    echo $myname .""."you are eligible to vote";
}
 else{
    echo $myname .""."you are eligible to vote";
}
}
checkUserEligibilityToVote();

    $marks= 71;
    if ($marks>=80)
{
    $grade = "A";
}
 else if($marks >=75)
 {
    $grade = "A-";
 }
  else if($marks >=65)
  {
    $grade = "B+";
  }
 else if($marks >=60)
 {
    $grade = "B";
 }
 else if($marks >=50)
 {
    $grade = "C+";
    
 }
 else{
    $grade = "FAIL";
 }
 echo "your score is ".$grade;

?>