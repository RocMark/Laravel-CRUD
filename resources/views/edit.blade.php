@extends('global')
@section('edit')
    <h1>EditPage</h1>
    <form method="POST" class="d-inline-block" action="{{ route('blog.update',['id'=>$blog->id])}}">
        @method('PUT')
        @csrf
        <div class="form-group d-flex flex-column">
            <input type="hidden" name="userId" value="1">
            <label>
                Title:
                <input type="text" name="title" value="{{ $blog->title }}" required>
            </label>
            <label>
                Tag:
                <input type="number" name="tag" value="{{ $blog->tag }}" required>
            </label>
            <label>
                <textarea name="content" cols="30" rows="10" required>
                    {{ $blog->content }}
                </textarea>
            </label>
            <button class="btn btn-info">送出修改</button>
        </div>
    </form>
@endsection
