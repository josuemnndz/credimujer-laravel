<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Post;
use App\Bloque;
use Carbon\Carbon;

class PageController extends Controller
{
    public function home(){       
        $page = Page::buscar('home'); //busca el slug del admin  
        	return view('home')->with('page',$page);
    }  
    // public function nuestraInstitucion(){
	   //  	$page = Page::buscar('nuestra-institucion', false);
	   //  	return view('pages.nuestra_institucion')->with([ 'page'=> $page ]);
    // }    
}
