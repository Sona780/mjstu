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
                        <form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{URL::to('/')}}/<?php echo('/videos/delete/confirm/'.$video->id) ?>">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <div align="center">
                                <div class="page-header"><h1>{{$video->title}}</h1></div>
                                <video width="320" height="240">
                                    <source src="{{URL::to('/')}}/{{$video->url}}">
                                </video>
                                <br/>
                                {{ $video->description }}
                                <br/>

                            </div>
                            <br/>

                            <div align="center" class="form-group">

                                <div class="text-warning">Are you sure you want to delete this Video?</div>
                                <br/>
                                <div>
                                    <button type="submit" class="btn btn-primary">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div align="center">
                            <a href="{{URL::to('/')}}/<?php echo '/videos/index/'.$video->id ?>">
                                <button class="btn btn-primary">
                                    Cancel
                                </button>
                            </a>
                        </div>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
