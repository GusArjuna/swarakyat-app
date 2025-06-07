<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\Service;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $mitras = Mitra::all();
        return view('company-profile.index',[
            "services"=> $services,
            "mitras"=> $mitras,
            "portofolios"=>[
                [
                    'name' => 'Telkom',
                    'url' => url('company-profile/img/mitra.png'),
                    'category' => 'WiFI',
                    'id' => 1,
                    'description' => 'Pemasangan Wifi pada Telkom',
                ],
                [
                    'name' => 'Telkom',
                    'url' => url('company-profile/img/faq.png'),
                    'category' => 'Cable',
                    'id' => 2,
                    'description' => 'Pengkabelan',
                ],
            ],
            "portofolioCategories"=>[
                [
                    'name' => 'WiFi',
                ],
                [
                    'name' => 'Cable',
                ],
            ],
            'title' => 'Home || Swarakyat Nusantara'
        ]);
    }
    public function portofolio(){
        $services = Service::all();
        return view('company-profile.portofolio',[
            "services"=> $services,
            "portofolios"=>[
                [
                    'name' => 'Telkom',
                    'url' => url('company-profile/img/mitra.png'),
                    'category' => 'WiFI',
                    'id' => 1,
                    'description' => 'Pemasangan Wifi pada Telkom',
                ],
                [
                    'name' => 'Telkom',
                    'url' => url('company-profile/img/faq.png'),
                    'category' => 'Cable',
                    'id' => 2,
                    'description' => 'Pengkabelan',
                ],
            ],
            "portofolioCategories"=>[
                [
                    'name' => 'WiFi',
                ],
                [
                    'name' => 'Cable',
                ],
            ],
            'title' => 'Portofolio || Swarakyat Nusantara',
        ]);
    }
    public function portofolio_details(Request $request){
        $services = Service::all();
        return view('company-profile.portofolio-details',[
            'title' => 'Detail Portofolio || Swarakyat Nusantara',
            "services"=> $services,
        ]);
    }
    public function service(Request $request){
        $services = Service::all();
        return view('company-profile.service',[
            'title' => 'Detail Layanan || Swarakyat Nusantara',
            "services"=> $services,
        ]);
    }
}
