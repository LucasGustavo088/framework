<?php 
/**
* Helpers - facilitadores
* A Vitech Company
* Aproveite!
*/

//helpers 
function d($var, $legenda = false, $exit = false) {
    echo "\n<pre style='width: 100%; z-index: 9999; position: relative;'>";
    if ($legenda){
        $legenda = strtoupper($legenda);
        $tamanho = strlen ($legenda);
        $tabs = str_repeat('&nbsp;', (70 - $tamanho) / 2);
        echo $tabs . $legenda . "\n\n";
    }
    if (is_array($var)) {
        echo utf8_encode(print_r($var, true));
    } else if (is_string($var)) {
        echo "string(" . strlen($var) . ") \"" . utf8_encode($var) . "\"\n";
    } else if(is_object($var)){
        echo "OBJECT \n\n";
        echo utf8_encode(print_r(var_export($var), true));
    } else {
        var_dump($var);
    }
    echo "\n";
    debug_print_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
    echo "</pre>";
    if ($exit) {
        die;
    }
}