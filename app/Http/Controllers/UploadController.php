<?php

namespace App\Http\Controllers;

use App\DocumentInfo;
use Illuminate\Http\Request;
use Illuminate\Http\File;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index(){
//        $upload = DocumentInfo::all();
//        return view('upload.upload', compact('upload'));
        return view('layouts.homepage');

    }
    public function store(Request $request)
    {
        if($request->hasFile('image')){
            $request->file('image');
            //return $request->image->path();
            //return $request->image->store('public');
            return Storage::putFile('public', $request->file('image'));

        }
        else{
            return 'No file selected';
        }
    }

    public function show()
    {
        return 'This will display file';
    }
    public function add(){


        request()->file('doc')->store('documents');
        return back();

    }
    public function upload()
    {

//        Storage::putFile('upload', new File('/public/Documents'));
        if(Input::hasFile('file')){
            echo 'Uploaded successfully<br/>';
            $file = Input::file('file');
            $file->move('Documents', $file->getClientOriginalName());
            echo '<img src="Documents/' . $file->getClientOriginalName() . '"/>';

        }
    }
}
