<?php

namespace App\Http\Controllers;

use App\Models\ConfigServerLayer;
use Illuminate\Http\Request;

/**
 * Class ConfigServerLayerController
 * @package App\Http\Controllers
 */
class ConfigServerLayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configServerLayers = ConfigServerLayer::paginate(10);

        return view('config-server-layer.index', compact('configServerLayers'))
            ->with('i', (request()->input('page', 1) - 1) * $configServerLayers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $configServerLayer = new ConfigServerLayer();
        return view('config-server-layer.create', compact('configServerLayer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ConfigServerLayer::$rules);

        $configServerLayer = ConfigServerLayer::create($request->all());

        return redirect()->route('config-server-layers.index')
            ->with('success', 'ConfigServerLayer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configServerLayer = ConfigServerLayer::find($id);

        return view('config-server-layer.show', compact('configServerLayer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $configServerLayer = ConfigServerLayer::find($id);

        return view('config-server-layer.edit', compact('configServerLayer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ConfigServerLayer $configServerLayer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConfigServerLayer $configServerLayer)
    {
        request()->validate(ConfigServerLayer::$rules);

        $configServerLayer->update($request->all());

        return redirect()->route('config-server-layers.index')
            ->with('success', 'ConfigServerLayer updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $configServerLayer = ConfigServerLayer::find($id)->delete();

        return redirect()->route('config-server-layers.index')
            ->with('success', 'ConfigServerLayer deleted successfully');
    }
}
