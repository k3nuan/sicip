<?php

namespace App\Http\Controllers;

use App\Models\AddBackup;
use Illuminate\Http\Request;

/**
 * Class AddBackupController
 * @package App\Http\Controllers
 */
class AddBackupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addBackups = AddBackup::paginate(10);

        return view('add-backup.index', compact('addBackups'))
            ->with('i', (request()->input('page', 1) - 1) * $addBackups->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $addBackup = new AddBackup();
        return view('add-backup.create', compact('addBackup'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(AddBackup::$rules, AddBackup::$messages);

        $addBackup = AddBackup::create($request->all());

        return redirect()->route('add-backups.index')
            ->with('success', 'El Respaldo ha sido creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $addBackup = AddBackup::find($id);

        return view('add-backup.show', compact('addBackup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $addBackup = AddBackup::find($id);

        return view('add-backup.edit', compact('addBackup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AddBackup $addBackup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddBackup $addBackup)
    {
        request()->validate(AddBackup::$rules);

        $addBackup->update($request->all());

        return redirect()->route('add-backups.index')
            ->with('success', 'El Respaldo ha sido actualizado!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $addBackup = AddBackup::find($id)->delete();

        return redirect()->route('add-backups.index')
            ->with('success', 'El Respaldo ha sido eliminado!');
    }
}
