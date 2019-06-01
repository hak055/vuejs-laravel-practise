@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="image__wrapper col-8">
                <img class="minimized" src="/storage/{{$post->image}}" width="40%" style="" onmouseover="this.style.width='90%'" onmouseout="this.style.width='40%'">
            </div>
            <div class="col-4">
                <div>
                    <a href="/profile/{{$post->user_id}}">
                        <h1>{{$post->user->username}}</h1>
                    </a>

                </div>

            </div>
        </div>
    </div>
    <div class="magnify">
        
    </div>

@endsection