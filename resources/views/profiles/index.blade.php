@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://image.flaticon.com/icons/svg/61/61222.svg" width="100px" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> Post</div>
                <div class="pr-5"><strong>21k</strong> Followers</div>
                <div class="pr-5"><strong>23k</strong> Following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title ?? ''}}</div>
            <div>{{$user->profile->description ?? ''}}</div>
            <div><a href="#">{{$user->profile->url ?? "N/A"}}</a> </div>
        </div>
    </div>
    <div class="row pt-4">

        @foreach($user->posts as $post)
            <div class="col-4">
                {{$post['caption']}}
                {{$post['image']}}
                <img src="" width="100%">
                
            </div>
        @endforeach
        
</div>
@endsection
