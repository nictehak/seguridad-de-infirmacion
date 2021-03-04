<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use App\Paquete;



class PaqueteController extends Controller
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
            $paquete = Paquete::where('idPaquete', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('costo', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('tiempo', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $paquete = Paquete::latest()->paginate($perPage);
        }

        return view('paquete.index', compact('paquete'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $permissions = Permission::get();

        return view('paquete.create', compact('permissions'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

        public function store(Request $request)
    {
        $paquete = paquete::create($request->all());

        $paquete->permissions()->sync($request->get('permissions'));

        return redirect()->route('paquete.edit', $paquete->idPaquete)
            ->with('info', 'paquete guardado con éxito');
    }


    public function show($id)
    {
        $paquete = paquete::find($id);

        return view('paquete.show', compact('paquete'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paquete = paquete::find($id);
        $roles = Role::get();

        return view('paquete.edit', compact('paquete', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paquete = paquete::find($id);
        $paquete->update($request->all());

        $paquete->roles()->sync($request->get('roles'));

        return redirect()->route('paquete.edit', $paquete->idPaquete)
            ->with('info', 'paquete guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paquete = paquete::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}

