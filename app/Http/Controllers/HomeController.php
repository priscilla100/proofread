<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UploadedFile;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');

    }
    public function upload(){
        $directory = 'FileUpload';
//        $files = Storage::files($directory);


        $files = UploadedFile::all();

        return view('files.upload')->with(array('files' => $files));
    }
    public function handleUpload(Request $request){
        if($request->hasFile('file')){
            $file = $request->file('file');
            $allowedFileTypes = config('app.allowedFileTypes');
            $maxFileSize = config('app.maxFileSize');

            $rules = [
                'file' => 'required|mimes:'.$allowedFileTypes.'|max:'.$maxFileSize
            ];
            $this->validate($request, $rules);

            $fileName = $file->getClientOriginalName();
            $destinationPath = 'FileUpload'.'/'.$fileName;
            $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));



            if($uploaded){

                UploadedFile::create([
                    'filename' => $fileName,
                    'filepath' => $destinationPath
                ]);

            }
        }
        return redirect()->to('/uploaded');
    }


}
