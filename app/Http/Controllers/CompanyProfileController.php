<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function index()
    {
        return view('company-profile.index',[
            "clients"=>[
                [
                    'name' => 'smblt',
                    'url' => url('src/img/clients/smblt.png'),
                ],
            ],
            'title' => 'Home || Swarakyat Nusantara'
        ]);
    }
}
