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

                    @if($channel->admin == Auth::id())
                        Upload Video to Channel Part
                    @elseif(Auth::user()->channels()->find($channel->id))
                        <form method="POST" action="/channels/unsubscribe/{{ $channel->id }}">
                            {{ csrf_field() }}
                            <button class="btn" type="submit">Unsubscribe from this Channel</button>
                        </form>
                    @else
                        <form method="POST" action="/channels/subscribe/{{ $channel->id }}">
                            {{ csrf_field() }}
                            <button class="btn btn-primary" type="submit">Subscribe to this Channel</button>
                        </form>
                    @endif

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
