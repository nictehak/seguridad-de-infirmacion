<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;

use App\Estatus;
use Illuminate\Http\Request;
use Session;
use PDF;

class EstatusController extends Controller
{

     public function __constructor(){
        $this->middleware('permission:estatus.create')->only(['create','store']);
        $this->middleware('permission:estatus.index')->only(['index']);
        $this->middleware('permission:estatus.edit')->only(['edit','update']);
        $this->middleware('permission:estatus.show')->only(['show']);
        $this->middleware('permission:estatus.destroy')->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $estatus = Estatus::where('idEstatus', 'LIKE', "%$keyword%")
                ->orWhere('estatus', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $estatus = Estatus::latest()->paginate($perPage);
        }

        return view('estatus.index', compact('estatus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $permissions = Permission::get();

        return view('estatus.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
    $estatus = estatus::create($request->all());

        $estatus->permissions()->sync($request->get('permissions'));

        return redirect()->route('estatus.edit', $estatus->idEstatus)
            ->with('info', 'estatus guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $estatus = Estatus::findOrFail($id);

        return view('estatus.show', compact('estatus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $estatus = Estatus::find($id);
        $roles = Role::get();

        return view('estatus.edit', compact('estatus', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
       $estatus = estatus::find($id);
        $estatus->update($request->all());

        $estatus->roles()->sync($request->get('roles'));

        return redirect()->route('estatus.edit', $estatus->idEstatus)
            ->with('info', 'estatus guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Estatus::destroy($id);

        return redirect('estatus')->with('flash_message', 'Estatus deleted!');
    }

     public function listaEstatus()
        {
            
        $estatus=estatus::select('idEstatus', 'estatus')->get();

        $pdf = PDF::loadView('estatus/listaEstatus',['estatus' => $estatus]);

        return $pdf->stream('estatus.pdf');
    }
}
