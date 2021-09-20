<?php 
header('Content-type: application/json; charset=utf-8');
$data = filter_input(INPUT_POST,'gmail');
$param = $data;
echo json_encode($param);
 ?>