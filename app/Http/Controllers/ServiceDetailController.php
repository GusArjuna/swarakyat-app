<?php

namespace App\Http\Controllers;

use App\Models\ServiceDetail;
use App\Http\Requests\StoreServiceDetailRequest;
use App\Http\Requests\UpdateServiceDetailRequest;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicesDetails = ServiceDetail::all();
        return view('data.service-details.index',[
            'title' => 'Service Details || Swarakyat Nusantara',
            'menu' => 'Service',
            'submenu' => 'Service Details',
            'servicesDetails' => $servicesDetails,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::all();
        return view('data.service-details.add',[
            'title' => 'Service Details || Swarakyat Nusantara',
            'menu' => 'Service',
            'submenu' => 'Service Details',
            'submenulink' => '/admdashboard/services-details',
            'subsubmenu' => 'add',
            'services' => $services,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceDetailRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'url' => 'required|image|file',
            'service_id' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        if($request->file('url')){
            $validatedData['url'] = $request->file('url')->store('service_details');
        }
        
        ServiceDetail::create($validatedData);
        return redirect('/admdashboard/services-details')->with('success','Data Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceDetail $serviceDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServiceDetail $serviceDetail)
    {
        $services = Service::all();
        return view('data.service-details.add',[
            'title' => 'Service Details || Swarakyat Nusantara',
            'menu' => 'Service',
            'submenu' => 'Service Details',
            'submenulink' => '/admdashboard/services-details',
            'subsubmenu' => 'edit',
            'services' => $services,
            'serviceDetail' => $serviceDetail,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceDetailRequest $request, ServiceDetail $serviceDetail)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'url' => 'image|file',
            'service_id' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        if ($request->hasFile('url')) {
            Storage::delete($request->oldURL);
            $validatedData['url'] = $request->file('url')->store('service_details', 'public');
        } else {
            $validatedData['url'] = $request->oldURL;
        }
        ServiceDetail::where('id',$serviceDetail->id)
                    ->update($validatedData);
        return redirect('/admdashboard/services-details')->with('success','Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceDetail $serviceDetail)
    {
        Storage::delete($serviceDetail->url);
        ServiceDetail::destroy($serviceDetail->id);
        return redirect('/admdashboard/services-details')->with('danger','Data Deleted');
    }
}
