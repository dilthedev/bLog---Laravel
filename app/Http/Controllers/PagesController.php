<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function indexPageCon(){
        $title = 'Welcome to laravel!!!';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title',$title);
    }

    public function aboutPageCon(){
        $title = 'About Us';
        $para = 'This is an About page!!!';
    	return view('pages.about', compact('para'))->with('title',$title);
    }

    public function servicesPageCon(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design','Programming','SEO']
        );

        return view('pages.services')->with($data);
    }
}
