<?php

class Helper {
        
    public static function parse($texto){
        $Parsedown = new Parsedown();
        echo $Parsedown->text($texto);
    }
    
}