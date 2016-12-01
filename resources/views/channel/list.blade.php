@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Manage Your Channels</div>

                @include('layouts.navbar')

                <div class="panel-body">

                    @if(count($channels)>0)
                    <ul>
                        @foreach ($channels as $channel)
                            <li><a href="{{URL::to('/')}}/channels/browse/{{ $channel->id }}"> {{ $channel->name }} </a></li>
                        @endforeach
                    </ul>
                    @else
                    <p>You haven't created any channels yet. <a href="{{URL::to('channels/create')}}">Click Here</a> to create a new channel.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
