<?php

namespace App\Http\Controllers;

use App\Models\ConfigBackupBox;
use Illuminate\Http\Request;

/**
 * Class ConfigBackupBoxController
 * @package App\Http\Controllers
 */
class ConfigBackupBoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configBackupBoxes = ConfigBackupBox::paginate(10);

        return view('config-backup-box.index', compact('configBackupBoxes'))
            ->with('i', (request()->input('page', 1) - 1) * $configBackupBoxes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $configBackupBox = new ConfigBackupBox();
        return view('config-backup-box.create', compact('configBackupBox'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ConfigBackupBox::$rules);

        $configBackupBox = ConfigBackupBox::create($request->all());

        return redirect()->route('config-backup-boxes.index')
            ->with('success', 'ConfigBackupBox created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configBackupBox = ConfigBackupBox::find($id);

        return view('config-backup-box.show', compact('configBackupBox'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $configBackupBox = ConfigBackupBox::find($id);

        return view('config-backup-box.edit', compact('configBackupBox'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ConfigBackupBox $configBackupBox
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConfigBackupBox $configBackupBox)
    {
        request()->validate(ConfigBackupBox::$rules);

        $configBackupBox->update($request->all());

        return redirect()->route('config-backup-boxes.index')
            ->with('success', 'ConfigBackupBox updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $configBackupBox = ConfigBackupBox::find($id)->delete();

        return redirect()->route('config-backup-boxes.index')
            ->with('success', 'ConfigBackupBox deleted successfully');
    }
}
