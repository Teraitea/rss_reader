<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Userstype;
use Illuminate\Support\Facades\Auth;
class UserstypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $userid = Auth::user()->user_type_id;
        // dd($user);
        // $users = User::all()->where('user_type_id',$user->user_type_id);
        if($userid == 1):  
            $usertypes = Userstype::all();
            return view('Usertype.usertypes', ['usertypes' => $usertypes]);
        else:
            return redirect('/home')->with('error',"Seuls les super admins on le droit de voir les informations des utilisateurs");
        endif;

    }

    public function new(){
        return view('Usertype.usertypes-create-form');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
          ]);

          Userstype::create($request->all());
        //   dd($newsitem);
       
        return redirect('/home/userstypes')->with('success',"La news a bien été ajouté");
    }
    
    public function edit($id)
    {
        $userstypes = Userstype::find($id);
                        
        return view('Usertype.edit', compact('userstypes', 'id'));
    }


    public function update(Request $request, $id)
    {
        $userstype = Userstype::find($id);
        $this->validate(request(), [
            'name' => 'required',
          ]);

        $userstype->name = $request->get('name');
        $userstype->save();
        return redirect('/home/userstypes')->with('success',"La type utilisateur a bien été modifié");

    }

    public function show($id)
    {
        $userstype = Userstype::find($id);
        return view('Usertype.userstype', compact('userstype', 'id'));
    }

    public function destroy($id)
    {
        $userstype = Userstype::find($id);
        $userstype->delete();
        return redirect('/home/userstypes')->with('success',"Le type utilisateur à bien été supprimer");
    

    }

}

// 40 46 12 79 Vairea