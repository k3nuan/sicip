<?php

namespace App\Http\Controllers;

use App\Models\ConfigServerCon;
use Illuminate\Http\Request;

/**
 * Class ConfigServerConController
 * @package App\Http\Controllers
 */
class ConfigServerConController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configServerCons = ConfigServerCon::paginate(10);

        return view('config-server-con.index', compact('configServerCons'))
            ->with('i', (request()->input('page', 1) - 1) * $configServerCons->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $configServerCon = new ConfigServerCon();
        return view('config-server-con.create', compact('configServerCon'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ConfigServerCon::$rules);

        $configServerCon = ConfigServerCon::create($request->all());

        return redirect()->route('config-server-cons.index')
            ->with('success', 'ConfigServerCon created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configServerCon = ConfigServerCon::find($id);

        return view('config-server-con.show', compact('configServerCon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $configServerCon = ConfigServerCon::find($id);

        return view('config-server-con.edit', compact('configServerCon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ConfigServerCon $configServerCon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConfigServerCon $configServerCon)
    {
        request()->validate(ConfigServerCon::$rules);

        $configServerCon->update($request->all());

        return redirect()->route('config-server-cons.index')
            ->with('success', 'ConfigServerCon updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $configServerCon = ConfigServerCon::find($id)->delete();

        return redirect()->route('config-server-cons.index')
            ->with('success', 'ConfigServerCon deleted successfully');
    }
}
