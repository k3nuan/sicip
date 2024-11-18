<?php

namespace App\Http\Controllers;

use App\Models\AddStorage;
use App\Models\AddServer;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Takielias\TablarKit\Facades\TablarKit;

/**
 * Class AddStorageController
 * @package App\Http\Controllers
 */
class AddStorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addStorages = AddStorage::paginate(10);

        return view('add-storage.index', compact('addStorages'))
            ->with('i', (request()->input('page', 1) - 1) * $addStorages->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $addStorage = new AddStorage();
        return view('add-storage.create', compact('addStorage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(AddStorage::$rules, AddStorage::$messages);

        $addStorage = AddStorage::create($request->all());

        return redirect()->route('add-storages.index')
            ->with('success', 'El Almacenamiento ha sido creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $addStorage = AddStorage::find($id);

        return view('add-storage.show', compact('addStorage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $addStorage = AddStorage::find($id);

        return view('add-storage.edit', compact('addStorage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AddStorage $addStorage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddStorage $addStorage)
    {
        request()->validate(AddStorage::$rules);

        $addStorage->update($request->all());

        return redirect()->route('add-storages.index')
            ->with('success', 'El Almacenamiento ha sido actualizado.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $addStorage = AddStorage::find($id)->delete();

        return redirect()->route('add-storages.index')
            ->with('success', 'El Almacenamiento ha sido eliminado.');
    }

    public function search(Request $request): JsonResponse
    {

        $responseSchema = [
            'item_id' => 'id',
            'item_name' => 'name',
        ];

        $data = TablarKit::searchItem(AddServer::query(), $responseSchema);
        
        return response()->json($data);
    }
}
