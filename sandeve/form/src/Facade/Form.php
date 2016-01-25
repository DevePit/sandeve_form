<?php

namespace Sandeve\Form\Facade;

use Illuminate\Support\Facades\Facade;

class Form extends Facade{
    
   protected static function getFacadeAccessor() { return 'form'; }
}