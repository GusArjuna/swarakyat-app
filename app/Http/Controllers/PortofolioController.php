<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use App\Http\Requests\StorePortofolioRequest;
use App\Http\Requests\UpdatePortofolioRequest;
use App\Models\Client;
use App\Models\Mitra;
use App\Models\ServiceDetail;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portofolios = Portofolio::all();
        return view('data.portofolio.index',[
            'title' => 'Portofolio || Swarakyat Nusantara',
            'menu' => 'Service',
            'submenu' => 'Portofolio',
            'portofolios' => $portofolios,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $servicesDetails = ServiceDetail::all();
        $clients = Client::all();
        $mitras = Mitra::all();
        return view('data.portofolio.add',[
            'title' => 'Portofolio || Swarakyat Nusantara',
            'menu' => 'Service',
            'submenu' => 'Portofolio',
            'submenulink' => '/admdashboard/portofolio',
            'subsubmenu' => 'add',
            'servicesDetails' => $servicesDetails,
            'clients' => $clients,
            'mitras' => $mitras,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePortofolioRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'url' => 'required|image|file',
            'service_detail_id' => 'required',
            'client_id' => 'required',
            'mitra_id' => 'required',
            'description' => 'required',
        ]);
        if($request->file('url')){
            $validatedData['url'] = $request->file('url')->store('portofolio');
        }else{
            $validatedData['url'] = 'portofolio/standalone.png';
        }
        
        Portofolio::create($validatedData);
        return redirect('/admdashboard/portofolio')->with('success','Data Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portofolio $portofolio)
    {
        $servicesDetails = ServiceDetail::all();
        $clients = Client::all();
        $mitras = Mitra::all();
        return view('data.portofolio.add',[
            'title' => 'Portofolio || Swarakyat Nusantara',
            'menu' => 'Service',
            'submenu' => 'Portofolio',
            'submenulink' => '/admdashboard/portofolio',
            'subsubmenu' => 'edit',
            'servicesDetails' => $servicesDetails,
            'portofolio' => $portofolio,
            'clients' => $clients,
            'mitras' => $mitras,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePortofolioRequest $request, Portofolio $portofolio)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'url' => 'image|file',
            'service_detail_id' => 'required',
            'client_id' => 'required',
            'mitra_id' => 'required',
            'description' => 'required',
        ]);
        if($request->hasFile('url') && $request->oldURL=='portofolio/standalone.png'){
            $validatedData['url'] = $request->file('url')->store('portofolio', 'public');
        } else if ($request->hasFile('url')) {
            Storage::delete($request->oldURL);
            $validatedData['url'] = $request->file('url')->store('portofolio', 'public');
        } else {
            $validatedData['url'] = $request->oldURL;
        }
        
        Portofolio::where('id',$portofolio->id)
                    ->update($validatedData);
        return redirect('/admdashboard/portofolio')->with('success','Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portofolio $portofolio)
    {
        if($portofolio->url!='portofolio/standalone.png'){
            Storage::delete($portofolio->url);
        }
        Portofolio::destroy($portofolio->id);
                
        return redirect('/admdashboard/portofolio')->with('danger','Data Deleted');
    }
}
