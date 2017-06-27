<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UploadedFile;
class FilesController extends Controller
{
    public function upload()
    {
        return view('files.upload');
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
        return redirect()->to('/upload');
    }

}
