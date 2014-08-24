<?php
$filenameArray = [];

$handle = opendir(dirname(realpath(__FILE__)).'/icons/');
        while($file = readdir($handle)){
            if($file !== '.' && $file !== '..'){
                array_push($filenameArray, "icons/$file");
            }
        }

echo json_encode($filenameArray);
?>
