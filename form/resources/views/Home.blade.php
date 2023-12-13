@extends('layouts.default')

@section('content')

<div>
    <h2>Posts</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>User</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->user->name }}</td> <!-- Assuming 'name' is the user attribute you want to display -->
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop
