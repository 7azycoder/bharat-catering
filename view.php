<?php

require_once 'core/init.php';
 
$db = DB::getInstance();
  

if(isset($_POST['submit'])){

  $breakfast = array();
  $result2 = $db->get('breakfast',array('test', '=', '0'));        
  $count2 =  $result2->count();

  for($i=0;$i<$count2;$i++)
  {
    if(isset($_POST[$result2->results()[$i]->itemId])){
        $breakfast[count($breakfast)]= $result2->results()[$i]->itemName;
    }   
  }
  foreach ($breakfast as $value) {
    echo $value . '<br>';
  }


}
?>