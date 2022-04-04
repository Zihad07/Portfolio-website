<?php

namespace App\Http\Controllers;

use App\Service;
use App\Visitor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $userIP = $_SERVER['REMOTE_ADDR'];

        date_default_timezone_set("Asia/Dhaka");
        $timeDate = date("Y-m-d h:i:sa");

        Visitor::insert(['ip_address' => $userIP, 'visit_time' => $timeDate]);

        // get all servicess
        $services = Service::all();


        return view('home', compact('services'));
    }
}
