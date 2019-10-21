@extends('layout.app')
@section('title', '技術詳細')
@section('script')
    <script>
        function delete_alert(e){
            if(!window.confirm('本当に削除しますか？')){
                window.alert('キャンセルされました');
                return false;
            }
            document.deleteform.submit();
        }
    </script>
@endsection
@section('content')
  <div class="container mt-4">
        <div class="mb-4 text-right">
            @auth                
                <a class="btn btn-primary" href="{{ route('posts.edit',['post' => $post]) }}">
                    編集する
                </a>

                <form style="display: inline-block;" method="POST" action="{{ route('posts.destroy', ['post' => $post]) }}">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger" onClick="delete_alert(event);return false;">削除する</button>
                </form>
        </div>
            @endauth
      <div class="border p-4">
          <h2 class="mb-4">
              {{ $post->title }}
          </h2>

          <h4 class="mb-5">
              {!! nl2br(e($post->body)) !!}
          </h4>

          <form class="mb-4" method="POST" action="{{ route('comments.store') }}">
              @csrf

              <input name="post_id" type="hidden" value="{{ $post->id }}">

              <div class="form-group">
                  <label for="body">
                      本文
                  </label>

                  <textarea name="body" id="body" rows="4">
                      {{ old('body') }}
                  </textarea>
                  @if ($errors->has('body'))
                    <div class="invalid-feedback">
                        {{ $errors->first('body') }}
                    </div>
                  @endif
              </div>

              <div class="mt-4">
                  <button type="submit" class="btn btn-primary">
                      コメントする
                  </button>
              </div>
          </form>
          <section>
              <h2 class="h5 mb-4">
                  コメント
              </h2>
              @forelse ($post->comments as $comment)
                <div class="border-top p-4">
                    <time class="text-secondary">
                        {{ $comment->created_at->format('Y.m.d H:i') }} 
                    </time>
                    <p class="mt-2">
                        {!! nl2br(e($comment->body)) !!}
                    </p>
                </div>
              @empty
                  <p>コメントはまだありません。</p>
              @endforelse
          </section>
      </div>
  </div>
@endsection