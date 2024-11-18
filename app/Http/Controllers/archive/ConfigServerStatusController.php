<?php

namespace App\Http\Controllers;

use App\Models\ConfigServerStatus;
use Illuminate\Http\Request;

/**
 * Class ConfigServerStatusController
 * @package App\Http\Controllers
 */
class ConfigServerStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configServerStatuses = ConfigServerStatus::paginate(10);

        return view('config-server-status.index', compact('configServerStatuses'))
            ->with('i', (request()->input('page', 1) - 1) * $configServerStatuses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $configServerStatus = new ConfigServerStatus();
        return view('config-server-status.create', compact('configServerStatus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ConfigServerStatus::$rules);

        $configServerStatus = ConfigServerStatus::create($request->all());

        return redirect()->route('config-server-statuses.index')
            ->with('success', 'ConfigServerStatus created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configServerStatus = ConfigServerStatus::find($id);

        return view('config-server-status.show', compact('configServerStatus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $configServerStatus = ConfigServerStatus::find($id);

        return view('config-server-status.edit', compact('configServerStatus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ConfigServerStatus $configServerStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConfigServerStatus $configServerStatus)
    {
        request()->validate(ConfigServerStatus::$rules);

        $configServerStatus->update($request->all());

        return redirect()->route('config-server-statuses.index')
            ->with('success', 'ConfigServerStatus updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $configServerStatus = ConfigServerStatus::find($id)->delete();

        return redirect()->route('config-server-statuses.index')
            ->with('success', 'ConfigServerStatus deleted successfully');
    }
}
