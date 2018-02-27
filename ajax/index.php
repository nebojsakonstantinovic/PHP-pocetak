<?php

  if( isset($_Get['id'])){
    $id = $_Get['id'];
};

  $results = 'ovo su rezultati izvrsavanjaupita';

  $arr = array('results' => $results);

  echo json_encode($arr);

 ?>
