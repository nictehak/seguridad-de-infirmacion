<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;

use App\Especialidad;
use Illuminate\Http\Request;
use Session;
use PDF;

class EspecialidadController extends Controller
{

      public function __constructor(){

        $this->middleware('permission:especialidad.create')->only(['create','store']);
        $this->middleware('permission:especialidad.index')->only(['index']);
        $this ->middleware('permission:especialidad.edit')->only(['edit','update']);
        $this->middleware('permission:especialidad.show')->only(['index']);
        $this->middleware('permission:especialidad.destroy')->only(['index']);
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
            $especialidad = Especialidad::where('idEspecialidad', 'LIKE', "%$keyword%")
                ->orWhere('Especialidad', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $especialidad = Especialidad::latest()->paginate($perPage);
        }

        return view('especialidad.index', compact('especialidad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

           $permissions = Permission::get();

        return view('especialidad.create', compact('permissions'));
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
        
         $especialidad = especialidad::create($request->all());

        $especialidad->permissions()->sync($request->get('permissions'));

        return redirect()->route('especialidad.edit', $especialidad->idEspecialidad)
            ->with('info', 'Especialidad guardado con éxito');
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
        $especialidad = Especialidad::findOrFail($id);

        return view('especialidad.show', compact('especialidad'));
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
          $especialidad = especialidad::find($id);
        $roles = Role::get();

        return view('especialidad.edit', compact('especialidad', 'roles'));
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
        
   $especialidad= especialidad::find($id);
        $especialidad->update($request->all());

        $especialidad->roles()->sync($request->get('roles'));

        return redirect()->route('especialidad.edit', $especialidad->idEspecialidad)
            ->with('info', 'especialidad guardado con éxito');
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
        Especialidad::destroy($id);

        return redirect('especialidad')->with('flash_message', 'Especialidad deleted!');
    }

     public function listaEspecialidad()
        {
            
        $especialidad=especialidad::select('idEspecialidad', 'Especialidad')->get();

        $pdf = PDF::loadView('especialidad/listaEspecialidad',['especialidad' => $especialidad]);

        return $pdf->stream('especialidad.pdf');
    }
}
