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
        $this->validate($request, [
            'name' => 'bail|required|unique:channels|max:255',
            'description' => 'required',
        ]);
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
    public function showChannel(App\Channel $channel){
        return view('showchannel',compact('channel'));
    }
    public function subscribeChannel(App\Channel $channel){
        Auth::user()->channels()->attach($channel);
        return back();
    }
    public function unsubscribeChannel(App\Channel $channel){
        Auth::user()->channels()->detach($channel);
        return back();
    }
}
