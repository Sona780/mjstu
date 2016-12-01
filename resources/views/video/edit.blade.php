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
                        <form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{URL::to('/')}}/<?php echo('/videos/edit/update/'.$video->id) ?>">
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
                            {{ method_field('PATCH') }}

                            <div align="center">
                                <video width="320" height="240">
                                    <source src="{{URL::to('/')}}/{{$video->url}}">
                                </video>
                            </div>

                            <div class="form-group">
                                <label for="title" class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{$video->title}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description" class="col-md-4 control-label">Short Description</label>

                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control" name="description" value="{{$video->description}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
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
