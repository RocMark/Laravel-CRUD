@extends('global')
@section('create')
    <h1>CreatePage</h1>
    <a class="btn btn-info mb-3" href="{{ route('blog.index')}}">Home</a><br>
    <form method="POST" class="d-inline-block" action="{{ route('blog.store')}}">
        @csrf
        <div class="form-group d-flex flex-column">
            <input type="hidden" name="userId" value="1">
            <label>
                Title:
                <input type="text" name="title" value="">
            </label>
            <label>
                Tag:
                <input type="number" name="tag" value="9999" required>
            </label>
            <label>
                <textarea name="content" cols="30" rows="10" required>new content</textarea>
            </label>
            <button class="btn btn-info">提出新資料</button>
        </div>
    </form>
@endsection
