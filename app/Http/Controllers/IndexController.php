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
        return view('welcome');
    }

    public function business()
    {
        $business = BusinessType::with('business')->get();
        return view('business.show',compact('business'));
    }
}
