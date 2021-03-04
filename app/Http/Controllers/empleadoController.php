<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use App\empleado;
use Illuminate\Http\Request;
use Session;
use PDF;


class empleadoController extends Controller
{


    public function __constructor(){

        $this ->middleware('permission:empleado.create')->only(['create','store']);
        $this->middleware('permission:empleado.index')->only(['index']);
        $this->middleware('permission:empleado.edit')->only(['edit','update']);
        $this->middleware('permission:paquete.show')->only(['show']);
        $this->middleware('permission:empleado.destroy')->only(['destroy']);

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
            $empleado = empleado::where('idEmpleado', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('apellidoMaterno', 'LIKE', "%$keyword%")
                ->orWhere('apellidoPaterno', 'LIKE', "%$keyword%")
                ->orWhere('direccion', 'LIKE', "%$keyword%")
                ->orWhere('telefono', 'LIKE', "%$keyword%")
                ->orWhere('sexo', 'LIKE', "%$keyword%")
                ->orWhere('idTipoEmpleado', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $empleado = empleado::latest()->paginate($perPage);
        }

        return view('empleado.index', compact('empleado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $permissions = Permission::get();

        return view('empleado.create', compact('permissions'));
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
        
          $empleado = empleado::create($request->all());

        $empleado->permissions()->sync($request->get('permissions'));

        return redirect()->route('empleado.edit', $empleado->idEmpleado)
            ->with('info', 'empleado guardado con éxito');
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
        $empleado = empleado::findOrFail($id);

        return view('empleado.show', compact('empleado'));
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
          $empleado = empleado::find($id);
        $roles = Role::get();

        return view('empleado.edit', compact('empleado', 'roles'));
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
        
        $empleado =empleado::find($id);
        $empleado->update($request->all());

        $empleado->roles()->sync($request->get('roles'));

        return redirect()->route('empleado.edit', $empleado->idEmpleado)
            ->with('info', 'empleado guardado con éxito');
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
        empleado::destroy($id);

        return redirect('empleado')->with('flash_message', 'empleado deleted!');
    }


    public function listaEmpleado()
        {
            
        $empleado=empleado::select('idEmpleado','nombre','apellidoMaterno', 'apellidoPaterno', 'direccion', 'telefono', 'sexo')->get();

        $pdf = PDF::loadView('empleado/listaEmpleado',['empleado' => $empleado]);

        return $pdf->stream('empleado.pdf');
    }
}
