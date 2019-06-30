<?php

namespace App\Http\Controllers;

use App\Models\BusinessType;
use App\Models\Cases;
use App\Models\Resources;

class IndexController extends Controller
{
    public function index()
    {
        $businessType = BusinessType::with('business')->get();
        $businessType = collect($businessType)->chunk(4)->toArray();

        $cases = Cases::limit(8)->get();

        $logo = Resources::logo()->get();

        $cert = Resources::cert()->get();

        return view('index.show',compact('businessType','cases','logo','cert'));
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

    public function business()
    {
        $business = BusinessType::with('business')->get();
        return view('business.show',compact('business'));
    }
}
