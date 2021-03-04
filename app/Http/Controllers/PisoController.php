<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use App\Piso;
use Illuminate\Http\Request;
use Session;
use PDF;

class PisoController extends Controller
{
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
            $piso = Piso::where('idPiso', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('idHospital', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $piso = Piso::latest()->paginate($perPage);
        }

        return view('piso.index', compact('piso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
         $permissions = Permission::get();

        return view('piso.create', compact('permissions'));
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
        
      $piso = piso::create($request->all());

        $piso->permissions()->sync($request->get('permissions'));

        return redirect()->route('piso.edit', $piso->idPiso)
            ->with('info', 'piso guardado con éxito');
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
        $piso = Piso::findOrFail($id);

        return view('piso.show', compact('piso'));
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
       $piso = piso::find($id);
        $roles = Role::get();

        return view('piso.edit', compact('piso', 'roles'));
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
        
        $piso = servicio::find($id);
        $piso->update($request->all());

        $piso->roles()->sync($request->get('roles'));

        return redirect()->route('piso.edit', $piso->idPiso)
            ->with('info', 'piso guardado con éxito');
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
        Piso::destroy($id);

        return redirect('piso')->with('flash_message', 'Piso deleted!');
    }

     public function listaPiso()
        {
            
        $piso=piso::select('idPiso', 'nombre', 'idHospital')->get();

        $pdf = PDF::loadView('piso/listaPiso',['piso' => $piso]);

        return $pdf->stream('piso.pdf');
    }
}
