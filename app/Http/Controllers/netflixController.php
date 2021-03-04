<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\netflix;
use Illuminate\Http\Request;

class netflixController extends Controller
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
            $netflix = netflix::where('idPaquete', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('costo', 'LIKE', "%$keyword%")
                ->orWhere('descrpcion', 'LIKE', "%$keyword%")
                ->orWhere('tiempo', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $netflix = netflix::latest()->paginate($perPage);
        }

        return view('netflix.index', compact('netflix'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('netflix.create');
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
        
        netflix::create($requestData);

        return redirect('netflix')->with('flash_message', 'netflix added!');
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
        $netflix = netflix::findOrFail($id);

        return view('netflix.show', compact('netflix'));
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
        $netflix = netflix::findOrFail($id);

        return view('netflix.edit', compact('netflix'));
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
        
        $netflix = netflix::findOrFail($id);
        $netflix->update($requestData);

        return redirect('netflix')->with('flash_message', 'netflix updated!');
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
        netflix::destroy($id);

        return redirect('netflix')->with('flash_message', 'netflix deleted!');
    }
}
