<?php
namespace Sandeve\Form\Controllers;

use App\Http\Controllers\Controller;

class FormController extends Controller {     
    
    public function test(){
        return view('SForm::test');
    }
}