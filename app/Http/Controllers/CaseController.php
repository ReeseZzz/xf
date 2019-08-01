<?php

namespace App\Http\Controllers;

use App\Models\BusinessType;
use App\Models\Cases;

class CaseController extends Controller
{
    public function show()
    {
        $cats = BusinessType::with('cases')->orderBy('sort_num')->get();
        return view('cases.show',compact('cats'));
    }

    public function detail($id)
    {
        $case = Cases::findOrFail($id);
        $prev = Cases::select('id','title')->where('id', '<', $id)->first();
        $next = Cases::select('id','title')->where('id', '>', $id)->first();
        return view('cases.detail',compact('case','prev','next'));
    }
}
