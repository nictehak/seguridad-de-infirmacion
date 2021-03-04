<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;

use App\Area;
use Illuminate\Http\Request;
use Session;
use PDF;
use Excel;

class AreaController extends Controller
{
      public function __constructor(){
        
        $this->middleware('permission:area.create')->only(['create','store']);
        $this->middleware('permission:area.index')->only(['index']);
        $this->middleware('permission:area.edit')->only(['edit','update']);
        $this->middleware('permission:area.show')->only(['show']);
        $this->middleware('permission:area.destroy')->only(['destroy']);

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
            $area = Area::where('idArea', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $area = Area::latest()->paginate($perPage);
        }

        return view('area.index', compact('area'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
         $permissions = Permission::get();

        return view('area.create', compact('permissions'));
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
        
        
        $area = area::create($request->all());

        $area->permissions()->sync($request->get('permissions'));

        return redirect()->route('area.edit', $area->idArea)
            ->with('info', 'area guardado con éxito');
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
        $area = Area::findOrFail($id);

        return view('area.show', compact('area'));
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
       $area = area::find($id);
        $roles = Role::get();

        return view('area.edit', compact('area', 'roles'));
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
        
         $area = area::find($id);
        $area->update($request->all());

        $area->roles()->sync($request->get('roles'));

        return redirect()->route('area.edit', $area->idArea)
            ->with('info', 'area guardado con éxito');
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
        Area::destroy($id);

        return redirect('area')->with('flash_message', 'Area deleted!');
    }

     public function listaArea()
        {
            
        $area=area::select('idArea', 'nombre', 'descripcion')->get();

        $pdf = PDF::loadView('area/listaArea',['area' => $area]);

        return $pdf->stream('area.pdf');
    }
}
