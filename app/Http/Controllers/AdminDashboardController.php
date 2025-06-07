<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('data.index',[
            'title'=>'Admin || Swarakyat Nusantara',
            'menu'=>'Dashboard',
            "services"=> $services,
        ]);
    }
}
