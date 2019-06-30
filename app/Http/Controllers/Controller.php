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
            if($request->getUri() == '/'){
                $current_nav = $v;
                break;
            }elseif(strpos(Route::current()->uri(),$v['url']) !== false){
                $current_nav = $v;
                break;
            }
        }
        $config = Configs::all()->flatMap(function($item){
            return [$item['key'] => ['name'=>$item['name'],'value'=>$item['value']]];
        });
        $footer = [
            'contact' => [
                ['key'=>'全国统一服务热线：','value'=>'400-027-6898'],
                ['key'=>'总部地址：','value'=>'中国.深圳.福田区梅林路63号'],
                ['key'=>'邮编：','value'=>'518049'],
                ['key'=>'联系人：','value'=>'洪女士'],
                ['key'=>'电话：','value'=>'0551-63446902'],
                ['key'=>'传真：','value'=>'0551-65898309'],
                ['key'=>'邮编：','value'=>'230001'],
                ['key'=>'地址：','value'=>'武汉市江汉区姑嫂树路12号南国·北都城市广场'],
                ['key'=>'二维码','value'=> asset('storage/common/qrcode.png') ],
            ],
            'icp' => '安源消防发展有限公司 版权所有 联络我们 粤ICP备15063678号-8 版权所有归武汉资海所有'
        ];
        View::share(compact('naves','current_nav','config'));
    }
}
