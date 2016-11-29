<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class VideoController extends Controller
{
    public function create(){
        return view('upload');
    }
    public function save(Request $request){
        $video = new App\Video();
        $video->title = $request['title'];
        $video->description = $request['description'];
        $video->url = $this->saveFile($request->file('file'));
        $video->owner = Auth::id();
        $video->save();
        return redirect('/videos/index');
    }
    public function saveFile($file){
        $destinationPath= "/assets/videos";
        $extension = $file->getClientOriginalExtension();
        $filename = str_random(8).".{$extension}";
        $upload_success = $file->move(public_path().'/'.$destinationPath, $filename);
        $url=$destinationPath.'/'. $filename;
        return $url;
    }
    public function index(){
        $videos = App\Video::where('owner',Auth::id())->get();
        return View::make('listvideos', array('videos'=>$videos));
    }
    public function showVideo($id){
        $video = App\Video::find($id);
        return view('showvideo',compact('video'));
    }
}
