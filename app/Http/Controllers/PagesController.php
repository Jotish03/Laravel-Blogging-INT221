<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index(){
        $title='Welcome to Index';
        return view('pages.index')->with('title',$title);
    }
    function about(){
        $title='This is About Page';
        return view('pages.about')->with('title',$title);

    }
    function service(){
        $data=array(
            'title'=>'Welcome to Our Services',
            'service'=>['Java Programming','Python','Laravel']
        );
        return view('pages.service')->with($data);
    }
}
