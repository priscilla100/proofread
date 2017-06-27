<?php

namespace App\Http\Controllers;
use App\Download;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Mockery\Exception;

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
//

        if($save)
        {
            DB::beginTransaction();
            try {
                Download::create([
                    'title' => $title,
                    'filename' => $filename

                ]);
                var_dump('File downloaded to Downloads folder and saved to database as well :)');
                DB::commit();
            }
            catch (Exception $e){
                File::delete('Downloads/'.$filename);
                DB::rollback();
            }

        }

        return view('upload.download');
    }
}
