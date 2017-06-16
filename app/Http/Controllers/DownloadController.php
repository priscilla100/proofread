<?php

namespace App\Http\Controllers;
use App\Download;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class DownloadController extends Controller
{
    public function index(){
        return view('upload.download');
    }
    public function download(){
        $url = Input::get('url');
        $title = Input::get('title');
        $extension = pathinfo($url, PATHINFO_EXTENSION);

        $filename = str_random(4).'-'.str_slug($title).'-'.$extension;

        $file = file_get_contents($url);
        $save = file_put_contents('downloads/'.$filename, $file);
        return view('upload.download');

//        if($save)
//        {
//            DB::beginTransaction();
//            try {
//                Photo::create([
//                    'title' => $title,
//                    'filename' => $filename
//
//                ]);
//            }
//        }
    }
}
