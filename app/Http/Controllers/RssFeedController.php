<?php

namespace App\Http\Controllers;
use App\RssFeed;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RssFeedController extends Controller
{
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
        
        return view('home');
    }
}
