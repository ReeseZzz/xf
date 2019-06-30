<?php

namespace App\Http\Controllers;

use App\Models\Configs;
use App\Models\Nav;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(Request $request)
    {
        $naves = Nav::all();
        $current_nav = '';
        foreach($naves as $v){
            if (Route::current()->uri() == '/' || (strpos('/'.Route::current()->uri(),$v['url']) !== false && $v['url'] != '/') ){                $current_nav = $v;
                break;
            }
        }
        $config = Configs::all()->flatMap(function($item){
            return [$item['key'] => ['name'=>$item['name'],'value'=>$item['value']]];
        });
        View::share(compact('naves','current_nav','config'));
    }
}
