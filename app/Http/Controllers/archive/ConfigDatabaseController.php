<?php

namespace App\Http\Controllers;

use App\Models\ConfigDatabase;
use Illuminate\Http\Request;

/**
 * Class ConfigDatabaseController
 * @package App\Http\Controllers
 */
class ConfigDatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configDatabases = ConfigDatabase::paginate(10);

        return view('config-database.index', compact('configDatabases'))
            ->with('i', (request()->input('page', 1) - 1) * $configDatabases->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $configDatabase = new ConfigDatabase();
        return view('config-database.create', compact('configDatabase'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ConfigDatabase::$rules);

        $configDatabase = ConfigDatabase::create($request->all());

        return redirect()->route('config-databases.index')
            ->with('success', 'ConfigDatabase created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configDatabase = ConfigDatabase::find($id);

        return view('config-database.show', compact('configDatabase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $configDatabase = ConfigDatabase::find($id);

        return view('config-database.edit', compact('configDatabase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ConfigDatabase $configDatabase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConfigDatabase $configDatabase)
    {
        request()->validate(ConfigDatabase::$rules);

        $configDatabase->update($request->all());

        return redirect()->route('config-databases.index')
            ->with('success', 'ConfigDatabase updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $configDatabase = ConfigDatabase::find($id)->delete();

        return redirect()->route('config-databases.index')
            ->with('success', 'ConfigDatabase deleted successfully');
    }
}
