<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('data.client.index',[
            'title' => 'Clients || Swarakyat Nusantara',
            'menu' => 'Clients',
            'clients' => $clients,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data.client.add',[
            'title' => 'Clients || Swarakyat Nusantara',
            'menu' => 'Client',
            'submenu' => 'Manage Client',
            'submenulink' => '/admdashboard/clients',
            'subsubmenu' => 'add',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {
        $validatedData = $request->validate([
            'companyName' => 'required',
            'url' => 'image|file',
            'companyCategory' => 'required',
            'weburl' => 'required',
            'address' => 'required',
            'district' => 'required',
            'city' => 'required',
            'province' => 'required',
            'state' => 'required',
            'join' => 'required',
        ]);

        if($request->file('url')){
            $validatedData['url'] = $request->file('url')->store('client');
        }else{
            $validatedData['url'] = 'client/standalone.png';
        }

        $prefixMap = [
            'Standalone'   => 'CLTSTL',
            'Company'      => 'CLTCMP',
            'Organization' => 'CLTORG',
            'School'       => 'CLTSCH',
            'UMKM'         => 'CLTUMK',
        ];

        $category = $request->companyCategory;

        if (!array_key_exists($category, $prefixMap)) {
            return redirect()->back()->with('danger', 'Wrong Category');
        }

        $client = Client::create($validatedData);
        $client->update([
            'userID' => $prefixMap[$category] . $client->id,
        ]);
        
        return redirect('/admdashboard/clients')->with('success','Data Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('data.client.add',[
            'title' => 'Clients || Swarakyat Nusantara',
            'menu' => 'Client',
            'submenu' => 'Manage Client',
            'submenulink' => '/admdashboard/clients',
            'subsubmenu' => 'edit',
            'client' => $client,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
         $validatedData = $request->validate([
            'companyName' => 'required',
            'url' => 'image|file',
            'companyCategory' => 'required',
            'weburl' => 'required',
            'address' => 'required',
            'district' => 'required',
            'city' => 'required',
            'province' => 'required',
            'state' => 'required',
            'join' => 'required',
        ]);
        if ($request->userID!=$client->userID) {
            $prefixMap = [
                'Standalone'   => 'CLTSTL',
                'Company'      => 'CLTCMP',
                'Organization' => 'CLTORG',
                'School'       => 'CLTSCH',
                'UMKM'         => 'CLTUMK',
            ];

            $category = $request->companyCategory;

            if (!array_key_exists($category, $prefixMap)) {
                return redirect()->back()->with('danger', 'Wrong Category');
            }
            $validatedData['userID'] = $prefixMap[$category] . $client->id;
        }
        if($request->hasFile('url') && $request->oldURL=='client/standalone.png'){
            $validatedData['url'] = $request->file('url')->store('client', 'public');
        } else if ($request->hasFile('url')) {
            Storage::delete($request->oldURL);
            $validatedData['url'] = $request->file('url')->store('client', 'public');
        } else {
            $validatedData['url'] = $request->oldURL;
        }
        Client::where('id',$client->id)
                    ->update($validatedData);
        return redirect('/admdashboard/clients')->with('success','Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        if($client->url!='client/standalone.png'){
            Storage::delete($client->url);
        }
        Client::destroy($client->id);
        return redirect('/admdashboard/clients')->with('danger','Data Deleted');
    }
}
