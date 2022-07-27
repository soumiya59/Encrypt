<?php
function Cesar($msg,$key){
    $res = "";
    $alpha="abcdefghijklmnopqrstuvwxyz";
	for($i=0;$i<strlen($msg);$i++){
        $ordre = strpos($alpha,$msg[$i]);
        $indice = $ordre + $key;
        if($indice>25){
            $indice = $indice % 26;
        }
        $res[$i] = $alpha[$indice];
    }
    return $res;
}

echo Cesar("salam",3);
?>