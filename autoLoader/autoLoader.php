<?php
    spl_autoload_register('myAutoloader');

    function myAutoloader($className){
        $path = "./class/";

        $dirs = [
            'db/',
            'login',
            'SmithEntreprise/'
        ];

        $fullpath = '';
        $extension = '.class.php';

        foreach ($dirs as $dir){
            $fullpath = $path . $dir . $className. $extension;
            if(file_exists($fullpath)){
               include_once $fullpath;
            }
        }
    }
?>