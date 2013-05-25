<?php
echo "{";foreach ($municipios as $munic) {
    echo "'".$munic->getIdMuni()."':'".$munic->getMunic()."',"; 
}
echo "}";
?>
