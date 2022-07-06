<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use ArrayObject;
use Exception;
use Illuminate\Support\Facades\Http;
use Maatwebsite\Excel\Concerns\ToArray;

class NewsController extends Controller
{
    public function index()
    {
        try {
            $videoList = $this->_videoList();
            if( isset($videoList->error) ) {
                throw new Exception($videoList->error->message);
            }
            
            $all_news = News::where('status', 1)->latest()->paginate(2);

            $news = News::where('status', 1)->latest()->get();
            $filteredNews = array();
            foreach ($news as $element) {
                $filteredNews[strtolower($element['category'])][] = json_decode($element);
            }

            return view('news.index', ['news' => $filteredNews, 'all_news' => $all_news] ,compact('videoList'));
        } catch (\Throwable $th) {
            error_log('[!] '.$th->getMessage());
            return view('errors.500');
        }
    }

    public function show(News $news)
    {
        $data = [
            'newsList' => News::where('status', 1)->latest()->paginate(3),
        ];

        return view('news.show', $data, compact('news'));
    }

    protected function _videoList()
    {
        $part = 'snippet';
        $maxResults = '3';
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
