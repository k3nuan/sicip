<?php

namespace App\Http\Controllers;

use App\Tables\Connection;
use App\Tables\Location;
use App\Tables\Storage;
use App\Tables\Backup;
use App\Tables\Server;
use Illuminate\Http\Request;

class TablarKitController extends Controller
{
    public function connections(Connection $table, Request $request)
    {
        if ($request->expectsJson()) {
            return $table->getData($request);
        }

        return view('table.connections', compact('table'));
    }

    public function locations(Location $table, Request $request)
    {
        if ($request->expectsJson()) {
            return $table->getData($request);
        }

        return view('table.locations', compact('table'));
    }

    public function storages(Storage $table, Request $request)
    {
        if ($request->expectsJson()) {
            return $table->getData($request);
        }

        return view('table.storages', compact('table'));
    }

    public function backups(Backup $table, Request $request)
    {
        if ($request->expectsJson()) {
            return $table->getData($request);
        }

        return view('table.backups', compact('table'));
    }    

    public function servers(Server $table, Request $request)
    {
        if ($request->expectsJson()) {
            return $table->getData($request);
        }

        return view('table.servers', compact('table'));
    }
}
