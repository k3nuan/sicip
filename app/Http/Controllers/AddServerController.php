<?php

namespace App\Http\Controllers;

use App\Models\AddServer;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Takielias\TablarKit\Facades\TablarKit;

/**
 * Class AddServerController
 * @package App\Http\Controllers
 */
class AddServerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('Super-Admin')) {
            $addServers = AddServer::paginate(10);
        } else {
            $addServers = AddServer::where('user_id', auth()->id())->paginate(10);            
        }


        return view('add-server.index', compact('addServers'))
            ->with('i', (request()->input('page', 1) - 1) * $addServers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $addServer = new AddServer();
        $names = AddServer::query()->pluck('name', 'name')->all();

        return view('add-server.create', compact('addServer', 'names'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->merge(['is_bond' => $request->input('is_bond') ? true : false]);
        $request->merge(['is_multipath' => $request->input('is_multipath') ? true : false]);
        $request->merge(['is_virtual' => $request->input('is_virtual') ? true : false]);
        $request->merge(['user_id' => $request->user()->id]);

        request()->validate(AddServer::$rules, AddServer::$messages);
        $addServer = AddServer::create($request->all());

        return redirect()->route('add-servers.index')
            ->with('success', 'El Servidor ha sido registrado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $addServer = AddServer::find($id);

        return view('add-server.show', compact('addServer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $addServer = AddServer::find($id);

        return view('add-server.edit', compact('addServer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AddServer $addServer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddServer $addServer)
    {
        $request->merge(['is_bond' => $request->input('is_bond') ? true : false]);
        $request->merge(['is_multipath' => $request->input('is_multipath') ? true : false]);
        $request->merge(['is_virtual' => $request->input('is_virtual') ? true : false]);

        request()->validate(AddServer::$rules, AddServer::$messages);

        $addServer->update($request->all());

        return redirect()->route('add-servers.index')
            ->with('success', 'El Servidor ha sido actualizado!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $addServer = AddServer::find($id)->delete();

        return redirect()->route('add-servers.index')
            ->with('success', 'El Servidor ha sido eliminado!');
    }

    public function search(Request $request): JsonResponse
    {
        #$request->all()
        #$request->fullUrl()
        #$request->url()
        $path = $request->path(); 

        if (str_contains($path, 'servers/serial')):
            $responseSchema = [
                'item_id' => 'serial',
                'item_name' => 'serial',
                'item_code' => 'serial',
            ];
        elseif (str_contains($path, 'servers/brand')):
            $responseSchema = [
                'item_id' => 'brand_details',
                'item_name' => 'brand_details',
            ];
        elseif (str_contains($path, 'servers/cpu')):
            $responseSchema = [
                'item_id' => 'cpu_details',
                'item_name' => 'cpu_details',
            ];
        elseif (str_contains($path, 'servers/capacity')):
            $responseSchema = [
                'item_id' => 'capacity_details',
                'item_name' => 'capacity_details',
            ];
        elseif (str_contains($path, 'servers/type')):
            $responseSchema = [
                'item_id' => 'type',
                'item_name' => 'type',
            ];
        elseif (str_contains($path, 'servers/raid')):
            $responseSchema = [
                'item_id' => 'raid',
                'item_name' => 'raid',
            ];            
        elseif (str_contains($path, 'servers/virtualizer')):
            $responseSchema = [
                'item_id' => 'virtualizer_details',
                'item_name' => 'virtualizer_details',
            ];
        elseif (str_contains($path, 'servers/location')):
            $responseSchema = [
                'item_id' => 'location_details',
                'item_name' => 'location_details',
            ];
        elseif (str_contains($path, 'servers/system')):
            $responseSchema = [
                'item_id' => 'os_details',
                'item_name' => 'os_details',
            ];
        elseif (str_contains($path, 'servers/env')):
            $responseSchema = [
                'item_id' => 'enviroment',
                'item_name' => 'enviroment',
            ];
        elseif (str_contains($path, 'servers/status')):
            $responseSchema = [
                'item_id' => 'status',
                'item_name' => 'status',
            ];
        else:
            $responseSchema = [
                'item_id' => 'name',
                'item_name' => 'name',
            ];
        endif;


        #dd($path, $request->all(), $responseSchema);
        $data = TablarKit::searchItem(AddServer::query(), $responseSchema);
        return response()->json($data);
    }

}
