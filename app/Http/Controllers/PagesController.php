<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title='welcome to laravel';
       // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title='about us';
        //return view('pages.about');
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        $data=array(
            'title'=>'services',
            'services' =>['web design','programming','seo']
        );
        return view('pages.services')->with($data);
        //return view('pages.services');
    }
}
