<?php

namespace App\Http\Controllers;

use App\Board;
use App\Feed;
use App\FBPage;
use App\GooglePlus;
use App\Twitter;
use App\FBGroup;
use App\Campaign;
use App\ShareLog;
use App\Instagram;
use Carbon\Carbon;
use App\FBAppAuthenticate;
use App\Pinterest as PinterestAccount;
use Illuminate\Support\Facades\Auth;
use DirkGroenen\Pinterest\Pinterest;
use Mbarwick83\TwitterApi\TwitterApi;
use willvincent\Feeds\Facades\FeedsFacade as Feeds;
use Zenapply\Shortener\Facades\Shortener;

class TestController extends Controller
{
    public function __construct()
    {
    }
    public function test(){

        return view('test');
    }

}