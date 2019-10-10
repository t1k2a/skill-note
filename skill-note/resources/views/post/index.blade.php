@extends('layouts.app')
@section('title', '技術ノート')

@section('content')
    <div class="container mb-4">
        @if(count($posts) > 0)
            @foreach ($posts as $post)
                <div class="card mb-4">
                    <div class="card-header">
                        {{ $post->title }}
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            @if (mb_strlen($post->body) > 200)
                            {!! nl2br(e($post->body). '...') !!}
                        </p>
                    </div>
                    <div class="card-footer">
                        <span class="mr-2">
                            投稿日時{{ $post->created_at->format('Y.m.d') }}
                        </span>

                        @if($post->comments->count())
                            <span class="badge badge-primary">
                                コメント {{ $post->comments->count()}}件
                            </span>
                        @endif
                    </div>
                </div>
            @endforeach
        @else
            <div>投稿記事がありません</div>
        @endif
    </div>
@endsection