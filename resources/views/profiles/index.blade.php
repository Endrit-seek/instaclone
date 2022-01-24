@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5" style="display:flex; align-items: center; justify-content: right">
            <img src="/img/php-profile.png" style="height: 110px; width:110px; " class="rounded-circle " alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pe-5"><strong>1k</strong> followers</div>
                <div class="pe-5"><strong>222</strong> following</div>
            </div>
            <div class="pt-4 fw-bold">{{ $user->profile->title}}</div>
            <div>{{ $user->profile->description ?? 'user not found' }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'user not found'}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" style="height: 245.33px; width:245.33px;" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
