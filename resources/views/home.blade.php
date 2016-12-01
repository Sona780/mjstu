@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Your Video Feed</div>

                @include('layouts.navbar')

                <div class="panel-body">
                    <div align="center"><h4>Videos From Your Subscribed Channels</h4></div>
                    <?php
                        $channels = Auth::user()->channels()->get()->pluck('id');
                        $videos = App\Video::whereIn('channel',$channels)->get();
                    ?>

                    @if(count($videos)>0)
                    <ul>
                        @foreach ($videos as $video)
                            <li><a href="/videos/index/{{$video->id}}"> {{ $video->title }} </a></li>
                        @endforeach
                    </ul>
                    @else
                        <div align="center">No Videos to show right now. Subscribe to more channels to get Video feeds.</div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
