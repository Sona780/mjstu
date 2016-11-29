@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Upload Video</div>

                    <ul class="nav nav-tabs">
                        <li role="presentation"><a href="{{URL::to('channels/index')}}">Manage Channels</a></li>
                        <li role="presentation"><a href="{{URL::to('channels/create')}}">Create a new Channel</a></li>
                        <li role="presentation"><a href="{{URL::to('videos/upload')}}">Upload a new Video</a></li>
                        <li role="presentation"><a href="{{URL::to('videos/index')}}">View my Videos</a></li>
                    </ul>
                <div class="panel-body">
                    <ul>
                        <form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ url('videos/upload/save') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="file" class="col-md-4 control-label">Select Video File to Upload</label>

                                <div class="col-md-6">
                                    <input id="file" type="file" class="form-control" name="file">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="title" class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title">
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
