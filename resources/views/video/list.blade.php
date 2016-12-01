@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Videos Uploaded by You</div>

                @include('layouts.navbar')

                <div class="panel-body">

                    @if(count($videos)>0)
                    <ul>
                        @foreach ($videos as $video)
                            <li><a href="{{URL::to('/')}}/videos/index/{{$video->id}}"> {{ $video->title }} </a></li>
                        @endforeach
                    </ul>
                    @else
                        You haven't uploaded any video yet. <a href="{{URL::to('videos/upload')}}">Click Here</a> to upload a new video.
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
