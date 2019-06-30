<?php

namespace App\Http\Controllers;

use App\Models\BusinessType;
use App\Models\Cases;

class CaseController extends Controller
{
    public function show()
    {
        $cats = BusinessType::with('cases')->get();
        return view('cases.show',compact('cats'));
    }

    public function detail($id)
    {
        $case = Cases::findOrFail($id);

        return view('cases.detail',compact('case'));
    }
}
