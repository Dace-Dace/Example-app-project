@extends('dashboard')

@section('content')
<form action="/posts/edit/{{$post->id}}" method="post">
    @csrf
    
        Title : <input class="m-2 p-4 font-sans text-teal-700 rounded-md" type="text" name="title" value="{{ $post->title }}"><br>
        Body : <input class="m-2 p-4 font-sans text-teal-700 rounded-md" type="text" name="body" value="{{ $post->body }}"><br>
        Author : <input class="m-2 p-4 font-sans text-teal-700 rounded-md" type="text" name="author_name" value="{{ $post->author_name }}"><br>
    <input type="submit">
</form>
@endsection