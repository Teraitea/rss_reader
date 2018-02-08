<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\NewsItem;
use Carbon\Carbon;

class RssFeed extends Model
{

    protected $fillable = ['name', 'user_id', 'rss_feed_link'];

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
            $xml = simplexml_load_file($feed->rss_feed_link);
            foreach($xml->xpath("//item") as $item):
                $newsTemp = NewsItem::where('title',$item->title)->pluck('id');
                // dd(count($newsTemp));
                if(count($newsTemp) == 0):
                    $carbon = new Carbon($item->pubDate);
                    $carbon->format('Y-m-d H:i:s');
                    $newsitem = New NewsItem();
                    $newsitem->user_id = $user->id;
                    $newsitem->title =$item->title;
                    $newsitem->description =htmlspecialchars_decode($item->description);
                    $newsitem->link =$item->link ;
                    $newsitem->rss_feed_id = $feed->id;
                    $newsitem->category_id = 1;
                    $newsitem->pubdate =$carbon;
                    $newsitem->save();
                endif;
                
                // dd($newsitem);
            endforeach;
        }
        

        //Sort feed entries by pubDate
        // usort($entries, function ($feed1, $feed2) {
        //     return strtotime($feed2->pubDate) - strtotime($feed1->pubDate);
        // });

        // return $entries;
    }
}
