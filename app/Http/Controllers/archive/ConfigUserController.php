<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

/**
 * Class ConfigUserController
 * @package App\Http\Controllers
 */
class ConfigUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configUsers = User::paginate(10);

        return view('config-user.index', compact('configUsers'))
            ->with('i', (request()->input('page', 1) - 1) * $configUsers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $configUser = new User();
        return view('config-user.create', compact('configUser'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(User::$rules);

        $configUser = User::create($request->all());

        return redirect()->route('config-users.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configUser = User::find($id);

        return view('config-user.show', compact('configUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $configUser = User::find($id);

        return view('config-user.edit', compact('configUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ConfigUser $configUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $configUser)
    {
        request()->validate(User::$rules);

        $configUser->update($request->all());

        return redirect()->route('config-users.index')
            ->with('success', 'User updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $configUser = User::find($id)->delete();

        return redirect()->route('config-users.index')
            ->with('success', 'User deleted successfully');
    }
}
