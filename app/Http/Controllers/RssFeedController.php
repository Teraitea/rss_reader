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

    public function listRssfeeds()
    {
        $rssfeeds = RssFeed::all();

        return RssFeedResource::collection($rssfeeds);
    }
}
