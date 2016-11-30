@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">VideoCenter</div>

                @include('layouts.navbar')

                <div align="center" class="panel-body">
                    <div class="page-header"><h1>{{$video->title}}</h1></div>
                    <video width="320" height="240" controls autoplay>
                        <source src="{{$video->url}}">
                    </video>

                    <br/>

                    {{ $video->description }}

                    <br/>

                    @if($video->owner == Auth::id())

                    <br/>

                    <a href="/videos/edit/{{$video->id}}">
                        <div align="center">
                            <button type="submit" class="btn btn-primary">
                                Update Details
                            </button>
                        </div>
                    </a>
                    <br/>
                    <a href="/videos/delete/{{$video->id}}">
                        <div align="center">
                            <button type="submit" class="btn btn-primary">
                                Delete Video
                            </button>
                        </div>
                    </a>

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
