@extends('global')

@section('test')
    <h1>Test Blade</h1>
    <a class="btn btn-info mb-3" href="{{ route('blog.index')}}">Home</a>
    <h3>META Token</h3>
    <articles></articles>
@endsection
