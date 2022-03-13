<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UploadFileController extends Controller
{
    //

    // specified for images only
    public function imageUpload(Request $request)
    {
        # code...

        // on demand validator to validate incoming request
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'name' => 'required',
            'signature' => 'required',
            'survey_title' => 'required',
            'ssf_file' => 'required|image|max:1024' //use mimes for custom extensions
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 401);
        }

        $userId = $request->file('user_id');
        $file = $request->file('ssf_file');
        $name = Str::kebab($request->get('name'));
        $signature = $request->get('signature');
        $survey_title = Str::snake($request->get('survey_title'));

        // $hashedName = Hash::make($name);

        $path = 'users/' . $name . "/" . $survey_title . "/media/" . $signature;

        // for debugging purpose
        /*  Log::build(
            [
                'driver' => 'single',
                'path' => storage_path('logs/debug.log')
            ]
        )->info('image upload API', ['request' => $request->all()]); */

        if ($file) {
            // delete all existing media for this signature (if exists)
            // to prevent overloaded space
            Storage::disk('public')->deleteDirectory($path);

            // store new file and return accessible link
            return response()->json([
                'signature' => $signature,
                'url' => Storage::url($file->store($path))
            ]);
        }
    }
}
