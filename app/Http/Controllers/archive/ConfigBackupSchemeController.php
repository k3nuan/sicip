<?php

namespace App\Http\Controllers;

use App\Models\ConfigBackupScheme;
use Illuminate\Http\Request;

/**
 * Class ConfigBackupSchemeController
 * @package App\Http\Controllers
 */
class ConfigBackupSchemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configBackupSchemes = ConfigBackupScheme::paginate(10);

        return view('config-backup-scheme.index', compact('configBackupSchemes'))
            ->with('i', (request()->input('page', 1) - 1) * $configBackupSchemes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $configBackupScheme = new ConfigBackupScheme();
        return view('config-backup-scheme.create', compact('configBackupScheme'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ConfigBackupScheme::$rules);

        $configBackupScheme = ConfigBackupScheme::create($request->all());

        return redirect()->route('config-backup-schemes.index')
            ->with('success', 'ConfigBackupScheme created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configBackupScheme = ConfigBackupScheme::find($id);

        return view('config-backup-scheme.show', compact('configBackupScheme'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $configBackupScheme = ConfigBackupScheme::find($id);

        return view('config-backup-scheme.edit', compact('configBackupScheme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ConfigBackupScheme $configBackupScheme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConfigBackupScheme $configBackupScheme)
    {
        request()->validate(ConfigBackupScheme::$rules);

        $configBackupScheme->update($request->all());

        return redirect()->route('config-backup-schemes.index')
            ->with('success', 'ConfigBackupScheme updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $configBackupScheme = ConfigBackupScheme::find($id)->delete();

        return redirect()->route('config-backup-schemes.index')
            ->with('success', 'ConfigBackupScheme deleted successfully');
    }
}
