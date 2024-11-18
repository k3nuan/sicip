<?php

namespace App\Http\Controllers;

use App\Models\ConfigApp;
use Illuminate\Http\Request;

/**
 * Class ConfigAppController
 * @package App\Http\Controllers
 */
class ConfigAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configAppes = ConfigApp::paginate(10);

        return view('config-app.index', compact('configAppes'))
            ->with('i', (request()->input('page', 1) - 1) * $configAppes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $configApp = new ConfigApp();
        return view('config-app.create', compact('configApp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ConfigApp::$rules);

        $configApp = ConfigApp::create($request->all());

        return redirect()->route('config-apps.index')
            ->with('success', 'ConfigApp created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configApp = ConfigApp::find($id);

        return view('config-app.show', compact('configApp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $configApp = ConfigApp::find($id);

        return view('config-app.edit', compact('configApp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ConfigApp $configApp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConfigApp $configApp)
    {
        request()->validate(ConfigApp::$rules);

        $configApp->update($request->all());

        return redirect()->route('config-apps.index')
            ->with('success', 'ConfigApp updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $configApp = ConfigApp::find($id)->delete();

        return redirect()->route('config-apps.index')
            ->with('success', 'ConfigApp deleted successfully');
    }
}
