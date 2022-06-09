@extends('dashboard')

@section('content')
<div class="mx-8">
    <a class="uppercase text-pink-700 font-bold" href="{{ route('posts.create') }}">
    Create
    </a>
</div>

<table class="m-8 p-8 font-sans text-teal-700">
    <thead class="uppercase">
        <th>ID</th>
        <th>Title</th>
        <th>Body</th>
        <th>Author name</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr class="p-8 divide-y divide-slate-300 hover:bg-slate-200">
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>{{ $post->author_name }}</td>
                <td>
                    <a class="text-teal-500" href="{{ route('posts.show', ['post' => $post->id]) }}">
                    Show
                    </a>
                    <a class="text-purple-500" href="{{ route('posts.edit', ['post' => $post->id]) }}">
                    Edit
                    </a>
                    <a class="text-sky-500" href="{{ route('posts.delete', ['post' => $post->id]) }}">
                    Delete
                    </a>
                </td>
            </tr>
        @endforeach
    <tbody>
</table>

@endsection
