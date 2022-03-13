<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
 use Share;

class SocialShareController extends Controller
{
    public function index (){
        $socialShare = \Share::page('http://demo.surveyasia.id/news/detail-news')
                // ->facebook()
                // ->twitter()->GetRawLinks();

                ->facebook()
                ->twitter()
                ->linkedin()
                ->telegram()
                ->whatsapp()        
                ->reddit();
        
                return view('detail-news', compact ('socialShare'));
    }
}
