@extends('layout.app')
@section('title', '技術ノート')

@section('content')
    <div class="container mb-4">
        <div class="mb-4">
            @auth   
                <a href="{{ route('posts.create') }}" class="btn btn-primary">
                投稿を新規作成する
                </a>
            @endauth
        </div>
        @foreach ($posts as $post)
            <div class="card mb-4">
                <h2>
                    <div class="card-header">
                        {{ $post->title }}
                    </div>
                </h2>
                <div class="card-body">
                    <h4>
                        <p class="card-text">
                            {!! nl2br(e(str_limit($post->body, 200))) !!}
                        </p>
                    </h4>
                    <a class="card-link" href="{{ route('posts.show', ['post' => $post]) }}">続きを読む
                    </a>
                </div>
                <div class="card-footer">
                    <span class="mr-2">
                        投稿日時{{ $post->created_at->format('Y.m.d') }}
                    </span>

                    @if($post->comments->count())
                        <span>
                            コメント {{ $post->comments->count()}}件
                        </span>
                    @endif
                </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-center mb-5">
            {{ $posts->links() }}
        </div>
        @if(count($posts) === 0)
            <div>投稿記事がありません</div>
        @endif
    </div>
@endsection