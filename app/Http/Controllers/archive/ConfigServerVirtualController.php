<?php

namespace App\Http\Controllers;

use App\Models\ConfigServerVirtual;
use Illuminate\Http\Request;

/**
 * Class ConfigServerVirtualController
 * @package App\Http\Controllers
 */
class ConfigServerVirtualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configServerVirtuals = ConfigServerVirtual::paginate(10);

        return view('config-server-virtual.index', compact('configServerVirtuals'))
            ->with('i', (request()->input('page', 1) - 1) * $configServerVirtuals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $configServerVirtual = new ConfigServerVirtual();
        return view('config-server-virtual.create', compact('configServerVirtual'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ConfigServerVirtual::$rules);

        $configServerVirtual = ConfigServerVirtual::create($request->all());

        return redirect()->route('config-server-virtuals.index')
            ->with('success', 'ConfigServerVirtual created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configServerVirtual = ConfigServerVirtual::find($id);

        return view('config-server-virtual.show', compact('configServerVirtual'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $configServerVirtual = ConfigServerVirtual::find($id);

        return view('config-server-virtual.edit', compact('configServerVirtual'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ConfigServerVirtual $configServerVirtual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConfigServerVirtual $configServerVirtual)
    {
        request()->validate(ConfigServerVirtual::$rules);

        $configServerVirtual->update($request->all());

        return redirect()->route('config-server-virtuals.index')
            ->with('success', 'ConfigServerVirtual updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $configServerVirtual = ConfigServerVirtual::find($id)->delete();

        return redirect()->route('config-server-virtuals.index')
            ->with('success', 'ConfigServerVirtual deleted successfully');
    }
}
