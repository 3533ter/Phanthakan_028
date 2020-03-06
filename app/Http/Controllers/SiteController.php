<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $fullname = "Phanthakan Phithakratsadon";
        $website = "codingthailand.com";
        return view('about',[
            'fullname' => $fullname,
            'website' => $website
        ]);
    }
}
