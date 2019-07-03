<?php 

function path($dir = __DIR__){

    $root = "";
    $dir = str_replace('\\', '/', realpath($dir));

    //HTTPS or HTTP
    $root .= !empty($_SERVER['HTTPS']) ? 'https' : 'http';

    //HOST
    $root .= '://' . $_SERVER['HTTP_HOST'];

    //ALIAS
    if(!empty($_SERVER['CONTEXT_PREFIX'])) {
        $root .= $_SERVER['CONTEXT_PREFIX'];
        $root .= substr($dir, strlen($_SERVER[ 'CONTEXT_DOCUMENT_ROOT' ]));
    } else {
        $root .= substr($dir, strlen($_SERVER[ 'DOCUMENT_ROOT' ]));
    }

    return $root;
}


$livingroomarray['furniture'] = array('Center Table','Side Table','Computer Table','Study Table','Foldable Chair','Non-Foldable Chair','Plastic Chair','Sofa 1 seater', 'Sofa 2 seater', 'Sofa 3 seater', 'Television Cabinet', 'Home Theater');
$livingroomarray['electronics'] = array('Computer','TV','Inverter'); 

?>