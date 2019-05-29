<?php 
header("Content-Disposition: attachment; filename=" . $file); //имя, файла, которое покажется при скачивании 
header("Content-type: application/octet-stream");  

//путь к файлу 
$file_echo = 'teamsWorks/'. $file; 	
echo file_get_contents($file_echo); 
?> 