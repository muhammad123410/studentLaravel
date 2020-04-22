<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('Pages.index');
    } 
    public function about(){
        return view('Pages.about');
    }
    public function Services(){
        $data = array(
            'service'=>['Matric','O level','A level'],
            'Address'=>'nowshera'
        );
        return view('Pages.services')->with($data);
    }
}
