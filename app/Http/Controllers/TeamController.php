<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{


    public function index()
    {
        $teams = Team::all();

        return view('teams', compact('teams'));
    }

public function store(Request $request)
{


   $team =  Team::create([
        'name'=>$request->input('name'),
        'pays'=>$request->input('pays'),
        'ville'=>$request->input('ville'),
        'date_creation'=>$request->input('date_creation'),
   ]);
}


public function showTeam($id)
{
    $team = Team::find($id);

       if ($team){
        $teame = Team::get($id);
       }
return redirect('/teams/showteam');
}


public function destroy($id){
   $team = Team::find($id);


   if($team){
    Team::destroy($id);
   }


   return back();
}

public function update ($id){





}



public function updateForm(Request $request)

{
    
}



}
