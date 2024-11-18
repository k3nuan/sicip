<?php

namespace App\Http\Controllers;

use App\Models\AddConnection;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Takielias\TablarKit\Facades\TablarKit;

/**
 * Class AddConnectionController
 * @package App\Http\Controllers
 */
class AddConnectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        #$addConnections = AddConnection::paginate(10);
        if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('Super-Admin')) {
            $addConnections = AddConnection::paginate(10);
        } else {
            $addConnections = AddConnection::where('user_id', auth()->id())->paginate(10);            
        }

        return view('add-connection.index', compact('addConnections'))
            ->with('i', (request()->input('page', 1) - 1) * $addConnections->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $addConnection = new AddConnection();
        return view('add-connection.create', compact('addConnection'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['user_id' => $request->user()->id]);

        request()->validate(AddConnection::$rules, AddConnection::$messages);

        $addConnection = AddConnection::create($request->all());

        return redirect()->route('add-connections.index')
            ->with('success', 'La Conección ha sido creada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $addConnection = AddConnection::find($id);

        return view('add-connection.show', compact('addConnection'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $addConnection = AddConnection::find($id);

        return view('add-connection.edit', compact('addConnection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AddConnection $addConnection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddConnection $addConnection)
    {
        request()->validate(AddConnection::$rules);

        $addConnection->update($request->all());

        return redirect()->route('add-connections.index')
            ->with('success', 'La Conección ha sido actualizada!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $addConnection = AddConnection::find($id)->delete();

        return redirect()->route('add-connections.index')
            ->with('success', 'La Conección ha sido eliminada!');
    }

    public function search(Request $request): JsonResponse
    {
        #$request->all()
        #$request->fullUrl()
        #$request->url()
        $path = $request->path(); 

        if (str_contains($path, 'connections/protocol')):
            $responseSchema = [
                'item_id' => 'type',
                'item_name' => 'type',
            ];
        elseif (str_contains($path, 'connections/user')):
            $responseSchema = [
                'item_id' => 'user',
                'item_name' => 'user',
            ];
        elseif (str_contains($path, 'connections/ip')):
            $responseSchema = [
                'item_id' => 'ip_address',
                'item_name' => 'ip_address',
                'item_code' => 'ip_address',
            ];
        else:
            $responseSchema = [
                'item_id' => 'name',
                'item_name' => 'name',
            ];
        endif;

        #dd($path, $request->all(), $responseSchema);
        $data = TablarKit::searchItem(AddConnection::query(), $responseSchema);
        return response()->json($data);
    }
}
