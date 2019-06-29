<?php

namespace App\Http\Controllers;

use App\Models\BusinessType;
use App\Models\Nav;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    public function __construct()
    {
        $naves = Nav::all();
        $current_nav = '';
        foreach($naves as $v){
            if ('/'.Route::current()->uri() == $v['url'] || Route::current()->uri() == '/'){
                $current_nav = $v;
                break;
            }
        }
        $header = [
            'logo' => asset('storage/common/logo.png'),
            'nav' => $naves,
            'current_nav' => $current_nav,
        ];
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
        View::share(compact('header','footer'));
    }

    public function index()
    {
        $res = BusinessType::with('business')->get();
        $businessType = collect($res)->chunk(4)->toArray();
        return view('index.show',compact('businessType'));
    }

    public function about()
    {
        $business = [
            [
                'id' => 1,
                'name' => '消防检测',
                'icon' => asset('storage/common/business_1.png'),
                'icon_active' => asset('storage/common/business_1_active.png'),
                'child' => [
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                ]
            ],
            [
                'id' => 2,
                'name' => '建筑装饰与工程设计、施工',
                'icon' => asset('storage/common/business_2.png'),
                'icon_active' => asset('storage/common/business_2_active.png'),
                'child' => [
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                ]
            ],
            [
                'id' => 3,
                'name' => '建筑智能化系统维保',
                'icon' => asset('storage/common/business_3.png'),
                'icon_active' => asset('storage/common/business_3_active.png'),
                'child' => [
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                ]
            ],
            [
                'id' => 4,
                'name' => '消防培训',
                'icon' => asset('storage/common/business_4.png'),
                'icon_active' => asset('storage/common/business_4_active.png'),
                'child' => [
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                ]
            ],
            [
                'id' => 5,
                'name' => '消防维保',
                'icon' => asset('storage/common/business_5.png'),
                'icon_active' => asset('storage/common/business_5_active.png'),
                'child' => [
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                ]
            ],
            [
                'id' => 6,
                'name' => '消防工程',
                'icon' => asset('storage/common/business_6.png'),
                'icon_active' => asset('storage/common/business_6_active.png'),
                'child' => [
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                ]
            ],
            [
                'id' => 7,
                'name' => '智能化、机电工程',
                'icon' => asset('storage/common/business_7.png'),
                'icon_active' => asset('storage/common/business_7_active.png'),
                'child' => [
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                ]
            ],
            [
                'id' => 8,
                'name' => '维保检测',
                'icon' => asset('storage/common/business_8.png'),
                'icon_active' => asset('storage/common/business_8_active.png'),
                'child' => [
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                    ['title'=>'智能化工程','content'=>'公司具有国家建设部颁发的建筑智能'],
                ]
            ]
        ];
        $business = collect($business)->chunk(4)->toArray();
        return view('index.show',compact('business'));
    }
    public function cases()
    {
        $cats = BusinessType::with('cases')->get();
        return view('cases.show',compact('cats'));
    }
    public function business()
    {
        $business = BusinessType::with('business')->get();
        return view('business.show',compact('business'));
    }
}
