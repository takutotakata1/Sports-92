<?php 
header('Content-type: application/json; charset=utf-8');
$data = filter_input(INPUT_POST,'gmail');
$array = preg_split("/@/",$data);
if($array[1]=='stg.nada.ac.jp'){
  $param = true;
} else{
  $param = false;
}
echo json_encode($param);
 ?>