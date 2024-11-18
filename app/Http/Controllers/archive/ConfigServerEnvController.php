<?php

namespace App\Http\Controllers;

use App\Models\ConfigServerEnv;
use Illuminate\Http\Request;

/**
 * Class ConfigServerEnvController
 * @package App\Http\Controllers
 */
class ConfigServerEnvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configServerEnvs = ConfigServerEnv::paginate(10);

        return view('config-server-env.index', compact('configServerEnvs'))
            ->with('i', (request()->input('page', 1) - 1) * $configServerEnvs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $configServerEnv = new ConfigServerEnv();
        return view('config-server-env.create', compact('configServerEnv'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ConfigServerEnv::$rules, ConfigServerEnv::$messages);

        $configServerEnv = ConfigServerEnv::create($request->all());

        return redirect()->route('config-server-envs.index')
            ->with('success', 'ConfigServerEnv created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configServerEnv = ConfigServerEnv::find($id);

        return view('config-server-env.show', compact('configServerEnv'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $configServerEnv = ConfigServerEnv::find($id);

        return view('config-server-env.edit', compact('configServerEnv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ConfigServerEnv $configServerEnv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConfigServerEnv $configServerEnv)
    {
        request()->validate(ConfigServerEnv::$rules);

        $configServerEnv->update($request->all());

        return redirect()->route('config-server-envs.index')
            ->with('success', 'ConfigServerEnv updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $configServerEnv = ConfigServerEnv::find($id)->delete();

        return redirect()->route('config-server-envs.index')
            ->with('success', 'ConfigServerEnv deleted successfully');
    }
}
