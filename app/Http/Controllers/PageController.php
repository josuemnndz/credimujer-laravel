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

    public function nuestraInstitucion(){
	    	$page = Page::buscar('nuestra-institucion', false);
	    	return view('pages.nuestra_institucion')->with([ 'page'=> $page ]);
    }


    public function modeloEducativo(){
	    	$page = Page::buscar('modelo-educativo',false);
	    	return view('pages.modelo_educativo')->with([ 'page'=> $page ]);
    }

    public function noticias(){
	    	$bloque = new Bloque; //instancia de bloque
	    	$lastPosts = Post::where('category_id', '2')->orderBy('id','DESC')->limit(3)->get();//get primeros 3 post
	    	$firstPost = Post::where('category_id', '2')->orderByRaw("RAND()")->limit(1)->get();//get ultimo post
	    	$otherPosts = Post::where('category_id', '2')->orderByRaw("RAND()")->limit(3)->get();//get post aleatorios 

	    return view('pages.noticias')->with('bloque',$bloque)->with('lastPosts',$lastPosts)->with('firstPost',$firstPost)->with('otherPosts',$otherPosts);
    }

    public function noticia($slug){
	     	Carbon::setLocale('es'); //localizar El Salvador
	     	$bloque = new Bloque; //instancia de bloque
	        $post = Post::where('slug', $slug)->where('category_id', '2')->first();//post #

	        if( $post  ){
	        	$lastPosts = Post::where('category_id', '2')->orderBy('id','DESC')->limit(3)->get();//get primeros 3 post
	        	return view('pages.noticia_interna')->with('post',$post)->with('bloque',$bloque)->with('lastPosts',$lastPosts);
	        }

        return view('errors.404');

    }

    public function alumnosExitosos(){
    	$page = Page::buscar('alumno_exitoso',false);
    	$bloque = new Bloque();
    	$post = Post::where('category_id', '1')->first();//post #
    	

    	if( $post ){
        	$lastAlumnos = Post::where('category_id', '2')->orderByRaw('id','DESC')->limit(3)->get();//get primeros 3 post
        	$lastPostNoticias = Post::where('category_id','2')->orderByRaw("RAND()")->limit(3)->get();
            return view('pages.alumnos_exitosos')->with('post',$post)->with('bloque',$bloque)->with('lastAlumnos',$lastAlumnos)->with('pagina','alumnos_exitosos')->with('lastPostNoticias', $lastPostNoticias);
        }

    	return view('errors.404');
    }

    public function alumnoExitoso($slug){
    	$page = Page::buscar('alumno_exitoso',false);
    	$bloque = new Bloque();
    	$post = Post::where('slug', $slug)->where('category_id', '1')->first();//post #
    	

    	if( $post ){
        	$lastAlumnos = Post::where('category_id', '1')->orderByRaw("RAND()")->limit(3)->get();//get primeros 3 post
        	return view('pages.alumnos_exitosos')->with('post',$post)->with('bloque',$bloque)->with('lastAlumnos',$lastAlumnos);
        }

    	return view('errors.404');
    }

    public function contactanos(){
    	$page = Page::buscar('contactanos',false);

    	return view('pages.contactanos')->with([ 'page'=> $page ]);
    }


    
}
