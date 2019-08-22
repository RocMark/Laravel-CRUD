@extends('global')

@section('home')
    <h1>HomeBlade</h1>
    <a class="btn btn-info mb-3" href="{{ route('blog.index')}}">Home</a>
    <a class="btn btn-success mb-3" href="{{ route('blog.create')}}">新增資料</a>
    <a class="btn btn-dark mb-3" href="{{ route('email.send')}}">Email</a>

    <div class="dropdown mb-2">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
            Tag List
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @foreach($tags as $tag)
                <a class="dropdown-item" href="#">{{ $tag->name }}</a>
            @endforeach
        </div>
    </div>

    @if(session('message'))
        {{--  根據 message 替換 alert-success 或 alert-danger      --}}
        {{--  把邏輯搬到 Controller 去處理，Class只需要傳入變數  --}}
        <div class="alert {{session('class')}}" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <form method="GET" action="{{ route('blog.index')}}">
        <label>
            <input class="form-control" type="text" name="keyword" placeholder="請輸入關鍵字" value="">
        </label>
        <button class="btn btn-info">搜尋</button>
    </form>

    {{ $blogs->links() }}

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
