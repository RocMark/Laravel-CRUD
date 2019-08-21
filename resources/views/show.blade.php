@extends('global')

@section('main')
    <h1>PagiDemo</h1>
    <a class="btn btn-info mb-3" href="{{ route('blog.index')}}">Home</a>
    <a class="btn btn-warning mb-3" href="{{ route('blog.pagi')}}">分頁Demo</a>
    <form method="GET" action="{{ route('blog.index')}}">
        <label>
            <input type="text" name="keyword" placeholder="請輸入關鍵字" value="Mark">
        </label>
    </form>
    <ul class="list-group">
        @foreach ($blogs as $blog)
            <li class="list-group-item">
                <h3>ID: {{ $blog->id }}</h3>
                <h3>Title: {{ $blog->title }}</h3>
                <h3>Tag: {{ $blog->tag }}</h3>
                <p>Content: {{ $blog->content }}</p>
                <div class="blog_btn_group">
                    <a class="btn btn-info mr-2" href="/blog/edit/{{ $blog->id }}">編輯</a>
                    <form method="POST" action="/blog/{{ $blog->id }}">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">刪除</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
