<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\player;

class playerController extends Controller
{
    public function index()
    {
        $players = player::latest()->paginate(5);

        return view('players.index', compact('players'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

   
    public function create()
    {
        return view('players.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'date_of_birth' => 'required',
            'position' => 'required',
            'phone_number' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'debut_of_contrat' => 'required',
            'end_of_contrat' => 'required',
            'salary' => 'required',

        ]);
        
        $path = $request->file('image')->store('public');
        
        $player = new player;
        $player->firstname = $request->firstname;
        $player->lastname = $request->lastname;
        $player->date_of_birth = $request->date_of_birth;
        $player->position = $request->position;
        $player->phone_number = $request->phone_number;
        $player->image = $path;
        $player->debut_of_contrat = $request->debut_of_contrat;
        $player->end_of_contrat = $request->end_of_contrat;
        $player->salary = $request->salary;
        
        $player->save();

        return redirect()->route('players.index');
    }

   
   

   
    public function edit(player $player)
    {
        return view('players.edit', compact('player'));
    }
   
    public function update(Request $request, player $player)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'date_of_birth' => 'required',
            'position' => 'required',
            'phone_number' => 'required',
            'debut_of_contrat' => 'required',
            'end_of_contrat' => 'required',
            'salary' => 'required',
        ]);
        $player->update($request->all());

        return redirect()->route('players.index');
    }
   
    public function destroy(player $player)
    {
        $player->delete();

        return redirect()->route('players.index');
    }
              
}
