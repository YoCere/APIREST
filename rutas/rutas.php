<?php
$array=explode("/", $_SERVER["REQUEST_URI"]);
var_dump($array);


if(count(array_filter($array))==1){
    $json=array(
        "Detalle"=>"Sin solicitudes",
    );

}else{
    if(count(array_filter($array))==2){
        $json=array(
            "Detalle"=>"Con solicitudes",
        );
    }
}
?>