<?php

namespace App\Http\Controllers;

use App\Models\ConfigServerIp;
use Illuminate\Http\Request;

/**
 * Class ConfigServerIpController
 * @package App\Http\Controllers
 */
class ConfigServerIpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configServerIps = ConfigServerIp::paginate(10);

        return view('config-server-ip.index', compact('configServerIps'))
            ->with('i', (request()->input('page', 1) - 1) * $configServerIps->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $configServerIp = new ConfigServerIp();
        return view('config-server-ip.create', compact('configServerIp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ConfigServerIp::$rules);

        $configServerIp = ConfigServerIp::create($request->all());

        return redirect()->route('config-server-ips.index')
            ->with('success', 'ConfigServerIp created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configServerIp = ConfigServerIp::find($id);

        return view('config-server-ip.show', compact('configServerIp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $configServerIp = ConfigServerIp::find($id);

        return view('config-server-ip.edit', compact('configServerIp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ConfigServerIp $configServerIp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConfigServerIp $configServerIp)
    {
        request()->validate(ConfigServerIp::$rules);

        $configServerIp->update($request->all());

        return redirect()->route('config-server-ips.index')
            ->with('success', 'ConfigServerIp updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $configServerIp = ConfigServerIp::find($id)->delete();

        return redirect()->route('config-server-ips.index')
            ->with('success', 'ConfigServerIp deleted successfully');
    }
}
