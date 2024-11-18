<?php

namespace App\Http\Controllers;

use App\Models\ConfigBackupSchedule;
use Illuminate\Http\Request;

/**
 * Class ConfigBackupScheduleController
 * @package App\Http\Controllers
 */
class ConfigBackupScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configBackupSchedules = ConfigBackupSchedule::paginate(10);

        return view('config-backup-schedule.index', compact('configBackupSchedules'))
            ->with('i', (request()->input('page', 1) - 1) * $configBackupSchedules->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $configBackupSchedule = new ConfigBackupSchedule();
        return view('config-backup-schedule.create', compact('configBackupSchedule'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ConfigBackupSchedule::$rules);

        $configBackupSchedule = ConfigBackupSchedule::create($request->all());

        return redirect()->route('config-backup-schedules.index')
            ->with('success', 'ConfigBackupSchedule created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configBackupSchedule = ConfigBackupSchedule::find($id);

        return view('config-backup-schedule.show', compact('configBackupSchedule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $configBackupSchedule = ConfigBackupSchedule::find($id);

        return view('config-backup-schedule.edit', compact('configBackupSchedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ConfigBackupSchedule $configBackupSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConfigBackupSchedule $configBackupSchedule)
    {
        request()->validate(ConfigBackupSchedule::$rules);

        $configBackupSchedule->update($request->all());

        return redirect()->route('config-backup-schedules.index')
            ->with('success', 'ConfigBackupSchedule updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $configBackupSchedule = ConfigBackupSchedule::find($id)->delete();

        return redirect()->route('config-backup-schedules.index')
            ->with('success', 'ConfigBackupSchedule deleted successfully');
    }
}
