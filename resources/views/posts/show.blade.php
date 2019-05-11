@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{$post->image}}" width="70%">
            </div>
            <div class="col-4">
                <div>
                    <h1>{{$post->user->username}}</h1>

                </div>

            </div>
        </div>
    </div>

@endsection