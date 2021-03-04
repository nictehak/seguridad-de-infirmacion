<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PerfilPermiso;
use Illuminate\Http\Request;

class PerfilPermisosController extends Controller
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
            $perfilpermisos = PerfilPermiso::where('idPerfilPermisos', 'LIKE', "%$keyword%")
                ->orWhere('idPerfil', 'LIKE', "%$keyword%")
                ->orWhere('idPermisos', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $perfilpermisos = PerfilPermiso::latest()->paginate($perPage);
        }

        return view('perfil-permisos.index', compact('perfilpermisos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('perfil-permisos.create');
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
        
        $requestData = $request->all();
        
        PerfilPermiso::create($requestData);

        return redirect('perfil-permisos')->with('flash_message', 'PerfilPermiso added!');
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
        $perfilpermiso = PerfilPermiso::findOrFail($id);

        return view('perfil-permisos.show', compact('perfilpermiso'));
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
        $perfilpermiso = PerfilPermiso::findOrFail($id);

        return view('perfil-permisos.edit', compact('perfilpermiso'));
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
        
        $requestData = $request->all();
        
        $perfilpermiso = PerfilPermiso::findOrFail($id);
        $perfilpermiso->update($requestData);

        return redirect('perfil-permisos')->with('flash_message', 'PerfilPermiso updated!');
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
        PerfilPermiso::destroy($id);

        return redirect('perfil-permisos')->with('flash_message', 'PerfilPermiso deleted!');
    }
}
