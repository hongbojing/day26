<?php
$source_date=['hongbo1','hongbo2','hongbo3','hongbo4'];
foreach($source_date as $element){
  echo "<label>".$element."</label>";
  echo '<input type="text" id="'.$element.'">';
  echo "<br>";
}
?>
