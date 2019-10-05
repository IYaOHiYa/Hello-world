<?php
    phpinfo();
    
    function add($a, $b, $c){
        return $a + $b + $c;
    }
    
    function hello_wrold(){
        return "Hello world";
    }
    
    function getTime(){
        static $time = null;
        if(!$time){
            $time = time();
        }
        return $time;
    }