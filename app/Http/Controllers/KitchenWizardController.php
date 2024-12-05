<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KitchenWizardController extends Controller
{
    public function showStep1(){
        return view("wizard.step1");
    }
}
