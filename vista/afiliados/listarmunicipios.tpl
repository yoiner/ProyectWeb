<?php
echo "{";foreach ($municipios as $munic) {
    echo "'".$munic->getMunic()."':'".$munic->getMunic()."',"; 
}
echo "}";
?>
