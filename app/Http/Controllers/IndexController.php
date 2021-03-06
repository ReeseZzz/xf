<?php

namespace App\Http\Controllers;

use App\Models\BusinessType;
use App\Models\Cases;
use App\Models\History;
use App\Models\Nav;
use App\Models\Resources;

class IndexController extends Controller
{
    public function index()
    {
        $nav = Nav::where('parent_id', 1)->get();

        $businessType = BusinessType::with('business')->orderBy('sort_num')->get();
        $businessType = collect($businessType)->chunk(4)->toArray();

        $cases = Cases::query()->orderBy('sort_num')->limit(6)->get();

        $logo = Resources::logo()->get();

        $cert = Resources::cert()->get();

        return view('index.show', compact('nav', 'businessType', 'cases', 'logo', 'cert'));
    }

    public function about()
    {
        $nav = Nav::where('parent_id', 2)->get();

        $cert = Resources::title()->get();

        $history = History::orderBy('year')->get();

        return view('about.show', compact('nav', 'history', 'cert'));
    }

    public function business()
    {
        $business = BusinessType::with(['business','cases'])->orderBy('sort_num')->get();

        return view('business.show', compact('business'));
    }
}
