@extends('dashboard')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="mx-8 font-sans font-bold text-teal-700" action="/posts/create" method="post">
    @csrf

        Title: <input class="m-2 p-4 font-sans text-teal-700 rounded-md" type="text" name="title" value="{{ old('title') }}"><br>
        Body: <input class="m-2 p-8 font-sans text-teal-700 rounded-md divide-y-4" type="text" name="body" value="{{ old('body') }}"><br>
        Author: <input class="m-2 p-4 font-sans text-teal-700 rounded-md" type="text" name="author_name" value="{{ old('author_name') }}"><br>
    <input type="submit">
</form>

@endsection