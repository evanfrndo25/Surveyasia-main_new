<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TutorialController extends Controller
{
    public function index()
    {
        $videoList = $this->_videoList();
        $data = [
            'newsList' => News::latest()->paginate(4),
        ];

        return view('researcher.tutorial.index', $data, compact('videoList'));
    }

    public function show(News $news)
    {
        return view('researcher.tutorial.show', compact('news'));
    }

    protected function _videoList()
    {
        $part = 'snippet';
        $maxResults = '4';
        $order = 'date';
        $channelId = config('services.youtube.channel_id');
        $apiKey = config('services.youtube.api_key');
        $youTubeEndPoint = config('services.youtube.search_endpoint');
        $type = 'video';

        $url = "$youTubeEndPoint?part=$part&maxResults=$maxResults&channelId=$channelId&type=$type&order=$order&key=$apiKey";
        $response = Http::get($url);
        $results = json_decode($response);

        return $results;
    }
}
