<?php

namespace App\Http\Controllers;

use App\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    function visitorIndex()
    {
        $visitors = Visitor::select('id', 'ip_address', 'visit_time')->orderBy('id', 'desc')->take(3)->get();
        // dd($visitors);
        return view('visitor.index', compact('visitors'));
    }
}
