<?php
phpinfo();

$ext = new ReflectionExtension('mysqli');
var_dump($ext->getVersion());
?>