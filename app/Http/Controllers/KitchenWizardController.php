<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KitchenWizardController extends Controller
{
    public function showStep1(){
        return view("wizard.step1");
    }

    public function processStep1(Request $request)
    {
        // Input validation
        $request->validate([
            'length' => 'required|numeric',
            'width' => 'required|numeric',
            'layout' => 'required',
            'color' => 'required',
        ]);

        // Store data in session
        $request->session()->put('kitchen', $request->only(['length', 'width', 'layout', 'color']));
        
        return redirect()->route('wizard.step2');
    }
}
