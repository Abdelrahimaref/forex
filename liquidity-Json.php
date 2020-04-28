<?php
require_once 'SimpleXLSX.php';

$xlsx = SimpleXLSX::parse( 'forex profit money2.xlsx' );


  $ld = $xlsx->getCell(2,'D18');
  $le = $xlsx->getCell(2,'E18');
  $lf = $xlsx->getCell(2,'F18');
  $d= $xlsx->getCell(2,'D19');
  $e= $xlsx->getCell(2,'E19');
  $f= $xlsx->getCell(2,'F19');
  $arr = array($ld=>$d,$le=>$e,$lf=>$f);
  $values = asort($arr);
  echo json_encode($arr);
  ?>
