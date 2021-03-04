<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use App\Http\Controllers\Controller;

use App\Servicio;
use Illuminate\Http\Request;
use Session;
use PDF;

class ServicioController extends Controller
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
            $servicio = Servicio::where('idServicio', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $servicio = Servicio::latest()->paginate($perPage);
        }

        return view('servicio.index', compact('servicio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

        $permissions = Permission::get();

        return view('servicio.create', compact('permissions'));
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
        
        $servicio = servicio::create($request->all());

        $servicio->permissions()->sync($request->get('permissions'));

        return redirect()->route('servicio.edit', $paquete->idServicio)
            ->with('info', 'servicio guardado con éxito');
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
        $servicio = Servicio::findOrFail($id);

        return view('servicio.show', compact('servicio'));
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
       $servicio = servicio::find($id);
        $roles = Role::get();

        return view('servicio.edit', compact('servicio', 'roles'));
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
        
        $servicio = servicio::find($id);
        $servicio->update($request->all());

        $servicio->roles()->sync($request->get('roles'));

        return redirect()->route('servicio.edit', $servicio->idServicio)
            ->with('info', 'servicio guardado con éxito');
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
        Servicio::destroy($id);

        return redirect('servicio')->with('flash_message', 'Servicio deleted!');
    }
     public function listaServicio()
        {
            
        $servicio=servicio::select('idServicio', 'nombre', 'descripcion')->get();

        $pdf = PDF::loadView('servicio/listaServicio',['servicio' => $servicio]);

        return $pdf->stream('servicio.pdf');
    }
}
