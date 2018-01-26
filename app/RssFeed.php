<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\NewsItem;

class RssFeed extends Model
{
    
    public static function getMyRssFeed(){
        $user = Auth::user();
        $rssFeeds = RssFeed::all()->where('user_id',$user->id);
        
        return $rssFeeds;
    }

    public static function retreiveNewsFromMyRssFeed(){
        $user = Auth::user();
        $entries = array();
        $feeds = RssFeed::getMyRssFeed();
        
        foreach($feeds as $feed) {
            // $xml = simplexml_load_file($feed->rss_feed_link);
            foreach($xml->xpath("//item") as $item):
                
                $newsitem = New NewsItem();
                $newsitem->user_id = $user->id;
                $newsitem->title =$item->title;
                $newsitem->description =$item->description;
                $newsitem->link =$item->link ;
                $newsitem->rss_feed_id = $feed->id;
                $newsitem->category_id = 1;
                $newsitem->pubdate = '2018-01-25 07:41:32';
                $newsitem->save();
                
            endforeach;
        }
        

        //Sort feed entries by pubDate
        // usort($entries, function ($feed1, $feed2) {
        //     return strtotime($feed2->pubDate) - strtotime($feed1->pubDate);
        // });

        // return $entries;
    }
}
