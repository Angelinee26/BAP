<?php

namespace App\Http\Controllers\Matakuliah;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MatakuliahAngeline;
use Illuminate\Http\Request;

class MatakuliahAngelineController extends Controller
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
            $matakuliahangeline = MatakuliahAngeline::where('kodeMatakuliah', 'LIKE', "%$keyword%")
                ->orWhere('matakuliah', 'LIKE', "%$keyword%")
                ->orWhere('sks', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $matakuliahangeline = MatakuliahAngeline::latest()->paginate($perPage);
        }

        return view('matakuliah.matakuliah-angeline.index', compact('matakuliahangeline'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('matakuliah.matakuliah-angeline.create');
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
        
        MatakuliahAngeline::create($requestData);

        return redirect('matakuliah/matakuliah-angeline')->with('flash_message', 'MatakuliahAngeline added!');
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
        $matakuliahangeline = MatakuliahAngeline::findOrFail($id);

        return view('matakuliah.matakuliah-angeline.show', compact('matakuliahangeline'));
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
        $matakuliahangeline = MatakuliahAngeline::findOrFail($id);

        return view('matakuliah.matakuliah-angeline.edit', compact('matakuliahangeline'));
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
        
        $matakuliahangeline = MatakuliahAngeline::findOrFail($id);
        $matakuliahangeline->update($requestData);

        return redirect('matakuliah/matakuliah-angeline')->with('flash_message', 'MatakuliahAngeline updated!');
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
        MatakuliahAngeline::destroy($id);

        return redirect('matakuliah/matakuliah-angeline')->with('flash_message', 'MatakuliahAngeline deleted!');
    }
}
