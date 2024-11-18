<?php

namespace App\Http\Controllers;

use App\Models\AddApp;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Takielias\TablarKit\Facades\TablarKit;

/**
 * Class AddAppController
 * @package App\Http\Controllers
 */
class AddAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addApps = AddApp::paginate(10);

        return view('add-app.index', compact('addApps'))
            ->with('i', (request()->input('page', 1) - 1) * $addApps->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $addApp = new AddApp();
        return view('add-app.create', compact('addApp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(AddApp::$rules, AddApp::$messages);

        $addApp = AddApp::create($request->all());

        return redirect()->route('add-apps.index')
            ->with('success', 'La Aplicación ha sido creada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $addApp = AddApp::find($id);

        return view('add-app.show', compact('addApp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $addApp = AddApp::find($id);

        return view('add-app.edit', compact('addApp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AddApp $addApp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddApp $addApp)
    {
        request()->validate(AddApp::$rules);

        $addApp->update($request->all());

        return redirect()->route('add-apps.index')
            ->with('success', 'La Aplicación ha sido actualizada!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $addApp = AddApp::find($id)->delete();

        return redirect()->route('add-apps.index')
            ->with('success', 'La Aplicación ha sido eliminada!');
    }

    public function search(Request $request): JsonResponse
    {

        $responseSchema = [
            'item_id' => 'id',
            'item_name' => 'name',
            'item_extra' => 'acronym',
        ];

        $data = TablarKit::searchItem(AddApp::query(), $responseSchema);
        $data = $data->map(function ($item) {
            $item['item_name'] .= ' (' . $item['item_extra'] . ')';
            return $item;
        });

        return response()->json($data);
    }
}
