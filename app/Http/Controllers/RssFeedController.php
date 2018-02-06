<?php

namespace App\Http\Controllers;
use App\RssFeed;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Resources\RssFeed as RssFeedResource;

class RssFeedController extends Controller
{
    
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function index()
    {

    }
    

    public function new()
    {
        $userid = Auth::user()->id;
        // dd($userid);
        return view('Rssfeeds.rssfeeds-create-form', ['userid' => $userid]);
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'rss_feed_link' => 'required',
            'user_id' => 'required',
          ]);

          RssFeed::create($request->all());
        //   dd($newsitem);
        
        return redirect('/home')->with('success',"Le flux a bien été ajouté");
    }

    public function viewed()
    {
        
    }

    //méthode pour l'api

    public function api_index()
    {
        $rssfeeds = RssFeed::all();

        return RssFeedResource::collection($rssfeeds);
    }// méthodes pour l'api
    
        
    public function api_show($id)
    {
        $rssfeed = RssFeed::findOrFail($id);

        return new RssFeedResource($rssfeed);
    }
    
    public function api_store(Request $request)
    {
        $user = $request->isMethod('put') ? User::findOrFail($request->id) : new User;

        $user->id = $request->input('id');
        $user->lastname = $request->input('lastname');
        $user->firstname = $request->input('firstname');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->user_type_id = $request->input('user_type_id');

        if($user->save()):
            return new UserResource($user);
        endif;
    }  
    
    public function api_destroy($id)
    {
        $user = User::findOrFail($id);
        if($user->delete()):
           return new UserResource($user);
        endif;
    }
}
