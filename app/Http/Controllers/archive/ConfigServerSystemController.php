<?php

namespace App\Http\Controllers;

use App\Models\ConfigServerSystem;
use Illuminate\Http\Request;

/**
 * Class ConfigServerSystemController
 * @package App\Http\Controllers
 */
class ConfigServerSystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configServerSystems = ConfigServerSystem::paginate(10);

        return view('config-server-system.index', compact('configServerSystems'))
            ->with('i', (request()->input('page', 1) - 1) * $configServerSystems->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $configServerSystem = new ConfigServerSystem();
        return view('config-server-system.create', compact('configServerSystem'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ConfigServerSystem::$rules);

        $configServerSystem = ConfigServerSystem::create($request->all());

        return redirect()->route('config-server-systems.index')
            ->with('success', 'ConfigServerSystem created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configServerSystem = ConfigServerSystem::find($id);

        return view('config-server-system.show', compact('configServerSystem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $configServerSystem = ConfigServerSystem::find($id);

        return view('config-server-system.edit', compact('configServerSystem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ConfigServerSystem $configServerSystem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConfigServerSystem $configServerSystem)
    {
        request()->validate(ConfigServerSystem::$rules);

        $configServerSystem->update($request->all());

        return redirect()->route('config-server-systems.index')
            ->with('success', 'ConfigServerSystem updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $configServerSystem = ConfigServerSystem::find($id)->delete();

        return redirect()->route('config-server-systems.index')
            ->with('success', 'ConfigServerSystem deleted successfully');
    }
}
