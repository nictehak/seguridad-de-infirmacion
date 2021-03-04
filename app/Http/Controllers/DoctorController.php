<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use App\Doctor;
use Illuminate\Http\Request;
use Session;
use PDF;

class DoctorController extends Controller
{

    public function __constructor(){

        $this->middleware('permission:doctor.create')->only(['create','store']);
        $this->middleware('permission:doctor.index')->only(['index']);
        $this->middleware('permission:doctor.edit')->only(['edit','update']);
        $this ->middleware('permission:doctor.show')->only(['show']);
        $this->middleware('permission:doctor.destroy')->only(['destroy']);

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
            $doctor = Doctor::where('idDoctor', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('apellidos', 'LIKE', "%$keyword%")
                ->orWhere('telefono', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('idEspecialidad', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $doctor = Doctor::latest()->paginate($perPage);
        }

        return view('doctor.index', compact('doctor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
          $permissions = Permission::get();

        return view('doctor.create', compact('permissions'));
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
        
         $doctor = doctor::create($request->all());

        $doctor->permissions()->sync($request->get('permissions'));

        return redirect()->route('doctor.edit', $doctor->idDoctor)
            ->with('info', 'doctor guardado con éxito');
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
         $doctor = doctor::findOrFail($id);

        return view('doctor.show', compact('doctor'));
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
         $doctor = doctor::find($id);
        $roles = Role::get();

        return view('doctor.edit', compact('doctor', 'roles'));    }

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
         $doctor = doctor::find($id);
        $doctor->update($request->all());

        $doctor->roles()->sync($request->get('roles'));

        return redirect()->route('doctor.edit', $doctor->idDoctor)
            ->with('info', 'doctor guardado con éxito');
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
        Doctor::destroy($id);

        return redirect('doctor')->with('flash_message', 'Doctor deleted!');
    }

        public function listaDoctor()
        {
            
        $doctor=doctor::select('idDoctor', 'nombre','apellidos','telefono','email', 'idEspecialidad')->get();

        $pdf = PDF::loadView('doctor/listaDoctor',['doctor' => $doctor]);

        return $pdf->stream('doctor.pdf');
    }

         public function export()
        {
        
        Excel::shareView('doctor.lista')->create();
    }




    }
