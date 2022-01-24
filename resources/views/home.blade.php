@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5" style="display:flex; align-items: center; justify-content: right">
            <img src="/img/php-profile.png" style="height: 110px; width:110px; " class="rounded-circle " alt="">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{$user->username}}</h1></div>
            <div class="d-flex">
                <div class="pe-5"><strong>100</strong> posts</div>
                <div class="pe-5"><strong>1k</strong> followers</div>
                <div class="pe-5"><strong>222</strong> following</div>
            </div>
            <div class="pt-4 fw-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="/img/laravel-post.png" style="height: 245.33px; width:245.33px;" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/node-post.png" style="height: 245.33px; width:245.33px;" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/vue-post.png" style="height: 245.33px; width:245.33px;" class="w-100">
        </div>
    </div>
</div>
@endsection
