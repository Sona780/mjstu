@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div align="center" class="panel-heading"><h3>{{ $channel->name }}</h3><br/>{{ $channel->description }}</div>

                @include('layouts.navbar')

                <?php $videos = $channel->videos ?>

                <div class="panel-body">

                    <h4>Videos in this Channel</h4>

                    @if(count($videos)>0)
                    <ul>
                        @foreach ($videos as $video)
                            <li><a href="/videos/index/{{$video->id}}"> {{ $video->title }} </a></li>
                        @endforeach
                    </ul>
                    @else
                        You Haven't Uploaded Any Video to this Channel.
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
