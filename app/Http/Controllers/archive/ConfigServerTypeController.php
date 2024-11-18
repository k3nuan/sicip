<?php

namespace App\Http\Controllers;

use App\Models\ConfigServerType;
use Illuminate\Http\Request;

/**
 * Class ConfigServerTypeController
 * @package App\Http\Controllers
 */
class ConfigServerTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configServerTypes = ConfigServerType::paginate(10);

        return view('config-server-type.index', compact('configServerTypes'))
            ->with('i', (request()->input('page', 1) - 1) * $configServerTypes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $configServerType = new ConfigServerType();
        return view('config-server-type.create', compact('configServerType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ConfigServerType::$rules);

        $configServerType = ConfigServerType::create($request->all());

        return redirect()->route('config-server-types.index')
            ->with('success', 'ConfigServerType created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configServerType = ConfigServerType::find($id);

        return view('config-server-type.show', compact('configServerType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $configServerType = ConfigServerType::find($id);

        return view('config-server-type.edit', compact('configServerType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ConfigServerType $configServerType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConfigServerType $configServerType)
    {
        request()->validate(ConfigServerType::$rules);

        $configServerType->update($request->all());

        return redirect()->route('config-server-types.index')
            ->with('success', 'ConfigServerType updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $configServerType = ConfigServerType::find($id)->delete();

        return redirect()->route('config-server-types.index')
            ->with('success', 'ConfigServerType deleted successfully');
    }
}
