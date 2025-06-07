<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Illuminate\Validation\Rule;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('data.service.index',[
            'title' => 'Services || Swarakyat Nusantara',
            'menu' => 'Services',
            'submenu' => 'Manage Services',
            'services' => $services,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::all();
        return view('data.service.add',[
            'title' => 'Services || Swarakyat Nusantara',
            'menu' => 'Services',
            'submenu' => 'Manage Services',
            'submenulink' => '/admdashboard/services',
            'subsubmenu' => 'add',
            'services' => $services,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'icon' => 'required',
            'tagline' => 'required',
        ]);
        
        $service=Service::create($validatedData);
        $service->update([
            'url' => '/services/' . $service->id,
        ]);
        return redirect('/admdashboard/services')->with('success','Data Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        $services = Service::all();
        return view('data.service.add',[
            'title' => 'Services || Swarakyat Nusantara',
            'menu' => 'Services',
            'submenu' => 'Manage Services',
            'submenulink' => '/admdashboard/services',
            'subsubmenu' => 'edit',
            'services' => $services,
            'service' => $service,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $validatedData = $request->validate([
            'url' => ['required',Rule::unique('services')->ignore($service->id)],
            'name' => 'required',
            'icon' => 'required',
            'tagline' => 'required',
        ]);
        Service::where('id',$service->id)
                    ->update($validatedData);
        return redirect('/admdashboard/services')->with('success','Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        Service::destroy($service->id);
        return redirect('/admdashboard/services')->with('danger','Data Deleted');
    }
}
