<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::resource('/config-databases', App\Http\Controllers\ConfigDatabaseController::class);
    Route::resource('/config-apps', App\Http\Controllers\ConfigAppController::class);
    Route::resource('/config-backup-boxes', App\Http\Controllers\ConfigBackupBoxController::class);
    Route::resource('/config-backup-schemes', App\Http\Controllers\ConfigBackupSchemeController::class);
    Route::resource('/config-backup-schedules', App\Http\Controllers\ConfigBackupScheduleController::class);
    Route::resource('/config-server-envs', App\Http\Controllers\ConfigServerEnvController::class);
    Route::resource('/config-server-cons', App\Http\Controllers\ConfigServerConController::class);
    Route::resource('/config-server-ips', App\Http\Controllers\ConfigServerIpController::class);
    Route::resource('/config-server-impacts', App\Http\Controllers\ConfigServerImpactController::class);
    Route::resource('/config-server-layers', App\Http\Controllers\ConfigServerLayerController::class);
    Route::resource('/config-server-systems', App\Http\Controllers\ConfigServerSystemController::class);
    Route::resource('/config-server-statuses', App\Http\Controllers\ConfigServerStatusController::class);
    Route::resource('/config-server-types', App\Http\Controllers\ConfigServerTypeController::class);
    Route::resource('/config-server-locations', App\Http\Controllers\ConfigServerLocationController::class);
    Route::resource('/config-server-virtuals', App\Http\Controllers\ConfigServerVirtualController::class);
    Route::resource('/config-users', App\Http\Controllers\ConfigUserController::class);

    Route::resource('/add-servers', App\Http\Controllers\AddServerController::class);
    Route::resource('/add-storages', App\Http\Controllers\AddStorageController::class);
    Route::resource('/add-backups', App\Http\Controllers\AddBackupController::class);
    Route::resource('/add-apps', App\Http\Controllers\AddAppController::class);
    Route::resource('/add-databases', App\Http\Controllers\AddDatabaseController::class);
    Route::resource('/add-connections', App\Http\Controllers\AddConnectionController::class);

    Route::get('/show/connections', [App\Http\Controllers\TablarKitController::class, 'connections'])->name('show.connection');
    Route::get('/show/locations', [App\Http\Controllers\TablarKitController::class, 'locations'])->name('show.location');
    Route::get('/show/storages', [App\Http\Controllers\TablarKitController::class, 'storages'])->name('show.storage');
    Route::get('/show/backups', [App\Http\Controllers\TablarKitController::class, 'backups'])->name('show.backup');
    Route::get('/show/servers', [App\Http\Controllers\TablarKitController::class, 'servers'])->name('show.server');

});


Route::get('/servers/serial', [App\Http\Controllers\AddServerController::class, 'search'])->name('server.serial');
Route::get('/servers/name', [App\Http\Controllers\AddServerController::class, 'search'])->name('server.name');
Route::get('/servers/brand', [App\Http\Controllers\AddServerController::class, 'search'])->name('server.brand');
Route::get('/servers/cpu', [App\Http\Controllers\AddServerController::class, 'search'])->name('server.cpu');
Route::get('/servers/capacity', [App\Http\Controllers\AddServerController::class, 'search'])->name('server.capacity');
Route::get('/servers/type', [App\Http\Controllers\AddServerController::class, 'search'])->name('server.type');
Route::get('/servers/raid', [App\Http\Controllers\AddServerController::class, 'search'])->name('server.raid');
Route::get('/servers/virtualizer', [App\Http\Controllers\AddServerController::class, 'search'])->name('server.virtualizer');
Route::get('/servers/location', [App\Http\Controllers\AddServerController::class, 'search'])->name('server.location');
Route::get('/servers/system', [App\Http\Controllers\AddServerController::class, 'search'])->name('server.system');
Route::get('/servers/env', [App\Http\Controllers\AddServerController::class, 'search'])->name('server.env');
Route::get('/servers/status', [App\Http\Controllers\AddServerController::class, 'search'])->name('server.status');
Route::get('/storages/server', [App\Http\Controllers\AddStorageController::class, 'search'])->name('storage.server');
Route::get('/apps/name', [App\Http\Controllers\AddAppController::class, 'search'])->name('app.name');
Route::get('/databases/instance', [App\Http\Controllers\AddDatabaseController::class, 'search'])->name('database.instance');
Route::get('/connections/protocol', [App\Http\Controllers\AddConnectionController::class, 'search'])->name('connection.protocol');
Route::get('/connections/user', [App\Http\Controllers\AddConnectionController::class, 'search'])->name('connection.user');
Route::get('/connections/ip', [App\Http\Controllers\AddConnectionController::class, 'search'])->name('connection.ip');
