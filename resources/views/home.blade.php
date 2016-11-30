@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Your Video Feed</div>

                @include('layouts.navbar')

                <div class="panel-body">
                    Video Feed Content

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
