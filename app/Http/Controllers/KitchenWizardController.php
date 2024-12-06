<?php

namespace App\Http\Controllers;

use App\Models\Quote;
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

    public function showStep2(Request $request)
    {
        $kitchen = $request->session()->get('kitchen');
        $squareFootage = $kitchen['length'] * $kitchen['width'];
        $quote = $squareFootage * 50; // Example calculation

        return view('wizard.step2', compact('kitchen', 'quote'));
    }

    public function processStep2(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string',
        ]);

        $kitchen = $request->session()->get('kitchen');
        $squareFootage = $kitchen['length'] * $kitchen['width'];
        $quoteAmount = $squareFootage * 50;

        Quote::create([
            'length' => $kitchen['length'],
            'width' => $kitchen['width'],
            'layout' => $kitchen['layout'],
            'color' => $kitchen['color'],
            'square_footage' => $squareFootage,
            'quote' => $quoteAmount,
            'email' => $request->input('email'),
            'name' => $request->input('name'),
        ]);

        return redirect()->route('wizard.step1')->with('success', 'Your request has been submitted!');
    }
}
