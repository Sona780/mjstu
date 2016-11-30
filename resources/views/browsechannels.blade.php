@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">View All Channels</div>

                @include('layouts.navbar')

                <div class="panel-body">

                    @if(count($channels)>0)
                    <ul>
                        @foreach ($channels as $channel)
                            <li><a href="/channels/browse/{{ $channel->id }}"> {{ $channel->name }} </a></li>
                        @endforeach
                    </ul>
                    @else
                    <p>No Channels Exist.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
