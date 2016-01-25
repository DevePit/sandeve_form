<?php

namespace Sandeve\Form;

class Form{
    
    public static function input(){
        return config('config.input_label');
    }
    
    public static function email(){
        return config('config.email_label');
    }
}