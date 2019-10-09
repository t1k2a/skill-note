@extends('layouts.app')
@section('title', '技術詳細')

@section('content')
    @section('maincopy', '技術詳細')

    @if($item !== '')
        <div class="headcopy">Title</div><hr>
        <div class="text">{{ $item->title }}</div>

        <div class="headdcopy">Content</div><hr>
        <div class="text">{{ $item->content }}</div>
    @endif

    <a href="/post"><img src="{{ asset('img/home-alt2.svg') }}" class="add" alt="topへ"></a>
@endsection