@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create a new Channel</div>
                    <ul class="nav nav-tabs">
                        <li role="presentation"><a href="{{URL::to('channels/index')}}">Manage Channels</a></li>
                        <li role="presentation"><a href="{{URL::to('channels/create')}}">Create a new Channel</a></li>
                        <li role="presentation"><a href="{{URL::to('videos/upload')}}">Upload a new Video</a></li>
                    </ul>

                <div class="panel-body">
                    <ul>
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/channels/create/save') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Channel Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description" class="col-md-4 control-label">Short Description</label>

                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control" name="description">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Create
                                    </button>
                                </div>
                            </div>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
