<?php

namespace App\Http\Controllers;

use App\Models\ConfigServerImpact;
use Illuminate\Http\Request;

/**
 * Class ConfigServerImpactController
 * @package App\Http\Controllers
 */
class ConfigServerImpactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configServerImpacts = ConfigServerImpact::paginate(10);

        return view('config-server-impact.index', compact('configServerImpacts'))
            ->with('i', (request()->input('page', 1) - 1) * $configServerImpacts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $configServerImpact = new ConfigServerImpact();
        return view('config-server-impact.create', compact('configServerImpact'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ConfigServerImpact::$rules);

        $configServerImpact = ConfigServerImpact::create($request->all());

        return redirect()->route('config-server-impacts.index')
            ->with('success', 'ConfigServerImpact created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configServerImpact = ConfigServerImpact::find($id);

        return view('config-server-impact.show', compact('configServerImpact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $configServerImpact = ConfigServerImpact::find($id);

        return view('config-server-impact.edit', compact('configServerImpact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ConfigServerImpact $configServerImpact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConfigServerImpact $configServerImpact)
    {
        request()->validate(ConfigServerImpact::$rules);

        $configServerImpact->update($request->all());

        return redirect()->route('config-server-impacts.index')
            ->with('success', 'ConfigServerImpact updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $configServerImpact = ConfigServerImpact::find($id)->delete();

        return redirect()->route('config-server-impacts.index')
            ->with('success', 'ConfigServerImpact deleted successfully');
    }
}
