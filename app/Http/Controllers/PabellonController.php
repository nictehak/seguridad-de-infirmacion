<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use App\Pabellon;
use Illuminate\Http\Request;
use Session;
use PDF;

class PabellonController extends Controller
{

           public function __constructor(){
            $this->middleware('permission:pabellon.create')->only(['create','store']);
            $this ->middleware('permission:pabellon.index')->only(['index']);
            $this ->middleware('permission:pabellon.edit')->only(['edit','update']);
            $this ->middleware('permission:pabellon.show')->only(['index']);
            $this ->middleware('permission:pabellon.destroy')->only(['index']);

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
            $pabellon = Pabellon::where('idPabellon', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('ubicacion', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('idCuarto', 'LIKE', "%$keyword%")
                ->orWhere('idEstatus', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $pabellon = Pabellon::latest()->paginate($perPage);
        }

        return view('pabellon.index', compact('pabellon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
       $permissions = Permission::get();

        return view('pabellon.create', compact('permissions'));
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
        
       $pabellon = pabellon::create($request->all());

        $pabellon->permissions()->sync($request->get('permissions'));

        return redirect()->route('pabellon.edit', $pabellon->idPabellon)
            ->with('info', 'pabellon guardado con éxito');

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
        $pabellon = Pabellon::findOrFail($id);

        return view('pabellon.show', compact('pabellon'));
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
        $pabellon = pabellon::find($id);
        $roles = Role::get();

        return view('pabellon.edit', compact('pabellon', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illu
     minate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
         $pabellon = pabellon::find($id);
        $pabellon->update($request->all());

        $pabellon->roles()->sync($request->get('roles'));

        return redirect()->route('pabellon.edit', $pabellon->idPabellon)
            ->with('info', 'pabellon guardado con éxito');

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
        Pabellon::destroy($id);

        return redirect('pabellon')->with('flash_message', 'Pabellon deleted!');
    }

     public function listaPabellon()
        {
            
        $pabellon=pabellon::select('idPabellon', 'nombre', 'ubicacion', 'descripcion', 'idCuarto', 'idEstatus')->get();

        $pdf = PDF::loadView('pabellon/listaPabellon',['pabellon' => $pabellon]);

        return $pdf->stream('pabellon.pdf');
    }
}
