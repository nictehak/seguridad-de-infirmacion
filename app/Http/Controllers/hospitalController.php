<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\hospital;
use Illuminate\Http\Request;
use Session;
use PDF;

class hospitalController extends Controller
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
            $hospital = hospital::where('idHospital', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('direccion', 'LIKE', "%$keyword%")
                ->orWhere('telefono', 'LIKE', "%$keyword%")
                ->orWhere('estado', 'LIKE', "%$keyword%")
                ->orWhere('latitud', 'LIKE', "%$keyword%")
                ->orWhere('longitud', 'LIKE', "%$keyword%")
                ->orWhere('directorGeneral', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $hospital = hospital::latest()->paginate($perPage);
        }

        return view('hospital.index', compact('hospital'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $permissions = Permission::get();

        return view('hospital.create', compact('permissions'));
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
        
        $hospital = hospital::create($request->all());

        $hospital->permissions()->sync($request->get('permissions'));

        return redirect()->route('hospital.edit', $hospital->idHospital)
            ->with('info', 'hospital guardado con éxito');
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
        $hospital = hospital::findOrFail($id);

        return view('hospital.show', compact('hospital'));
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
        $hospital = hospital::find($id);
        $roles = Role::get();

        return view('hospital.edit', compact('hospital', 'roles'));
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
        
        $hospital = hospital::find($id);
        $hospital->update($request->all());

        $hospital->roles()->sync($request->get('roles'));

        return redirect()->route('hospital.edit', $hospital->idHospital)
            ->with('info', 'hospital guardado con éxito');
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
        hospital::destroy($id);

        return redirect('hospital')->with('flash_message', 'hospital deleted!');
    }

     public function listaHospital()
        {
            
        $hospital=hospital::select('idHospital', 'nombre', 'direccion', 'telefono', 'estado', 'latitud', 'longitud')->get();

        $pdf = PDF::loadView('hospital/listaHospital',['hospital' => $hospital]);

        return $pdf->stream('hospital.pdf');
    }
}
