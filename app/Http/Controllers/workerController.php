<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\worker;
class workerController extends Controller
{
    public function index()
    {
        $workers = worker::latest()->paginate(5);

        return view('workers.index', compact('workers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

   
    public function create()
    {
        return view('workers.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'salary' => 'required',
            'job' => 'required',
            'debut_of_contrat' => 'required',
            'end_of_contrat' => 'required',
            'phone_number' => 'required'
        ]);

        worker::create($request->all());

        return redirect()->route('workers.index');
    }

   
   

   
    public function edit(worker $worker)
    {
        return view('workers.edit', compact('worker'));
    }
   
    public function update(Request $request, worker $worker)
    {
        $request->validate([
            'fullname' => 'required',
            'salary' => 'required',
            'job' => 'required',
            'debut_of_contrat' => 'required',
            'end_of_contrat' => 'required',
            'phone_number' => 'required'
        ]);
        $worker->update($request->all());

        return redirect()->route('workers.index');
    }
   
    public function destroy(worker $worker)
    {
        $worker->delete();

        return redirect()->route('workers.index');
    }
              
}
