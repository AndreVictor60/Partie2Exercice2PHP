<?php
echo 'IF(IsEasy=true): </br>';
  $IsEasy = true;
  if($IsEasy == true){
    echo 'C\'est facile!!';
  }else{
    echo 'C\'est difficile !!!';
  }
  echo '</br></br> Switch(IsEasy=false):</br>';
  $IsEasy = false;
  switch ($IsEasy) {
    case true:
      echo 'C\'est facile!!';
      break;
    case false:
    echo 'C\'est difficile !!!';
      break;

    default:
      echo 'Error';
      break;
  }
 ?>
