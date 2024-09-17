<?php
// Autor sergio Gómez <sergio@uco.es>
require('HolaMundo.php');
print "Introduce tu nombre:";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);
?>
