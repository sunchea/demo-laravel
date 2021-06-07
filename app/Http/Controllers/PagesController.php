<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function myPage()
    {
        return view('page', [
            "item" => "page",
            "label" => "XXX"
        ]);
    }

    public function myNumber()
    {
        $number = 'Alert!';
        return view('number', [
            'number' => $number
        ]);
    }
}
