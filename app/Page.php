<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Page extends Model
{
    static public function buscar($slug,$json=false)
    {
        if($json){
            $page=static::where('slug',$slug)->first();
            return response()->json($page);
        }else{
            $page=static::where('slug',$slug)->first();
            return $page;
        }
        
    }

}
