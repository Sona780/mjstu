<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


class ChannelController extends Controller
{
    public function create(){
        return view('createchannels');
    }
    public function save(Request $request){
        $channel = new App\Channel();
        $channel->name = $request['name'];
        $channel->description = $request['description'];
        $channel->admin = Auth::id();
        $channel->save();
        return redirect('/channels/index');
    }
    public function index(){
        $channels = App\Channel::where('admin',Auth::id())->get();
        return View::make('listchannels', array('channels'=>$channels));
    }
    public function browse(){
        $channels = App\Channel::all();
        return View::make('browsechannels', array('channels'=>$channels));
    }
    public function showChannel($id){
        $channel = App\Channel::find($id);
        return view('showchannel',compact('channel'));
    }
}
