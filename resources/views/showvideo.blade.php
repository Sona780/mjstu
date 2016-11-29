@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Videos Uploaded by You</div>
                <ul class="nav nav-tabs">
                        <li role="presentation"><a href="{{URL::to('channels/index')}}">Manage Channels</a></li>
                        <li role="presentation"><a href="{{URL::to('channels/create')}}">Create a new Channel</a></li>
                        <li role="presentation"><a href="{{URL::to('videos/upload')}}">Upload a new Video</a></li>
                        <li role="presentation"><a href="{{URL::to('videos/index')}}">View my Videos</a></li>
                    </ul>

                <div align="center" class="panel-body">
                    <video width="320" height="240" controls autoplay>
                        <source src="{{$video->url}}">
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
