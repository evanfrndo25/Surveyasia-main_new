<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function index()
    {
        $videoList = $this->_videoList();
        $allNews = News::where('status', 1)->latest()->paginate(6);
        $belajarNews = News::where('status', 1)
                            ->where('category', '=', 'belajar')
                            ->latest()
                            ->paginate(6);

        
        $hobiNews = News::where('status', 1)
                        ->where('category', '=', 'hobi')
                        ->latest()
                        ->paginate(6);
        
        $bisnisNews = News::where('status', 1)
                        ->where('category', '=', 'bisnis')
                        ->latest()
                        ->paginate(6);


        $ProduktifitasNews= News::where('status', 1)
                        ->where('category', '=', 'Produktifitas')
                        ->latest()
                        ->paginate(6);
                        
        $lainnyaNews = News::where('status', 1)
                        ->where('category', '=', 'lainnya')
                        ->latest()
                        ->paginate(6);
                        
        $surveyasiaNews = News::where('status', 1)
                        ->where('category', '=', 'surveyasia')
                        ->latest()
                        ->paginate(6);
        
       
        $data = [
                "all_news" => $allNews,
                "belajar_news" => $belajarNews,
                "hobi_news" => $hobiNews,
                "bisnis_news" => $bisnisNews,
                "Produktifitas_news" => $ProduktifitasNews,
                "lainnya_news" => $lainnyaNews,
                "surveyasia_news" => $surveyasiaNews
                ];
        
        return view('news.index', $data, compact('videoList'));
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
