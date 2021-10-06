<?php
function calc(){
    if(isset($_POST['btnCalc'])){
        $message = "нечего считать(((";
        if (isset($_POST['a']) && !empty($_POST['a']))
        {
            $a = $_POST['a'];
        };
        if (isset($_POST['b']) && !empty($_POST['b']))
        {
            $b = $_POST['b'];
        };
        if (isset($_POST['action']) && !empty($_POST['action']))
        {
            $action = $_POST['action'];
        };
        switch ($action){
            case '-': $message = "$a - $b= ";$message .= $a-$b; break;
            case '+': $message = "$a + $b= ";$message .=  $a+$b;break;
            case '/': $message = "$a / $b= ";$message .=  $a/$b;break;
            case '*': $message = "$a * $b= ";$message .=  $a*$b;break;
            default: $message = "WTF? ";
        }
    }
    return $message;
}
function getFileList($path ="news/"){
    $filelist =[];
    foreach (glob($path.'*.md') as $dir) {
        if (is_file($dir)) {
            $filelist[] = basename($dir);
        }
    }
        return $filelist;
}