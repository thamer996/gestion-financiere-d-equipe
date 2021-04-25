<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\earn;
class earnController extends Controller
{
    public function index()
    {
        $earns = earn::latest()->paginate(5);

        return view('earns.index', compact('earns'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

   
    public function create()
    {
        return view('earns.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'source' => 'required',
            'price' => 'required',
            'reason' => 'required',
            
        ]);

        earn::create($request->all());

        return redirect()->route('earns.index');
    }

   
   

   
    public function edit(earn $earn)
    {
        return view('earns.edit', compact('earn'));
    }
   
    public function update(Request $request, earn $earn)
    {
        $request->validate([
            'source' => 'required',
            'price' => 'required',
            'reason' => 'required',
        ]);
        $earn->update($request->all());

        return redirect()->route('earns.index');
    }
   
    public function destroy(earn $earn)
    {
        $earn->delete();

        return redirect()->route('earns.index');
    }
}
