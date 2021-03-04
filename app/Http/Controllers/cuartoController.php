<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;

use App\cuarto;
use Illuminate\Http\Request;
use Session;
use PDF;


class cuartoController extends Controller
{

       public function __constructor(){
        $this->middleware('permission:cuarto.create')->only(['create','store']);
        $this->middleware('permission:cuarto.index')->only(['index']);
        $this ->middleware('permission:cuarto.edit')->only(['edit','update']);
        $this->middleware('permission:cuarto.show')->only(['show']);
        $this->middleware('permission:cuarto.destroy')->only(['destroy']);
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
            $cuarto = cuarto::where('idCuarto', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('ubicacion', 'LIKE', "%$keyword%")
                ->orWhere('idPiso', 'LIKE', "%$keyword%")
                ->orWhere('idArea', 'LIKE', "%$keyword%")
                ->orWhere('idEstatus', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $cuarto = cuarto::latest()->paginate($perPage);
        }

        return view('cuarto.index', compact('cuarto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $permissions = Permission::get();

        return view('cuarto.create', compact('permissions'));
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
        
        $cuarto = cuarto::create($request->all());

        $cuarto->permissions()->sync($request->get('permissions'));

        return redirect()->route('cuarto.edit', $cuarto->idCuarto)
            ->with('info', 'cuarto guardado con éxito');
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
        $cuarto = cuarto::findOrFail($id);

        return view('cuarto.show', compact('cuarto'));
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
         $cuarto = cuarto::find($id);
        $roles = Role::get();

        return view('cuarto.edit', compact('cuarto', 'roles'));
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
        $cuarto = cuarto::find($id);
        $cuarto->update($request->all());

        $cuarto->roles()->sync($request->get('roles'));

        return redirect()->route('cuarto.edit', $cuarto->idCuarto)
            ->with('info', 'cuarto guardado con éxito');
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
        cuarto::destroy($id);

        return redirect('cuarto')->with('flash_message', 'cuarto deleted!');
    }

     public function listaCuarto()
        {
            
        $cuarto=cuarto::select('idCuarto', 'nombre', 'ubicacion', 'idPiso', 'idArea', 'idEstatus')->get();

        $pdf = PDF::loadView('cuarto/listaCuarto',['cuarto' => $cuarto]);

        return $pdf->stream('cuarto.pdf');
    }
}
