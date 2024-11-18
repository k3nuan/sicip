<?php

namespace App\Http\Controllers;

use App\Models\AddDatabase;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Takielias\TablarKit\Facades\TablarKit;
/**
 * Class AddDatabaseController
 * @package App\Http\Controllers
 */
class AddDatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addDatabases = AddDatabase::paginate(10);

        return view('add-database.index', compact('addDatabases'))
            ->with('i', (request()->input('page', 1) - 1) * $addDatabases->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $addDatabase = new AddDatabase();
        return view('add-database.create', compact('addDatabase'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(AddDatabase::$rules, AddDatabase::$messages);

        $addDatabase = AddDatabase::create($request->all());

        return redirect()->route('add-databases.index')
            ->with('success', 'La Base de Datos ha sido registrada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $addDatabase = AddDatabase::find($id);

        return view('add-database.show', compact('addDatabase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $addDatabase = AddDatabase::find($id);

        return view('add-database.edit', compact('addDatabase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AddDatabase $addDatabase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddDatabase $addDatabase)
    {
        request()->validate(AddDatabase::$rules);

        $addDatabase->update($request->all());

        return redirect()->route('add-databases.index')
            ->with('success', 'La Base de Datos ha sido actualizada!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $addDatabase = AddDatabase::find($id)->delete();

        return redirect()->route('add-databases.index')
            ->with('success', 'La Base de Datos ha sido eliminada!');
    }

    public function search(Request $request): JsonResponse
    {

        $responseSchema = [
            'item_id'    => 'id',
            'item_name'  => 'instance_name',
            'item_extra' => 'management_details',
        ];

        // Modify the item_name to include item_extra
        $data = TablarKit::searchItem(AddDatabase::query(), $responseSchema);
        $data = $data->map(function ($item) {
            $item['item_name'] .= ' (' . $item['item_extra'] . ')';
            return $item;
        });

        return response()->json($data);
    }
}
