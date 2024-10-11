<?php
$notes = [20,10,15,12,9,3];
for ($i=0; $i < count($notes); $i++) { 
    $somme=$somme+$notes[$i];
}
$somme=$somme/count($notes);
echo $somme;
?>
