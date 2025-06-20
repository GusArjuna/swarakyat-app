<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Http\Requests\StoreMitraRequest;
use App\Http\Requests\UpdateMitraRequest;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $mitras = Mitra::all();
        return view('data.mitra.index',[
            'title' => 'Mitra || Swarakyat Nusantara',
            'menu' => 'Mitra',
            'mitras' => $mitras,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data.mitra.add',[
            'title' => 'Services || Swarakyat Nusantara',
            'menu' => 'Mitra',
            'submenu' => 'Manage Mitra',
            'submenulink' => '/admdashboard/mitra',
            'subsubmenu' => 'add',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMitraRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'url' => 'required|image|file',
            'join' => 'required',
            'category' => 'required',
        ]);
        if($request->file('url')){
            $validatedData['url'] = $request->file('url')->store('mitra');
        }else{
            $validatedData['url'] = 'mitra/standalone.png';
        }
        
        Mitra::create($validatedData);
        return redirect('/admdashboard/mitra')->with('success','Data Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mitra $mitra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mitra $mitra)
    {
        return view('data.mitra.add',[
            'title' => 'Mitra || Swarakyat Nusantara',
            'menu' => 'Mitra',
            'submenu' => 'Manage Mitra',
            'submenulink' => '/admdashboard/mitra',
            'subsubmenu' => 'edit',
            'mitra' => $mitra,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMitraRequest $request, Mitra $mitra)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'url' => 'image|file',
            'join' => 'required',
            'category' => 'required',
        ]);
        if($request->hasFile('url') && $request->oldURL=='mitra/standalone.png'){
            $validatedData['url'] = $request->file('url')->store('mitra', 'public');
        } else if ($request->hasFile('url')) {
            Storage::delete($request->oldURL);
            $validatedData['url'] = $request->file('url')->store('mitra', 'public');
        } else {
            $validatedData['url'] = $request->oldURL;
        }

        Mitra::where('id',$mitra->id)
                    ->update($validatedData);
        return redirect('/admdashboard/mitra')->with('success','Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mitra $mitra)
    {
        if($mitra->url!='mitra/standalone.png'){
            Storage::delete($mitra->url);
        }
        Mitra::destroy($mitra->id);
                
        return redirect('/admdashboard/mitra')->with('danger','Data Deleted');
    }
}
