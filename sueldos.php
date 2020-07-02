<?php
  $sueldo = $_POST['sueldo'];
  $categoria = $_POST['categoria'];
  switch ($_GET) {
case "1":
    $res = $sueldo*.15;
    echo $res;
    break;
case "2":
    $res = $sueldo*.10;
    echo $res;
    break;
case "3":
    $res = $sueldo*.8;
    echo $res;
    break;
case "4":
    $res = $sueldo*.7;
    echo $res;
    break;
?>
