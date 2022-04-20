<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class PDFController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($name)
    {
        try {
            $nameOfFile = "$name.pdf";
            $file = public_path().DIRECTORY_SEPARATOR.'pdf'.DIRECTORY_SEPARATOR.$nameOfFile;
            $file = File::get($file);
            $response = Response::make($file,200);
            $response->header('Content-Type', 'application/pdf');
            return $response;
        } catch (\Throwable $th) {
            return abort(404);
        }
    }
}
