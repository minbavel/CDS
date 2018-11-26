<?php 

$command = escapeshellcmd('C:\Users\mohan\Desktop\test.py 2 2');
$output = shell_exec($command);
echo $output;

?>