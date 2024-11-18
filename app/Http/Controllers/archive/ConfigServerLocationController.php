<?php

namespace App\Http\Controllers;

use App\Models\ConfigServerLocation;
use Illuminate\Http\Request;

/**
 * Class ConfigServerLocationController
 * @package App\Http\Controllers
 */
class ConfigServerLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configServerLocations = ConfigServerLocation::paginate(10);

        return view('config-server-location.index', compact('configServerLocations'))
            ->with('i', (request()->input('page', 1) - 1) * $configServerLocations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $configServerLocation = new ConfigServerLocation();
        return view('config-server-location.create', compact('configServerLocation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ConfigServerLocation::$rules);

        $configServerLocation = ConfigServerLocation::create($request->all());

        return redirect()->route('config-server-locations.index')
            ->with('success', 'ConfigServerLocation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configServerLocation = ConfigServerLocation::find($id);

        return view('config-server-location.show', compact('configServerLocation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $configServerLocation = ConfigServerLocation::find($id);

        return view('config-server-location.edit', compact('configServerLocation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ConfigServerLocation $configServerLocation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConfigServerLocation $configServerLocation)
    {
        request()->validate(ConfigServerLocation::$rules);

        $configServerLocation->update($request->all());

        return redirect()->route('config-server-locations.index')
            ->with('success', 'ConfigServerLocation updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $configServerLocation = ConfigServerLocation::find($id)->delete();

        return redirect()->route('config-server-locations.index')
            ->with('success', 'ConfigServerLocation deleted successfully');
    }
}
