<?php
  $json = file_get_contents('https://raw.githubusercontent.com/aban98/baraye1sarina/main/peoples.json');
  $json_array = json_decode($json);// decode json`
  $elementCount  = count($json_array);
  echo $elementCount;
?>
