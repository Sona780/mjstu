@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Upload Video</div>

                @include('layouts.navbar')

                <div class="panel-body">
                    <ul>
                        <form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ url('videos/upload/save') }}">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
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
                                <label for="channel" class="col-md-4 control-label">Select One Of Your Channels</label>

                                <div class="col-md-6">
                                    <select id="channel" class="form-control" name="channel">
                                        <option value="0" selected> Upload Outside of Channels </option>
                                        {{ $channels = App\Channel::where('admin',Auth::id())->get() }}
                                        @foreach ($channels as $channel)
                                            <option value="{{ $channel->id }}"> {{ $channel->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Upload
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
